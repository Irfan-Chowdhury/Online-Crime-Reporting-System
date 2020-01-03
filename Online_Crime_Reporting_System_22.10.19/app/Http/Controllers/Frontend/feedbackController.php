<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Complain;
use App\Models\Feedback;
use Illuminate\Support\Facades\Validator;
use Auth;

class feedbackController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        $complains = Complain::orderBy('id','DESC')->get();
        return view('frontend.user.pages.feedback.create',compact('complains'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator= Validator::make($request->all(),[
            'complain_id'    => 'required',
            'feedback'       => 'required|max:500',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $feedback = New Feedback();
        $feedback->user_id      = Auth::user()->id;
        $feedback->complain_id  = $request->complain_id; //crimeCategory
        $feedback->feedback     = $request->feedback;
        
        $feedback->save();

        session()->flash('type','success');
        session()->flash('message','Feedback Inserted Successfully.');
        
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
