<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\City;
use App\Models\Complain;
use App\Models\CrimeCategory;
use App\Models\ImageComplain;
use App\Notifications\NotifyAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Image;
use File;
use DB;

class ComplainController extends Controller
{
    
    public function index()
    {
        $complains = Complain::all();

        return view('frontend.user.pages.complain.index',compact('complains'));
    }

   
    public function create()
    {
        $crimeCategories = CrimeCategory::orderBy('crimeCategoryName','ASC')->get();
                                        
        $cities = City::orderBy('cityName','ASC')->get();
                        

        return view('frontend.user.pages.complain.create',compact('crimeCategories','cities'));
    }

    
    public function store(Request $request)
    {
        //--------------------------- validation -----------------------------
        $validator= Validator::make($request->all(),[
            'crimeCategory_id'    => 'required',
            'title'               => 'required|max:80',
            'description'         => 'required',
            'address'             => 'required|max:1000',
            'show'                => 'required',
            'image'               => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $complain = New Complain();
        
        $complain->user_id          = Auth::user()->id;
        $complain->crimeCategory_id = $request->crimeCategory_id; //crimeCategory
        $complain->title            = $request->title;
        $complain->description      = $request->description;
        $complain->city_id          = $request->city_id;
        $complain->late_long        = $request->late_long;
        $complain->address          = $request->address;
        $complain->show             = $request->show;

        $complain->save();

        //Check if the product has Multiple thumbnail image
        if ($request->hasFile('image')) 
        {
            foreach ($request->image as $image) 
            {
            
                //$image = $image->getClientOriginalName();
                $img   = str_random(10). '.' .$image->getClientOriginalExtension();
    
                //Move the Product Image into the required folder
                $location = public_path('uploads/complains/'.$img);  //a folder must be created before this  
                Image::make($image)->save($location);
    
                //Image Resize Function
                //$image= Image::make($image)->resize(700,430);
    
                //create the productImage Model
                $imageComplain = new ImageComplain();
    
                //Insert the data inside the image Table [product id, image name]
                $imageComplain->complain_id= $complain->id;
                $imageComplain->image     = $img;
                $imageComplain->save();
            }
        }

        

        session()->flash('type','success');
        session()->flash('message','Data Inserted Successfully.');
        
        return redirect()->back();

    }

    
    public function show($id)
    {
        $complain = Complain::find($id);

        return view('frontend.user.pages.complain.show',compact('complain'));
    }

    
    public function edit($id)
    {
        $crimeCategories = CrimeCategory::orderBy('crimeCategoryName','ASC')->get();
                                        
        $cities = City::orderBy('cityName','ASC')->get();
        
        $complain = Complain::find($id);

        return view('frontend.user.pages.complain.edit',compact('crimeCategories','cities','complain'));
    }

   
    public function update(Request $request, $id)
    {
        $validator= Validator::make($request->all(),[
            'crimeCategory_id'    => 'required',
            'title'               => 'required|max:80',
            'description'         => 'required|max:10000',
            'address'             => 'required|max:1000',
            'show'                => 'required',
            // 'image'               => 'nullable',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $complain = Complain::find($id);
        
        //$complain->user_id          = Auth::user()->id;
        $complain->crimeCategory_id = $request->crimeCategory_id; //crimeCategory
        $complain->title            = $request->title;
        $complain->description      = $request->description;
        $complain->city_id          = $request->city_id;
        $complain->late_long        = $request->late_long;
        $complain->address          = $request->address;
        $complain->show             = $request->show;

        $complain->update();


        //Check if the product has Multiple thumbnail image
        if ($request->hasFile('image')) 
        {
            foreach ($request->image as $image) 
            {
                $imageComplain = new ImageComplain();
            
                //$image = $image->getClientOriginalName();
                $img   = str_random(10). '.' .$image->getClientOriginalExtension();
    
                //Move the Product Image into the required folder
                $location = public_path('uploads/complains/'.$img);  //a folder must be created before this  
                Image::make($image)->save($location);
    
                //Image Resize Function
                //$image= Image::make($image)->resize(700,430);
    
                //create the productImage Model
                //$imageComplain = new ImageComplain();
    
                //Insert the data inside the image Table [product id, image name]
                $imageComplain->complain_id= $complain->id;
                $imageComplain->image     = $img;
                $imageComplain->save();
            }
        }


        session()->flash('type','success');
        session()->flash('message','Data Updated Successfully.');
        
        return redirect()->back();
    }

    
    public function delete($id)
    {
        $complain     =  Complain::find($id);
        // $ImageComplain = ImageComplain::where('complain_id', '=', $id);

        $ImageComplain = DB::table('image_complains')
                        ->where('complain_id', '=', $id)
                        ->get();

        // if ($ImageComplain)
        // {
        //     if (File::exists('uploads/complains/'.$ImageComplain->image)) //For Directory path
        //     {
        //         File::delete('uploads/complains/'.$ImageComplain->image);
        //     }
            
        // }
        $complain->delete();

        session()->flash('type','success');
        session()->flash('message','Data Deleted Successfully.');

        return redirect()->back();
    }
}
