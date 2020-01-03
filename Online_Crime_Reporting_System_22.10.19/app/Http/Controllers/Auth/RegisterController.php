<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Session;
use Auth;
use File;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    //https://laraveldaily.com/9-things-you-can-customize-in-laravel-registration/ 

    protected $redirectTo = '/register';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'voterId'   => ['required', 'string', 'max:17', 'unique:users'],
            'gender'    => ['required', 'string'],
            'age'       => ['required', 'integer'],
            'address'   => ['required', 'string', 'max:1000'],
            'phone'     => ['required', 'string'],
            // 'image' => ['required', 'string','image','max:102400'],
            'image'     => 'required|image|max:1024000',
            'password'  => ['required', 'string', 'min:6', 'confirmed'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $request = request();

        // $profileImage  = $request->file('image'); 
        // $profileImageSaveAsName  = time() . "profile_." . Auth::id() .$profileImage->getClientOriginalExtension();
       
        // $upload_path = 'uploads/users/';
        // $profile_image_url  = $upload_path . $profileImageSaveAsName;
        // $success = $profileImage->move($upload_path, $profileImageSaveAsName);
        

        $image = $request->file('image'); //file('image')- here 'image' is file name
        $file_name = uniqid('image_',true).str_random(10).'.'.$image->getClientOriginalExtension();
        if ($image->isValid()) 
        {
            $image->storeAs('users', $file_name);
        }

        return User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'voterId'   => $data['voterId'],
            'gender'    => $data['gender'],
            'age'       => $data['age'],
            'address'   => $data['address'],
            'phone'     => $data['phone'],
            // 'image' => $profile_image_url,
            'image'     => $file_name,
            'password'  => Hash::make($data['password']),
        ]);

        return redirect()->back()->withSuccess('IT WORKS!');

        //return redirect()->back();
    }

    // public function register(Request $request)
    // {
    //     $this->validator($request->all())->validate();

    //     event(new Registered($user = $this->create($request->all())));

    //     return $this->registered($request, $user)
    //         ?: redirect($this->redirectPath());
    // }
}
