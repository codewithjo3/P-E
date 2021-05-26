<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registermodel;
use App\Models\loginmodel;
use App\Models\workermodel;
use App\Models\locationmodel;
use App\Models\categorymodel;
use App\Models\bookmodel;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;
use Validator;

class registercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerview=registermodel::all();
        $bookview=registermodel::all();

        return view('viewcustomer',compact('customerview'));
        return view('viewbookings',compact('bookview'));
    }

    public function report()
    {

          
          $getdate1=request('date1');
          $getdate2=request('date2');
            
          $booking=bookmodel::select('*')
          ->whereBetween('date', [$getdate1, $getdate2])->get();
          
          return view('report',compact('booking'));
    }

    public function viewreport()
    {
         
            
          $booking=bookmodel::all();
          
          return view('report',compact('booking'));
    }

    public function addadmin()
    {

            $getemail=request('email');
            $getpass=request('pass');
            $login=new loginmodel();

            $login->Username="admin";
            $login->email=$getemail;
            $login->Password=$getpass;
            $login->Usertype="Admin";

            $login->save();

    }
    public function index1()
    {
        
        $bookview=bookmodel::all();

        return view('viewbookings',compact('bookview'));
    }

    public function changepass()
    {
        $getoldpass=request('oldpass');
        $getnewpass=request('newpass');
        $confirmpass=request('cnewpass');
        $data = registermodel::where('Fname','=', session('sname'))->first();
        $getemail=$data->Email;
       
        $login=loginmodel::where('email','=',$getemail)->first();
        $getpass=$login->Password;
        
        if($getoldpass==$login->Password)
        {
            if($getnewpass==$confirmpass)
            {
                $change=loginmodel::where('email','=',$getemail)->update(['Password'=>$getnewpass]); 
                return redirect('/Cust');
      
            }
            else{

                echo "<script>alert('New Password and Confirm Password must be same');window.location='/Cust';</script>"; 

            }

        }
        else
        {
            echo "<script>alert('Inputed Old Password is not recognized');window.location='/Cust';</script>"; 

    
        }
    }

    public function adminview()
    {
        $customerview=registermodel::all();

        return view('viewcustomer',compact('customerview'));
        

    }
    public function mybook()
    {
       
        $data = ['LoggedUserInfo'=>registermodel::where('Fname','=', session('sname'))->first()];
        $user = registermodel::where('Fname','=', session('sname'))->first();
        $book=bookmodel::where ('customerid','=',$user->id)->get();
        return view('mybookings',compact('book'))->with($data);
    }

    public function bookstore()
    {
        $getloc=request('location');
        $getcat=request('category');
        $getdate=request('date');
        $gettime=request('time');
        $getcusid=request('cusid');

        $userInfo = categorymodel::where('Category','=', $getcat)->first();
        $userinfo = locationmodel::where('Location','=', $getloc)->first();
         
        $book=new bookmodel();
        
        $book->customerid=$getcusid;
        $book->Categoryid=$userInfo->id;
        $book->Locationid=$userinfo->id;    
        $book->workerid=16;
        $book->date=$getdate;
        $book->time=$gettime;

        $book->save();

        $data1 = ['LoggedUserInfo'=>registermodel::where('Fname','=', session('sname'))->first()];
        $lastinsertedid=$book->id;

        $category = categorymodel::where('Category','=', $getcat)->first();
        $payment = $category->Payment;
        
        $worker=workermodel::where('Categoryid','=',$userInfo->id)->where('Locationid','=',$userinfo->id)->where('Status','=','Active')->get();

        return view('custbook2',compact('worker','payment','lastinsertedid','getdate','gettime'))->with($data1);


       
    }


    public function bookview()
    {
        
        $data=locationmodel::all();
        $data1 = ['LoggedUserInfo'=>registermodel::where('Fname','=', session('sname'))->first()];
        $category=categorymodel::all();
        $user = registermodel::where('Fname','=', session('sname'))->first();
        return view('custbook1',compact('data','category','user'))->with($data1);
    }
   
    public function bookstore2()
    {
        $getid=request('id');
        $getdate=request('date');
        $gettime=request('time');
        $getworker=request('worker');
        $workerinfo = workermodel::where('Fname','=', $getworker)->first();
        $book=bookmodel::where('id','=',$getid)->update(['Workerid'=>$workerinfo->id]); 

        $workercount=bookmodel::where('workerid','=',$workerinfo->id)->where('date','=',$getdate)->where('time','=',$gettime)->count();
        $data1 = ['LoggedUserInfo'=>registermodel::where('Fname','=', session('sname'))->first()];
        if($workercount>1)
        {   
            bookmodel::where('id','=',$getid)->delete();
            echo "<script>alert('slot already booked');window.location='/booknow';</script>";
        }

        return view('/payment',compact('getid'))->with($data1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');
    }

    public function bcreate()
    {
        return view('custbook1');
    }

    public function bcreate2()
    {
        return view('custbook2');
    }

    public function createlog()
    {
        return redirect('/home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getfname=request("fname");
        $getlname=request("lname");
        $gethno=request("hno");
        $getstreet=request("street");
        $getcity=request("city");
        $getpin=request("pin");
        $getemail=request("email");
        $getmob=request("mob");
        $getpass=request("pass");
        $getcpass=request("cpass");

        $h=loginmodel::all();
            dd($h);
        // $this->validate($request,[

        //    'fname'=>'required',
        //    'lname'=>'required',
        //    'hno'=>'required',
        //    'street'=>'required',
        //    'city'=>'required',
        //    'pin'=>'required',
        //    'email'=>'reqiured|email',
        //     'mob'=>'required',
        //    'pass'=>'required|min:5|max:10',
        //    'cpass'=>'required|min:5|max:10'


        // ]);

        if($getpass == $getcpass)
        {
            
            $signup = new registermodel();
          
    

            $signup->Fname=$getfname;
            $signup->Lname=$getlname;
            $signup->Hno=$gethno;
            $signup->Street=$getstreet;
            $signup->City=$getcity;
            $signup->Pincode=$getpin;
            $signup->Email=$getemail;
            $signup->Mob=$getmob;
            
            $signup->save();
    
            $login=new loginmodel();
            $login->Username=$getfname;
            $login->email=$getemail;
            $login->Password=$getpass;
            $login->Usertype="Customer";
    
            $login->save();
           
            $h=loginmodel::all();
            dd($h);
            
            if($signup && $login)
             {
               
                echo "<script>alert('Success.. Customer Added.....');window.location='/';</script>"; 
             }
             else{
                echo "<script>alert('Something went Wrong.......');window.location='/';</script>"; 
             }


            
        }

        else{

            echo "<script>alert('Password is not correct......');window.location='/signup';</script>"; 
        }

       
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


    public function check(Request $request)
    {
        $getmail=request('email');
        $getpass=request('password');
        //$name=$request->input();
        // $request->session()->put('sname',$getmail);
        // echo session('sname');
        $u=loginmodel::where('email','like',$getmail)->first();
        
        if(!$u)
        {
           
        //    return redirect('/');
        }
        else
        {
        //echo $u->mailid;
        $p=loginmodel::where('email','like',"$u->email")->first();
        //echo $p->password;
        
        
            if($p->Password == $getpass)
            {
                $ut=loginmodel::where('email','like',"$u->email")->first();
                //echo $ut->usertype;
                if($ut->Usertype == 'Customer')
                {
                    $i=registermodel::select('Fname')->where('Email','like',"$getmail")->first();
                    $request->session()->put('sname',$i->Fname);
                    echo $i;
                    // echo "customer";
                    return redirect ('/home');
                }

                if($ut->Usertype == 'Worker')
                {
                    $i=workermodel::select('Fname')->where('Email','like',"$getmail")->first();
                    $request->session()->put('sname',$i->Fname);
                    echo $i;
                    // echo "customer";
                    return redirect ('/workerhome');
                }

                if($ut->Usertype == 'Admin')
                {
                    $request->session()->put('sname','Admin');
                    // echo "customer";
                    return redirect ('/adminhome');
                }
                
                else
                {
                    // return redirect('/facultyadd');
                    echo "admin";
                }
            }
            else
            {
                echo "invlaid user";
                // return redirect('/');
            }
        }
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

    public function dashboard()
    {
        $data = ['LoggedUserInfo'=>registermodel::where('Fname','=', session('sname'))->first()];
        $worker=workermodel::all();

        return view('Cust',compact('worker'))->with($data);
        
    }
}
