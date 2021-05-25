@extends('theme2')

@section('content')


 
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-lg-3 col-xl-3 col-xxl-3">
</div>
<div class="col col-12 col-sm-6 col-lg-6 col-xl-6 col-xxl-6">

<form action="/login1" method="post">

{{csrf_field()}}
<table class="table">
 
 <tr>
     <td><input name="email" type="text" class="form-control"placeholder="Email"></td>
 </tr>
 
 <tr>
     <td><input name="password" type="password" class="form-control"placeholder="Password"></td>
 </tr>
 
 <tr>
     <td><button class="btn btn-primary">Logout</button></td>
     <td><button class="btn btn-primary">Login</button></td>
 </tr>
</table>
</form>
</div>
<div class="col col-12 col-sm-3 col-lg-3 col-xl-3 col-xxl-3">
</div>
</div>


@endsection