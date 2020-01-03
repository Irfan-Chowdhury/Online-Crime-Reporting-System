<?php

namespace App\Http\Controllers\Backend;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

// --- Login ----
// use DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
Session_start();
// -------

class AdminController extends Controller
{
    //--------------  এটার কাজ middleware দিয়ে করে দেয়া হয়েছে -----------
    // public function __construct()
    // {
    //     $this->AdminAuthCheck();
    // }

    // public function AdminAuthCheck()
    // {
    //     $admin_id = Session::get('id');
    //     if ($admin_id) 
    //     {
    //         return;
    //     }
    //     else 
    //     {
    //         // return Redirect::to('/admin')->send();
    //         return redirect()->route('admin.login')->send();
    //     }
    // }
    //--------------  এটার কাজ middleware দিয়ে করে দেয়া হয়েছে -----------

    // ----- Login part --------

    public function login()
    {
        $admin_id = Session::get('id');
        if ($admin_id) 
        {
            //return redirect()->route('admin.dashboard')->send();
            return redirect()->back()->send();
        }
        return view('backend.login');
    }


    public function loginProcess(Request $request)
    {
        //return view('admin.dashboard');
        $email    = $request->email;
        $password = md5($request->password);
        $result   = DB::table('admins')
                ->where('email',$email)
                ->where('password',$password)
                ->first();  //একটা টেবিল হলে first(); একাধিক টেবিল হলে get();

        if ($result) 
        {
             Session::put('id',$result->id);
             Session::put('email',$result->email);  //put() means as like set()
             Session::put('fullname',$result->fullname);
             Session::put('image','uploads/images/'.$result->image);
             
             return redirect()->route('admin.dashboard');  //then it call admin_dashboard Method 
                      
        }
        else 
        {
            // session()->flash('type','red');
            session()->flash('message','Emalil or Password Wrong.');
            return redirect()->route('admin.login');
        }
    }

    //Logout Part
    public function logout()
    {
        Session::flush();
        return redirect()->route('admin.login');
    }

    // ------------- Login part end ------



    public function dashboard()
    {
        //$data['user']= auth()->user();
        // $user = User::all();


        return view('backend.pages.dashboard');
        // return view('backend.layouts.mastertemplate',compact('user'));
        // return view('backend.pages.dashboard',$data);
    }

  
    public function index()
    {
        $data['admins']=Admin::all();
        return view('backend.pages.admin.index',$data);
    }

   
    public function create()
    {
        return view('backend.pages.admin.create');
    }

    
    public function store(Request $request)
    {
        //--------------------------- validation -----------------------------
        $validator= Validator::make($request->all(),[
            'fullname'  => 'required',
            'username'  => 'required',
            'email'     => 'required|email',
            'voterId'   => 'required',
            'district'  => 'required',
            'thana'     => 'required',
            'phone'     => 'required',
            'password'  => 'required|min:5',
            'image'     => 'required|image|max:10240',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('image'); //file('image')- here 'image' is file name
        $file_name = uniqid('image_',true).str_random(10).'.'.$image->getClientOriginalExtension();
        if ($image->isValid()) 
        {
            $image->storeAs('images', $file_name);
        }

        //--------------------------- database insert -----------------------------

        Admin::create([
            'fullname' => trim($request->input('fullname')),
            'username' => strtolower(trim($request->input('username'))),
            'email'    => strtolower(trim($request->input('email'))), //trim use for remove white space
            'voterId'  => trim($request->input('voterId')), //trim use for remove white space
            'district' => $request->district, 
            'thana'    => trim($request->input('thana')), //trim use for remove white space
            'phone'    => trim($request->input('phone')), //trim use for remove white space
            'password' => md5($request->input('password')),
            'image'    => $file_name,
        ]);


        session()->flash('type','success');
        session()->flash('message','Registration Successful.');
        
        return redirect()->back();
    }

    
    public function show($id)
    {
        $data['admin']=Admin::find($id);
        return view('backend.pages.admin.show',$data);
    }

   
    public function edit($id)
    {
        $data['admin']=Admin::find($id);
        return view('backend.pages.admin.edit',$data);
    }

    
    public function update(Request $request, $id)
    {
        //--------------------------- validation -----------------------------
        $validator= Validator::make($request->all(),[
            'fullname'  => 'required',
            'username'  => 'required',
            'email'     => 'required|email',
            'voterId'   => 'required',
            'district'  => 'required',
            'thana'     => 'required',
            'phone'     => 'required',
            // 'password'  => 'required|min:5',
            'image'     => 'required|image|max:10240',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('image'); //file('image')- here 'image' is file name
        $file_name = uniqid('image_',true).str_random(10).'.'.$image->getClientOriginalExtension();
        if ($image->isValid()) 
        {
            $image->storeAs('images', $file_name);
        }

        //--------------------------- database insert -----------------------------

        $admin = Admin::find($id);

        $admin->update([
            'fullname' => trim($request->input('fullname')),
            'username' => strtolower(trim($request->input('username'))),
            'email'    => strtolower(trim($request->input('email'))), //trim use for remove white space
            'voterId'  => trim($request->input('voterId')), //trim use for remove white space
            'district' => $request->district, 
            'thana'    => trim($request->input('thana')), //trim use for remove white space
            'phone'    => trim($request->input('phone')), //trim use for remove white space
            'password' => bcrypt($request->input('password')),
            'image'    => $file_name,
        ]);

        session()->flash('type','success');
        session()->flash('message','Update Successful.');
        
        return redirect()->back();
    }

    
    public function delete($id)
    {
        $admin = Admin::find($id);
        $admin->delete();

        session()->flash('type','danger');
        session()->flash('message','Admin Deleted');
        
        return redirect()->route('admin.index');
    }
}
