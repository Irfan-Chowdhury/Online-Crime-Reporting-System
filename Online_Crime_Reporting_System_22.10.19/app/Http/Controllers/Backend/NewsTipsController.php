<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NewsTips;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
session_start();

class NewsTipsController extends Controller
{
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
    //         return Redirect::to('/admin')->send();
    //         return redirect()->route('admin.login')->send();
    //     }
    // }



    public function index()
    {
        
        $data['news_tips'] = DB::table('news_tips')
                            ->select('id','title','description','image_video','type')
                            ->get();
        return view('backend.pages.newstips.index',$data);
    }

  
    public function create()
    {
        return view('backend.pages.newstips.create');
    }

    
    public function store(Request $request)
    {
        //--------------------------- validation -----------------------------
        $validator= Validator::make($request->all(),[
            'title'        => 'required',
            'description'  => 'required',
            'type'         => 'required',
            'image_video'  => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image_video = $request->file('image_video'); //file('image')- here 'image' is file name
        $file_name = uniqid('image_',true).str_random(10).'.'.$image_video->getClientOriginalExtension();
        if ($image_video->isValid()) 
        {
            $image_video->storeAs('news_tips', $file_name);
        }

        //--------------------------- database insert -----------------------------
        
        $admin_id = Session::get('id');

        $newtips = new NewsTips();
        //--- if Image/video is not selected
        
        $newtips->create([
                'admin_id'    => $admin_id,
                'title'       => trim($request->input('title')),
                'slug'        => str_slug($request->input('title')),
                'description' => $request->input('description'), //trim use for remove white space
                'type'        => $request->input('type'), //trim use for remove white space
                'image_video' => $file_name,
    
            ]);


        //---if Image/video is selected
        // $file = $request->file('image_video');  //if select Image
        // if ($file) 
        // {
        //     $image_video = $request->file('image_video'); //file('image_video')- here 'image_video' is file name
        //     $file_name = uniqid('file_',true).str_random(10).'.'.$image_video->getClientOriginalExtension();
        //     if ($image_video->isValid()) 
        //     {
        //         $image_video->storeAs('news_tips', $file_name);
        //     }

        //     $newtips->create([
        //         'image_video' => $file_name,
        //     ]);
        // }

        session()->flash('type','success');
        session()->flash('message','Post Insert Successfully.');
        
        return redirect()->back();
    }

    
    public function show($id)
    {
        $data['newstips']=NewsTips::select('title','slug','description','type','image_video','created_at')
                                ->find($id);
        return view('backend.pages.newstips.show',$data);

        // return view('backend.pages.newstips.show');
    }

    
    public function edit($id)
    {
        $data['newstips']=NewsTips::find($id);
        return view('backend.pages.newstips.edit',$data);
    }

    
    public function update(Request $request, $id)
    {
        //--------------------------- validation -----------------------------
        $validator= Validator::make($request->all(),[
            'title'        => 'required',
            'description'  => 'required',
            'type'         => 'required',
            //'image_video'  => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //--------------------------- database Updated -----------------------------
        $admin_id = Session::get('id');

        $newtips = NewsTips::find($id);

        $newtips->update([  //without Image
            'admin_id'    => $admin_id,
            'title'       => trim($request->input('title')),
            'slug'        => str_slug($request->input('title')),
            'description' => $request->input('description'), //trim use for remove white space
            'type'        => $request->input('type'), //trim use for remove white space
        ]);


        $file = $request->file('image_video');  //if select Image
        if ($file) 
        {
            $image_video = $request->file('image_video'); //file('image_video')- here 'image_video' is file name
            $file_name = uniqid('file_',true).str_random(10).'.'.$image_video->getClientOriginalExtension();
            if ($image_video->isValid()) 
            {
                $image_video->storeAs('news_tips', $file_name);
            }

            $newtips->update([
                'image_video' => $file_name,
            ]);
        }


        session()->flash('type','success');
        session()->flash('message','Post Updated Successfully.');
        
        return redirect()->back();
    }

    
    public function delete($id)
    {
        $newstips = NewsTips::find($id);
        $newstips->delete();

        session()->flash('type','success');
        session()->flash('message','Post deleted Succesfully');
        
        return redirect()->route('admin.newstips.index');
    }
}
