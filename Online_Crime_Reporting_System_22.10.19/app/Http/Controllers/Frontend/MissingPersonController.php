<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\MissingPerson;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use File;
use Auth;

class MissingPersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $missing_Persons = MissingPerson::all();
        return view('frontend.user.pages.missing_person.index',compact('missing_Persons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.user.pages.missing_person.create');
    }

    
    public function store(Request $request)
    {
        //--------------------------- validation -----------------------------
        $validator= Validator::make($request->all(),[
            'name'        => 'required|max:25',
            'gender'      => 'required',
            'age'         => 'required',
            'description' => 'required',
            'status'      => 'required',
            'show'        => 'required',
            'image'       => 'required|image',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('image'); //file('image')- here 'image' is file name
        $file_name = uniqid('image_',true).str_random(10).'.'.$image->getClientOriginalExtension();
        if ($image->isValid()) 
        {
            $image->storeAs('missing_person/user', $file_name);
        }

        //--------------------------- database insert -----------------------------
        
        //$admin_id = Session::get('id');

        $missingPerson = new MissingPerson();
        
        //--- if Image/video is not selected
        $missingPerson->create([     
                'user_id'         => Auth::user()->id,
                'name'            => trim($request->input('name')),
                'gender'          => trim($request->input('gender')),
                'age'             => trim($request->input('age')),
                'physical_details'=> trim($request->input('physical_details')),
                'description'     => trim($request->input('description')),
                'address'         => trim($request->input('address')),
                'phone'           => trim($request->input('phone')),
                'status'          => trim($request->input('status')),
                'show'            => $request->input('show'), //trim use for remove white space
                'image'           => $file_name,
    
            ]);



        session()->flash('type','success');
        session()->flash('message','Data Insert Successfully.');
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $missing_Person = MissingPerson::find($id);
        return view('frontend.user.pages.missing_person.show',compact('missing_Person'));
    }

    
    public function edit($id)
    {
        $missing_Person = MissingPerson::find($id);
        return view('frontend.user.pages.missing_person.edit',compact('missing_Person'));
    }

    
    public function update(Request $request, $id)
    {
         //--------------------------- validation -----------------------------
         $validator= Validator::make($request->all(),[
            'name'            => 'required',
            'gender'          => 'required',
            'age'             => 'required',
            'physical_details'=> 'nullable',
            'description'     => 'required',
            'status'          => 'required',
            'show'            => 'required',
            'image'           => 'image'
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //--------------------------- database insert -----------------------------
        
        
        $missingPerson = MissingPerson::find($id);
        
        //--- Without Selected Image
        $missingPerson->update([     
                'name'             => trim($request->input('name')),
                'gender'             => trim($request->input('gender')),
                'age'             => trim($request->input('age')),
                'physical_details' => trim($request->input('physical_details')),
                'description'      => trim($request->input('description')),
                'address'          => trim($request->input('address')),
                'phone'            => trim($request->input('phone')),
                'status'           => trim($request->input('status')),
                'show'             => $request->input('show'),     
            ]);


        //--- With Select Image
        $file = $request->file('image');  
        if ($file) 
        {
            if (File::exists('uploads/missing_person/user/'.$missingPerson->image)) //Previous File Deletd from directory after new Update 
            {
                File::delete('uploads/missing_person/user/'.$missingPerson->image);
            }

            $image = $request->file('image'); //file('image')- here 'image' is file name
            $file_name = uniqid('image_',true).str_random(10).'.'.$image->getClientOriginalExtension();
            if ($image->isValid()) 
            {
                $image->storeAs('missing_person/user', $file_name);
            }

            $missingPerson->update([
                'image' => $file_name,
            ]);
        }

        session()->flash('type','success');
        session()->flash('message','Data Updated Successfully.');
        
        return redirect()->back();
    }

    
    public function delete($id)
    {
        $missingPerson = MissingPerson::find($id);
        if (!is_null($missingPerson)) 
        {

            if (File::exists('uploads/missing_person/user/'.$missingPerson->image)) //For Directory path
            {
                File::delete('uploads/missing_person/user/'.$missingPerson->image);
            }
            $missingPerson->delete();
        }

        session()->flash('type','success');
        session()->flash('message','Data Deleted Successfully.');

        return redirect()->back();
    }
}
