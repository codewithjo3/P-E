<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\locationcontroller;
use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\workercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/addcategory', function () {
    return view('addcategory');
});

Route::get('/addworker', function () {
    return view('addworker1');
});

Route::get('/custhome', function () {
    return view('Cust');
});

Route::get('/adminhome', function () {
    return view('adminhome');
});

Route::get('/workerhome', function () {
    return view('workerhome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/custbook1', function () {
    return view('custbook1');
});

Route::post('/addadmin',[registercontroller :: class,'addadmin']);

Route::get('/sessiondelete',function(){
    if(session()->has('sname'))
    {
        session()->pull('sname');
    }
    return view('index');
});

Route::get('/login',[registercontroller :: class,'createlog']);
Route::post('/login1',[registercontroller :: class,'check']);

Route::group(['middleware'=>['LoginCheck']], function(){

Route::get('/addworker',[CategoryController :: class,'getAllCategory']);

Route::get('/workeradd',[locationcontroller :: class,'getAllLocation']);

Route::get('/home',[registercontroller::class,'dashboard']);


Route::post('/sms',[workercontroller::class,'sms']);


Route::get('/booknow',[registercontroller :: class,'bookview']);
Route::get('/mybookings',[registercontroller::class,'mybook']);
Route::post('/changepass',[registercontroller :: class,'changepass']);


Route::get('/addlocation',[locationcontroller::class,'create']);
Route::post('/addlocation',[locationcontroller::class,'store']);
Route::get('/viewlocation',[locationcontroller::class,'index']);
Route::get('/editlocation/{id}', [locationcontroller::class,'edit']);
Route::post('/locationeditprocess/{id}', [locationcontroller::class,'update']);
Route::get('/deletelocation/{id}', [locationcontroller::class,'delete']);

Route::get('/addcategory',[categorycontroller::class,'create']);
Route::post('/addcategory',[categorycontroller::class,'store']);
Route::get('/viewcategory',[categorycontroller::class,'index']);
Route::get('/editcategory/{id}', [categorycontroller::class,'edit']);
Route::post('/categoryeditprocess/{id}', [categorycontroller::class,'update']);
Route::get('/deletecategory/{id}', [categorycontroller::class,'delete']);


Route::get('/addworker1',[workercontroller::class,'create']);
Route::post('/addworker1',[workercontroller::class,'store']);
Route::get('/editworker/{id}', [workercontroller::class,'edit']);
Route::post('/workereditprocess/{id}', [workercontroller::class,'update']);
Route::get('/deleteworker/{id}', [workercontroller::class,'delete']);
Route::get('/workerhome',[workercontroller::class,'mycust']);

Route::get('/addworker2',[workercontroller::class,'wcreate']);
Route::post('/addworker2',[workercontroller::class,'wstore']);
Route::get('/viewworker',[workercontroller::class,'index']);
Route::get('/editworker/{id}', [workercontroller::class,'edit']);
Route::post('/workereditprocess/{id}', [workercontroller::class,'update']);
Route::post('/status',[workercontroller::class,'status']);


Route::post('/signup',[registercontroller::class,'store']);
Route::get('/viewcustomer',[registercontroller::class,'index']);
Route::get('/viewbookings',[registercontroller::class,'index1']);
Route::post('/report',[registercontroller::class,'report']);
Route::get('/viewreport',[registercontroller::class,'viewreport']);

Route::get('/book1',[registercontroller::class,'bcreate']);
Route::post('/book1',[registercontroller::class,'bookstore']);
Route::get('/book2',[registercontroller::class,'bcreate2']);
Route::post('/book2',[registercontroller::class,'bookstore2']);



});

