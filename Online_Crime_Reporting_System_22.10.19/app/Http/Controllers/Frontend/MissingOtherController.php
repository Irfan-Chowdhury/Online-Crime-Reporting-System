<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MissingCategory;
use App\Models\MissingOther;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use File;
class MissingOtherController extends Controller
{
    
    public function index()
    {
        $data['missing_others'] = MissingOther::orderBy('id', 'ASC') //drop down
                                  ->get();

        return view('frontend.user.pages.missing_other.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['missing_categories'] = MissingCategory::orderBy('missingCategoryName', 'ASC') //drop down
                                    ->get();

        return view('frontend.user.pages.missing_other.create',$data);
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
            $image->storeAs('missing_others/user', $file_name);
        }

        //--------------------------- database insert -----------------------------
        
        
        $missingOther = new MissingOther();
        
        $missingOther->create([     
                'user_id'              => Auth::user()->id,
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    
    public function delete($id)
    {
        $missingOther = MissingOther::find($id);

        if (!is_null($missingOther)) 
        {
            if (File::exists('uploads/missing_others/user/'.$missingOther->image)) //For Directory path
            {
                File::delete('uploads/missing_others/user/'.$missingOther->image);
            }
            $missingOther->delete();
        }

        session()->flash('type','success');
        session()->flash('message','Data Deleted Successfully.');

        return redirect()->back();
    }
}
