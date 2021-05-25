<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorymodel;

class categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryview=categorymodel::all();

        return view('viewcategory',compact('categoryview'));
    }

    public function adminview()
    {
        $categoryview=categorymodel::all();

        return view('viewcategory',compact('categoryview'));
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("adminhome");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getcategory= request("category");

        $getpayment= request("payment");

        $category=new categorymodel();

        $category->Category=$getcategory;



        $category->Payment=$getpayment;

        $category->save();

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
        $categoryview=categorymodel::find($id);
        $category=categorymodel::all();

        return view('editcategory',compact('categoryview','category'));
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
        
        $category=categorymodel::find($id); 
        $getcategory=request("category");
        $getpayment=request("payment");
        $category->Category=$getcategory;
        $category->Payment=$getpayment;
        $category->save();
       
        return redirect('/viewcategory#viewcat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data=categorymodel::find($id);
        $data->delete();
        return redirect('/viewcategory');
    }

    public function getAllCategory()
    {
        $data = ['category'=>CategoryModel::all()];
        return view ('addworker1',$data);

    }
}
