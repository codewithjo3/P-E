<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\locationmodel;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;

class locationcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locationview=locationmodel::all();

        return view('viewlocation',compact('locationview'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addlocation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function sms()
    {
        // return $request;
        
        Nexmo::message()->send([
            'to' => '919946294495',
            'from' => '16105552344',
            'text' => 'poda patti'
        ]);

        Session::flash('success', 'Message sent');
        return redirect('/');
    }


    public function store(Request $request)
    {
        $getlocation= request("location");

        $location=new locationmodel();

        $location->Location=$getlocation;
        $location->save();

        return redirect('/adminhome');
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
        $locationview=locationmodel::find($id);
        $location=locationmodel::all();

        return view('editlocation',compact('locationview','location'));
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
        $location=locationmodel::find($id); 
        $getlocation=request("location");
        $location->Location=$getlocation;
        $location->save();
       
        return redirect('/viewlocation#location');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data=locationmodel::find($id);
        $data->delete();
        return redirect('/viewlocation#location');
    }

    public function getAllLocation()
    {

        $location=locationmodel::all();

        return view('addworker2',compact('location'));
    }
}
