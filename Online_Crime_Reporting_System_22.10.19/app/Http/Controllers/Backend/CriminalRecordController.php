<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CrimeCategory;
use App\Models\CriminalRecord;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CriminalRecordController extends Controller
{
    
    public function index()
    {
        $data['criminal_records']= CriminalRecord::all();

        return view('backend.pages.criminal_records.index',$data);
    }

    
    public function create()
    {
        $data['crime_categories']= CrimeCategory::orderBy('crimeCategoryName', 'ASC') //drop down
                                                ->get();

        return view('backend.pages.criminal_records.create',$data);
    }

    
    public function store(Request $request)
    {
        //--------------------------- validation -----------------------------
        $validator= Validator::make($request->all(),[
            'crimeCategory_id'  => 'required',
            'name'          => 'required|max:25',
            'description'   => 'required',
            'address'       => 'required',
            'status'        => 'required',
            'show'          => 'required',
            'image'         => 'required|image',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('image'); //file('image')- here 'image' is file name
        $file_name = uniqid('image_',true).str_random(10).'.'.$image->getClientOriginalExtension();
        if ($image->isValid()) 
        {
            $image->storeAs('criminals_images', $file_name);
        }

        //--------------------------- database insert -----------------------------
        
        $admin_id = Session::get('id');

        $criminalRecord = new CriminalRecord();
        
        //--- if Image/video is not selected
        $criminalRecord->create([     
                'admin_id'         => $admin_id,
                'crimeCategory_id' =>$request->input('crimeCategory_id'),
                'name'             => trim($request->input('name')),
                'description'      => trim($request->input('description')),
                'address'          => trim($request->input('address')),
                'status'           => trim($request->input('status')),
                'show'             => $request->input('show'), //trim use for remove white space
                'image'            => $file_name,
    
            ]);

        session()->flash('type','success');
        session()->flash('message','Data Insert Successfully.');
        
        return redirect()->back();
    }

    
    public function show($id)
    {
        $data['criminal_records']= CriminalRecord::find($id);

        return view('backend.pages.criminal_records.show',$data);
    }

    
    public function edit($id)
    {
        $data1['crime_categories']= CrimeCategory::orderBy('crimeCategoryName', 'ASC') //drop down
                                                ->get();
        
        $data2['criminal_records']= CriminalRecord::find($id);

        return view('backend.pages.criminal_records.edit', $data1 , $data2);
    }

    
    public function update(Request $request, $id)
    {
        //--------------------------- validation -----------------------------
        $validator= Validator::make($request->all(),[
            'crimeCategory_id'  => 'required',
            'name'          => 'required|max:25',
            'description'   => 'required',
            'address'       => 'required',
            'status'        => 'required',
            'show'          => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //--------------------------- database insert -----------------------------
        
        $admin_id = Session::get('id');

        $criminalRecord = CriminalRecord::find($id);
        
        //--- Without Selected Image
        $criminalRecord->update([     
                'admin_id'         => $admin_id,
                'crimeCategory_id' =>$request->input('crimeCategory_id'),
                'name'             => trim($request->input('name')),
                'description'      => trim($request->input('description')),
                'address'          => trim($request->input('address')),
                'status'           => trim($request->input('status')),
                'show'             => $request->input('show'), //trim use for remove white space    
            ]);


        //--- With Selected Image
        $file = $request->file('image');  
        if ($file) 
        {
            $image = $request->file('image'); //file('image')- here 'image' is file name
            $file_name = uniqid('image_',true).str_random(10).'.'.$image->getClientOriginalExtension();
            if ($image->isValid()) 
            {
                $image->storeAs('criminals_images', $file_name);
            }

            $criminalRecord->update([
                'image' => $file_name,
            ]);
        }

        session()->flash('type','success');
        session()->flash('message','Data Updated Successfully.');
        
        return redirect()->back();
    }


    public function delete($id)
    {
        $criminalRecord = CriminalRecord::find($id);
        $criminalRecord->delete();

        session()->flash('type','danger');
        session()->flash('message','Data deleted Succesfully');
        
        return redirect()->route('admin.criminalRecords.index');
    }
}
