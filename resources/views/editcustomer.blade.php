@extends('theme4')

@section('content')


<section id="addcustomer">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Edit CUSTOMER</h3>
          
        </header>

        <form action="/addcustomer" method="post">

{{csrf_field()}}
<table class="table table-borderless" style="width:400px; margin-left:300px;">
 
<tr>
<td><input name="fname" type="text" class="form-control"></td>
</tr>
<tr>
<td><input name="lname" type="text" class="form-control" ></td>
</tr>
<tr>
<td><input name="hno" type="text" class="form-control"></td>
</tr>
<tr>
<td><input name="street" type="text" class="form-control" ></td>
</tr>
<tr>
<td><input name="city" type="text" class="form-control" ></td>
</tr>
<tr>
<td><input name="pin" type="number" class="form-control" ></td>
</tr>
<tr>
<td><input name="email" type="email" class="form-control" ></td>
</tr>
<tr>
<td><input name="mob" type="tel" class="form-control" ></td>
</tr>
<tr>
<td><input name="pass" type="password" class="form-control" ></td>
</tr>
<tr>
<td><input name="cpass" type="password" class="form-control" ></td>
</tr>
 
 <tr>
     
     <td><center><button class="btn btn-primary">Update</button><center></td>
    
 </tr>
</table>
</form>

      </div>
    </section>



    @endsection