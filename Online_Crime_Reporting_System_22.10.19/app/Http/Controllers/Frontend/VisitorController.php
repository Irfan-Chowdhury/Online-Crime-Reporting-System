<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Complain;
use App\Models\CrimeCategory;
use App\Models\CriminalRecord;
use App\Models\MissingOther;
use App\Models\MissingPerson;
use App\Models\NewsTips;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    public function index()
    {
        return view('frontend.visitor.pages.index');
        // return view('frontend.visitor.layouts.master');
    }

    public function about()
    {
        return view('frontend.visitor.pages.about');
        // return view('frontend.visitor.layouts.master');
    }

    public function recentIncident()
    {
        $complains = Complain::orderBy('id','DESC')->get();

        $cities = City::orderBy('cityName','ASC')->get();

        return view('frontend.visitor.pages.recentIncident',compact('complains','cities'));
        // return view('frontend.visitor.layouts.master');
    }

    public function recentIncident_city($id)
    {
        $complains = Complain::orderBy('id','DESC')->where('city_id', $id)->get();

        $cities = City::orderBy('cityName','ASC')->get();
        
        // $cityName = City::select('cityName')->where('id', $id)->get();

        // $cityName = DB::table('cities')
        //             ->select('cityName')
        //             ->where('id', $id)
        //             ->get();

        // return view('frontend.visitor.pages.recentIncident_city',compact('complains','cities','cityName'));
        return view('frontend.visitor.pages.recentIncident_city',compact('complains','cities'));
        
    }




    public function recentIncident_show($id)
    {
        $complain = Complain::find($id);

        return view('frontend.visitor.pages.recentIncident_show',compact('complain'));
        // return view('frontend.visitor.layouts.master');
    }

    public function FAQ()
    {
        return view('frontend.visitor.pages.FAQ');
    }

    public function news()
    {
        // $news = NewsTips::all()->where('type', 'news');
        $news = NewsTips::orderBy('id','DESC')->where('type', 'news')->get();
        return view('frontend.visitor.pages.news',compact('news'));
    }

    public function news_show($id)
    {
        $news = NewsTips::find($id);

        return view('frontend.visitor.pages.news_show',compact('news'));
    }


    public function missingPerson()
    {
        $missing_persons = MissingPerson::all();
        
        return view('frontend.visitor.pages.missingPerson',compact('missing_persons'));
    }

    public function missingPerson_show($id)
    {
        $missing_person = MissingPerson::find($id);

        return view('frontend.visitor.pages.missingPerson_show',compact('missing_person'));
    }

    public function foundPerson()
    {
        $missing_persons = MissingPerson::all();
        
        return view('frontend.visitor.pages.foundPerson',compact('missing_persons'));
    }

    public function foundPerson_show($id)
    {
        $missing_person = MissingPerson::find($id);

        return view('frontend.visitor.pages.foundPerson_show',compact('missing_person'));
    }

    public function missingOthers()
    {
        $missing_others = MissingOther::all();
        
        return view('frontend.visitor.pages.missingOthers',compact('missing_others'));
    }

    public function missingOther_show($id)
    {
        $missing_other = MissingOther::find($id);

        return view('frontend.visitor.pages.missingOther_show',compact('missing_other'));
    }
    
    public function foundOthers()
    {
        $missing_others = MissingOther::all();
        
        return view('frontend.visitor.pages.foundOthers',compact('missing_others'));
    }

    public function foundOthers_show($id)
    {
        $missing_other = MissingOther::find($id);
        
        return view('frontend.visitor.pages.foundOthers_show',compact('missing_other'));
    }

    // public function crimes()
    // {
    //     $crimeCategories = CrimeCategory::all();

    //     $criminal_records = CriminalRecord::all();

    //     return view('frontend.visitor.pages.crimes',compact('crimeCategories','criminal_records'));
    // }

    public function MostWanted()
    {
        $criminal_records = CriminalRecord::all()->where('crimeCategory_id', 1);;

        return view('frontend.visitor.pages.MostWanted',compact('criminal_records'));
    }

    public function MostWanted_show($id)
    {
        $mostWanted = CriminalRecord::find($id);;

        return view('frontend.visitor.pages.MostWanted_show',compact('mostWanted'));
    }

    
}
