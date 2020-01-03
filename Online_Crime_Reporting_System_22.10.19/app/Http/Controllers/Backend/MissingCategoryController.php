<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MissingCategory;
use Illuminate\Support\Facades\Validator;

class MissingCategoryController extends Controller
{
    
    public function index()
    {
        $missingCategories = MissingCategory::all();
        return view('backend.pages.other_missing_category.index',compact('missingCategories'));
    }

    
    public function create()
    {
        return view('backend.pages.other_missing_category.create');
    }

    
    public function store(Request $request)
    {
        //--------------------------- validation -----------------------------
        $validator= Validator::make($request->all(), [
            'missingCategoryName'  => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $missingCategory = new MissingCategory();
        $missingCategory->missingCategoryName = $request->missingCategoryName;

        $missingCategory->save();

        session()->flash('type','success');
        session()->flash('message','Other Missing Category Added.');
        
        return redirect()->back();
    }

   
    

    
    public function delete($id)
    {
        $missingCategory = MissingCategory::find($id);
        $missingCategory->delete();

        session()->flash('type','danger');
        session()->flash('message','Missing Category Deleted');
        
        return redirect()->back();
    }
}
