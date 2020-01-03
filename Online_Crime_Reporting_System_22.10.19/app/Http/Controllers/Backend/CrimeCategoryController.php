<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CrimeCategory;
use Illuminate\Support\Facades\Validator;

class CrimeCategoryController extends Controller
{
    public function index()
    {
        $data['crime_categories']= CrimeCategory::all();
        return view('backend.pages.crime_category.index',$data);
    }

    public function create()
    {
        return view('backend.pages.crime_category.create');
    }


    public function store(Request $request)
    {
        //--------------------------- validation -----------------------------
        $validator= Validator::make($request->all(), [
            'crimeCategoryName'  => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $crimeCategory = new CrimeCategory();
        $crimeCategory->crimeCategoryName = $request->crimeCategoryName;

        $crimeCategory->save();

        session()->flash('type','success');
        session()->flash('message','Crime Category Added.');
        
        return redirect()->back();
    }

   
    public function edit($id)
    {
        $data['crime_categories'] = CrimeCategory::find($id);
        return view('backend.pages.crime_category.edit',$data);
    }

    
    public function update(Request $request, $id)
    {
        //--------------------------- validation -----------------------------
        $request->validate([
            'crimeCategoryName' => 'required|max:20',
        ]);

        $crimeCategory = CrimeCategory::find($id);
        $crimeCategory->crimeCategoryName = $request->crimeCategoryName;

        $crimeCategory->update();

        session()->flash('type','success');
        session()->flash('message','Crime Category Updated.');
        
        return redirect()->back();
    }

    
    public function delete($id)
    {
        $crimeCategory = CrimeCategory::find($id);
        $crimeCategory->delete();

        session()->flash('type','danger');
        session()->flash('message','Category Deleted');
        
        return redirect()->route('admin.crimeCategory.index');
    }
}
