<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MissingPerson;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use File;

class MissingPersonController extends Controller
{
    
    public function index()
    {
        $missing_Persons = MissingPerson::all();
        return view('backend.pages.missing_person.index',compact('missing_Persons'));
    }

    
    public function create()
    {
        return view('backend.pages.missing_person.create');
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
            $image->storeAs('missing_person/admin', $file_name);
        }

        //--------------------------- database insert -----------------------------
        
        $admin_id = Session::get('id');

        $missingPerson = new MissingPerson();
        
        //--- if Image/video is not selected
        $missingPerson->create([     
                'admin_id'         => $admin_id,
                'name'             => trim($request->input('name')),
                'gender'           => trim($request->input('gender')),
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

    
    public function show($id)
    {
        $missing_Person = MissingPerson::find($id);
        return view('backend.pages.missing_person.show',compact('missing_Person'));
    }

    
    public function edit($id)
    {
        $missingPerson = MissingPerson::find($id);
        return view('backend.pages.missing_person.edit',compact('missingPerson'));
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
        
        $admin_id = Session::get('id');

        $missingPerson = MissingPerson::find($id);
        
        //--- Without Selected Image
        $missingPerson->update([     
                'admin_id'         => $admin_id,
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
            if (File::exists('uploads/missing_person/admin/'.$missingPerson->image)) //Previous File Deletd from directory after new Update 
            {
                File::delete('uploads/missing_person/admin/'.$missingPerson->image);
            }

            $image = $request->file('image'); //file('image')- here 'image' is file name
            $file_name = uniqid('image_',true).str_random(10).'.'.$image->getClientOriginalExtension();
            if ($image->isValid()) 
            {
                $image->storeAs('missing_person/admin', $file_name);
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
            // If it is Parent Category, Then We will Delete all it's Sub Category
            // if ($category->parent_id == NULL) 
            // {
            //     $sub_categories = Category::orderBy('name','asc')->where('parent_id',$category->id)->get();
            //     foreach ($sub_categories as  $sub) 
            //     {
            //         if (File::exists('image/category-image/'.$sub->image)) 
            //         {
            //             File::delete('image/category-image/'.$sub->image);
            //         }
            //         $sub->delete();
            //     }
            // }

            if (File::exists('uploads/missing_person/admin/'.$missingPerson->image)) //For Directory path
            {
                File::delete('uploads/missing_person/admin/'.$missingPerson->image);
            }
            $missingPerson->delete();
        }

        session()->flash('type','success');
        session()->flash('message','Data Deleted Successfully.');

        return redirect()->back();
        
    }
}
