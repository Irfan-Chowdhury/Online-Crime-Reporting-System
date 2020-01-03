<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Complain;
use App\Models\Emergency;
use App\Models\Feedback;
use App\Models\User;
use File;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('backend.pages.users.index',compact('users'));
    }

    public function delete($id)
    {
        $user = User::find($id);

        if (!is_null($user)) 
        {
            if (File::exists('uploads/missing_others/'.$user->image)) //For Directory path
            {
                File::delete('uploads/missing_others/'.$user->image);
            }
            $user->delete();
        }

        session()->flash('type','success');
        session()->flash('message','Data Deleted Successfully.');

        return redirect()->back();
    }


    public function userComplain_index()
    {
        // $user_complains = Complain::all();
        $user_complains = Complain::orderBy('id','ASC')->get();

        return view('backend.pages.user_complain.index',compact('user_complains'));
    }

    public function userComplain_show($id)
    {
        $complain = Complain::find($id);

        return view('backend.pages.user_complain.show',compact('complain'));
    }

    public function action_update(Request $request, $id)
    {
        $complain = Complain::find($id);

        // $complain->update([     
        //     'status'    => $request->input('status'),
        // ]);

        $complain->status = $request->status;

        $complain->update();

        return redirect()->back();
    }


    // -------------- User Feed Back -------------

    public function userFeedback_index()
    {
        $users_feedback = Feedback::all();
        return view('backend.pages.user_feedback.index',compact('users_feedback'));
    }


    // -------------- User Feed Back -------------

    public function emergency_index()
    {
        $emergencies = Emergency::orderBy('id','DESC')->get();
        
        return view('backend.pages.user_emergency.index',compact('emergencies'));
    }

    public function emergency_update($id)
    {
        $emergency = Emergency::find($id);
        $emergency->status = "Done";

        $emergency->update();
        return redirect()->back();
    }


    
}
