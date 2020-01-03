<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\VerificationEmail;
use App\Models\Admin;
use App\Models\CriminalRecord;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Hash;
use Auth;
use Illuminate\Support\Facades\Mail;
use File;


class UserController extends Controller
{
//   =============== For User Registration / Login ================

    public function create()
    {
        return view('frontend.user.pages.register.register');
    }

    public function store(Request $request)
    {
        $validator= Validator::make($request->all(),[
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'voterId'   => ['required', 'string', 'max:17', 'unique:users'],
            'gender'    => ['required', 'string'],
            'age'       => ['required', 'integer'],
            'address'   => ['required', 'string', 'max:1000'],
            'phone'     => ['required', 'string'],
            'image'     => 'required|image|max:1024000',
            'password'  => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('image'); //file('image')- here 'image' is file name
        $file_name = uniqid('image_',true).str_random(10).'.'.$image->getClientOriginalExtension();
        if ($image->isValid()) 
        {
            $image->storeAs('users', $file_name);
        }

        //--------------------------- database insert -----------------------------

        $user = User::create([
            'name'      => trim($request->input('name')),
            'email'     => strtolower(trim($request->input('email'))),
            'voterId'   => trim($request->input('voterId')),
            'gender'    => trim($request->input('gender')),
            'age'       => trim($request->input('age')),
            'address'   => trim($request->input('address')),
            'phone'     => trim($request->input('phone')),
            // 'image' => $profile_image_url,
            'image'     => $file_name,
            'email_verification_token'  => str_random(32),  //new
            'password'  => Hash::make($request->input('password')),
        ]);

        // ========= Notification ========
            $admin = Admin::find(3);
            $admin->notify(new NotifyAdmin($user));
        // ========= Notification End ========

        Mail::to($user->email)->send(new VerificationEmail($user)); //new


        //session()->flash('type','success');
        session()->flash('message','Registration Successful. Please check your email for verify account');
        
        return redirect()->back();
    }

    //  ===============  Email Verification ====================

    public function verifyEmail($token = NULL)
    {
        if ($token == NULL) 
        {
            session()->flash('type','warning');
            session()->flash('message','Invalid Token');

            return redirect()->route('userRegistration');
        }

        $user = User::where('email_verification_token',$token)->first();

        if ($user == NULL) 
        {
            session()->flash('type','warning');
            session()->flash('message','Invalid Token');

            return redirect()->route('userRegistration');
        }

        $user->update([
            'email_verified' => 1 ,
            'email_verified_at' => Carbon::now() ,  //current time update
            'email_verification_token' => '',
        ]);

        session()->flash('type','success');
        session()->flash('message','Your Accout has been activated, You Can Login Now');

        return redirect()->route('login');
    }


    // public function processLogin(Request $request)
    // {
    //     $this->validate($request,[
    //         'email'         =>'required|email',
    //         'password'      =>'required|min:6',
    //      ]);


    //     //return $request->except(['_token']);
    //     $credentials = $request->except(['_token']);

    //     if (auth()->attempt($credentials))  
    //     {
    //         $user = auth()->user();
    //         if ($user->email_verified == 0) 
    //         {
    //             session()->flash('type','danger');
    //             session()->flash('message','Your account still not verified');
    //             auth()->logout();

    //             return redirect()->route('login'); 
    //         }

    //         //return redirect()->route('dashboard'); 
    //     }

    //     //if you write wrong email or pass-
    //     session()->flash('type','danger');
    //     session()->flash('message','Credentials Incorrect');
    //     return redirect()->back();
    // }

    // =======================  User Registration End ================




    
    public function dashboard()
    {
        //return view('frontend.user.layouts.master'); //need to change later
        return view('frontend.user.pages.dashboard'); //need to change later
    }


    public function all_mostWanted()
    {
        // $criminalRecords = CriminalRecord::all();
        $criminalRecords = CriminalRecord::orderBy('id','DESC')->get();

        return view('frontend.user.pages.most_wanted.all_mostWanted',compact('criminalRecords')); //need to change later
    }

    public function view_mostWanted($id)
    {
        $most_wanted_criminal = CriminalRecord::find($id);

        return view('frontend.user.pages.most_wanted.view_mostWanted',compact('most_wanted_criminal')); //need to change later
    }


    
    // ************ Profile  ************
    public function edit()
    {
        $user_id = Auth()->user()->id;

        $user = User::find($user_id);

        return view('frontend.user.pages.profile.edit',compact('user'));
    }


    public function update(Request $request,$id)
    {
        $validator= Validator::make($request->all(),[
            'name'      => ['required', 'string', 'min:5', 'max:30'],
            'age'       => ['required', 'integer'],
            'address'   => ['required', 'string', 'max:1000'],
            'phone'     => ['required', 'string'],
            'image'     => 'nullable|image|max:1024000',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //--------------------------- database insert -----------------------------

        $user = User::find($id);

        $user->update([
            'name'      => trim($request->input('name')),
            'age'       => trim($request->input('age')),
            'address'   => trim($request->input('address')),
            'phone'     => trim($request->input('phone')),
        ]);


        //--- With Select Image
        $file = $request->file('image');  
        if ($file) 
        {
            if (File::exists('uploads/users/'.$user->image)) //Previous File Deletd from directory after new Update 
            {
                File::delete('uploads/users/'.$user->image);
            }

            $image = $request->file('image'); //file('image')- here 'image' is file name
            $file_name = uniqid('image_',true).str_random(10).'.'.$image->getClientOriginalExtension();
            if ($image->isValid()) 
            {
                $image->storeAs('users', $file_name);
            }

            $user->update([
                'image' => $file_name,
            ]);
        }

        

        session()->flash('type','success');
        session()->flash('message','Profile Updated Successfully');
        
        return redirect()->back();
    }


            //--------------------------- Password Change -----------------------------

    public function password_change()
    {
        return view('frontend.user.pages.profile.password_change');
    }



    public function update_pass(Request $request)  //problem
    {
        $validator= Validator::make($request->all(),[
            'old_pass'    => 'required|min:5|max:25',
            'new_pass'    => 'required|min:5|max:25',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user_id = Auth::user()->id;

        $user =  User::find($user_id);

        $old_password = Hash::make($request->input('old_pass'));

        if ($user->password == $old_password) {

            $user->password = Hash::make($request->input('new_pass'));

            $user->update();
            session()->flash('type','success');
            session()->flash('message','Password Change Successfully.');
            
            
        }
        else {

            return redirect()->back();
            session()->flash('type','danger');
            session()->flash('message','Old Password does not match');
            return redirect()->back();
        }

        

    }
}
