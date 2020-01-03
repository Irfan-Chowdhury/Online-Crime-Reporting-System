<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MissingCategory;
use App\Models\MissingOther;
use Session;
use Validator;
use File;
class MissingOtherController extends Controller
{
    
    public function index()
    {
        $data['missing_others'] = MissingOther::orderBy('id', 'ASC') //drop down
                                  ->get();

        return view('backend.pages.missing_other.index',$data);
    }

   
    public function create()
    {
        $data['missing_categories'] = MissingCategory::orderBy('missingCategoryName', 'ASC') //drop down
                                        ->get();

        return view('backend.pages.missing_other.create',$data);
    }

    
    public function store(Request $request)
    {
        //--------------------------- validation -----------------------------
        $validator= Validator::make($request->all(),[
            'missing_category_id' => 'required',
            'missing_title'       => 'required|max:25',
            'owner_name'          => 'nullable|max:25',
            'description'         => 'nullable|max:1000',
            'address'             => 'required|max:1000',
            'phone'               => 'required',
            'status'              => 'required',
            'show'                => 'required',
            'image'               => 'required|image',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('image'); //file('image')- here 'image' is file name
        $file_name = uniqid('image_',true).str_random(10).'.'.$image->getClientOriginalExtension();
        if ($image->isValid()) 
        {
            $image->storeAs('missing_others', $file_name);
        }

        //--------------------------- database insert -----------------------------
        
        $admin_id = Session::get('id');

        $missingOther = new MissingOther();
        
        //--- if Image/video is not selected
        $missingOther->create([     
                'admin_id'             => $admin_id,
                'missing_category_id'  => $request->input('missing_category_id'),
                'missing_title'        => trim($request->input('missing_title')),
                'owner_name'           => trim($request->input('owner_name')),
                'description'          => $request->input('description'),
                'address'              => trim($request->input('address')),
                'phone'                => trim($request->input('phone')),
                'status'               => trim($request->input('status')),
                'show'                 => $request->input('show'), //trim use for remove white space
                'image'                => $file_name,
    
            ]);

        session()->flash('type','success');
        session()->flash('message','Data Insert Successfully.');
        
        return redirect()->back();
    }

    
    public function show($id)
    {
        $missingOther =  MissingOther::find($id);
        return view('backend.pages.missing_other.show',compact('missingOther'));

    }

    
    public function edit($id)
    {
        $data['missing_other'] = MissingOther::find($id); //drop down

        $missing_categories = MissingCategory::orderBy('missingCategoryName', 'ASC') 
                                        ->get();
                                  
        return view('backend.pages.missing_other.edit',$data,compact('missing_categories')); //Data pass by Two Way together
    }

    
    public function update(Request $request, $id)
    {
        //--------------------------- validation -----------------------------
        $validator= Validator::make($request->all(),[
            'missing_category_id' => 'required',
            'missing_title'       => 'required|max:25',
            'owner_name'          => 'nullable|max:25',
            'description'         => 'nullable|max:1000',
            'address'             => 'required|max:1000',
            'phone'               => 'required',
            'status'              => 'required',
            'show'                => 'required',
            // 'image'               => 'nullable|max:102400',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        //--------------------------- database insert -----------------------------
        
        $admin_id = Session::get('id');

        $missingOther = MissingOther::find($id);
        
        //--- if file is not selected
        $missingOther->update([     
                'admin_id'             => $admin_id,
                'missing_category_id'  => $request->input('missing_category_id'),
                'missing_title'        => trim($request->input('missing_title')),
                'owner_name'           => trim($request->input('owner_name')),
                'description'          => $request->input('description'),
                'address'              => trim($request->input('address')),
                'phone'                => trim($request->input('phone')),
                'status'               => trim($request->input('status')),
                'show'                 => $request->input('show'), //trim use for remove white space
            ]);


        //if select file
        $file = $request->file('image');  
        if ($file) 
        {
            if (File::exists('uploads/missing_others/'.$missingOther->image)) //Previous File Deletd from directory after new Update 
            {
                File::delete('uploads/missing_others/'.$missingOther->image);
            }

            $image = $request->file('image'); //file('image')- here 'image' is file name
            $file_name = uniqid('image_',true).str_random(10).'.'.$image->getClientOriginalExtension();
            if ($image->isValid()) 
            {
                $image->storeAs('missing_others', $file_name);
            }

            $missingOther->update([
                'image' => $file_name,
            ]);
        }

        session()->flash('type','success');
        session()->flash('message','Data Updated Successfully.');
        
        return redirect()->back();
    }

    
    public function delete($id)
    {
        $missingOther = MissingOther::find($id);

        if (!is_null($missingOther)) 
        {
            if (File::exists('uploads/missing_others/'.$missingOther->image)) //For Directory path
            {
                File::delete('uploads/missing_others/'.$missingOther->image);
            }
            $missingOther->delete();
        }

        session()->flash('type','success');
        session()->flash('message','Data Deleted Successfully.');

        return redirect()->back();
    }
}
