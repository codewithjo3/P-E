<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\workermodel;
use App\Models\categorymodel;
use App\Models\loginmodel;
use App\Models\locationmodel;
use App\Models\bookmodel;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;

class workercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workerview=workermodel::all();

        return view('viewworker',compact('workerview'));
    }


    public function adminview()
    {
        $workerview=workermodel::all();

        return view('viewworker',compact('workerview'));
        

    }

    public function sms()
    {
        // return $request;
        $getid=request("id");
        $booking1=bookmodel::select('workerid')->where('id','=',$getid)->get();
        $booking=bookmodel::where('id','=',$getid)->first();
        $worker=workermodel::where('id','=',$booking->workerid)->first();
        Nexmo::message()->send([
            'to' => $worker->Mob,
            'from' => '16105552344',
            'text' => 'Hello Worker, you have a booking'
        ]);

        Session::flash('success', 'Message sent');
        return redirect('/home');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("addworker1");
    }

    public function wcreate()
    {
        return view("addworker2");
    }

    public function mycust()
    {
        $data = workermodel::where('Fname','=', session('sname'))->first();
        $datacust=bookmodel::where('workerid','=',$data->id)->get();
        return view('/workerhome',compact('datacust','data'));
    }

    public function status()
    {
        $getstatus=request('status');
        $data = workermodel::where('Fname','=', session('sname'))->first();
        $datacust=bookmodel::where('workerid','=',$data->id)->get();

        
        if($getstatus = 'on')
        {  
                          
        $worker=workermodel::where('Email',$data->Email)->update(['Status'=>'Active']); 

       }

        else
        {
                
        $worker=workermodel::where('Email',$data->Email)->update(['Status'=>'Inactive']); 

        }

        return view('workerhome',compact('datacust'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([        
            'email'=>'required|Email|unique:workermodels',
            
    ]);
    
    $getfname=request("fname");
    $getlname=request("lname");
    $gethno=request("hno");
    $getstreet=request("street");
    $getcity=request("city");
    $getpin=request("pin");
    $getemail=request("email");
    $getmob=request("mob");
    $getpass=request("pass");
    $getgender=request("gender");
    $getwtype=request("wtype");
    $getcategory=request("category");

    $userInfo = categorymodel::where('Category','=', $getcategory)->first();
    
    $worker=new workermodel();
    $worker->Fname=$getfname;
    $worker->Lname=$getlname;
    $worker->Hno=$gethno;
    $worker->Gender=$getgender;
    $worker->Street=$getstreet;
    $worker->City=$getcity;
    $worker->Pincode=$getpin;
    $worker->Email=$getemail;
    $worker->Mob=$getmob;
    $worker->Idproof="NULL";
    $worker->Idproofno="NULL";
    $worker->Wtype=$getwtype;
    $worker->Categoryid=$userInfo->id;
    
    $worker->Description="null";
    $worker->Locationid="1";
    $worker->Filepath="null";
    $worker->save();

    $data=locationmodel::all();

    $login=new loginmodel();
        $login->email=$getemail;
        $login->Password=$getpass;

        $login->Username="Worker";
        $login->Usertype="Worker";
        $save= $login->save();
       
        return view('addworker2', ['data'=>$data,'workerno'=>$getemail]);
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
        $workerview=workermodel::find($id);
        $location=locationmodel::all();
        $category=categorymodel::all();
        return view('editworker',compact('workerview','location','category'));
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
        $worker=workermodel::find($id); 
        $getworker=request("worker");
        
    $getfname=request("fname");
    $getlname=request("lname");
    $gethno=request("hno");
    $getstreet=request("street");
    $getcity=request("city");
    $getpin=request("pin");
    $getemail=request("email");
    $getmob=request("mob");
    $getidproof=request("idproof");
    $getidproofno=request("idproofno");
    $getlocation=request("location");
    $getdesc=request("desc");
    $getgender=request("gender");
    $getwtype=request("wtype");
    $getcategory=request("category");

    $userInfo = categorymodel::where('Category','=', $getcategory)->first();
    $userinfo = locationmodel::where('Location','=', $getlocation)->first();

    $getphoto=$request->file("photo");
        $name=$getphoto->getClientOriginalName();
        $getphoto->move(public_path('assets/worker_img'),$name);
        
    $worker->Fname=$getfname;
    $worker->Lname=$getlname;
    $worker->Hno=$gethno;
    $worker->Gender=$getgender;
    $worker->Street=$getstreet;
    $worker->City=$getcity;
    $worker->Pincode=$getpin;
    $worker->Email=$getemail;
    $worker->Mob=$getmob;
    $worker->Idproof=$getidproof;
    $worker->Idproofno=$getidproofno;
    $worker->Wtype=$getwtype;

    $worker->Categoryid=$userInfo->id;
    $worker->Locationid=$userinfo->id;
    
    $worker->Description=$getdesc;
   
    $worker->Filepath=$name;
        
        $worker->save();
       
        return redirect('/viewworker#viewworker');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data=workermodel::find($id);
        $data->delete();
        return redirect('/viewworker');
    }

    public function wstore(Request $request)
    {
        $getemail=$request->id; 

        $getproof=request("idproof");
        $getproofno=request("idproofno");
        $getdesc=request("desc");
        $getlocation=request("location");
        
        $getphoto=$request->file("photo");
        $name=$getphoto->getClientOriginalName();
        $getphoto->move(public_path('assets/worker_img'),$name);
        
        $worker=new workermodel();

        $userinfo = locationmodel::where('Location','=', $getlocation)->first();
        $worker=workermodel::where('Email',$request->id)->update(['Description'=>$request->desc,'Idproof'=>$request->idproof,'Idproofno'=>$request->idproofno,'Filepath'=>$name,'Locationid'=>$userinfo->id]); 
       
        
        return view('adminhome');

    }
}
