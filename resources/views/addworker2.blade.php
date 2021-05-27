@extends('theme4')

@section('content')





<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-lg-3 col-xl-3 col-xxl-3"></div>
<div class="col col-12 col-sm-6 col-lg-6 col-xl-6 col-xxl-6">


<section id="worker" style="width:1530px;background-image: url(assets/img/intro-carousel/whitewall2.jpg);margin-left:-500px">
    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-12 col-lg-12 col-md-12 col-xl-12 col-xxl-12">
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form action="addworker2" enctype="multipart/form-data" method="post" style="margin-left:300px">
   

        {{csrf_field()}}
    <table class="table table-borderless " style="width:500px;">
    

    <tr>
    <td>
    <select name="idproof" id="idproof" class="form-control" name="idproof">
    <option>Aadhar Number </option>
    <option>Driving License Number</option>
    <option>PAN Card Number</option>
    </select>
    </td>
    </tr>

    <tr>
    <td>
    <input type="number" class="form-control" placeholder="ID Proof Number" name="idproofno"
pattern=".{16}" title="16 digits required" required>
    </td>
    </tr>

    <tr>
    <td>

    <select name="location" id="location" class="form-control" >
    @foreach($data as $location)
    <option>{{$location->Location }}</option>
    @endforeach
    </select>
    </td>
    </tr>

    <tr>
         <td>
        Choose Item Image :
                         <input class="form-control" type="file" name="photo">
         </td>
    </tr>

    <tr>
     <td>
        <textarea name="desc" id="desc" cols="190" rows="10" class="form-control" placeholder="Enter description here"></textarea>
     </td>
    </tr>
    
    <input type="hidden" class="form-control" name="id" value="{{$workerno}}">

    <tr>
    <td>
    <a href=""><button style="margin-left:200px" class="btn btn-primary">submit</button></a>
    </td>
    </tr>
    </table>
    </form>
    
    
    </div>
    
    </div>
    
        </div>
        </section>



</div>
<div class="col col-12 col-sm-6 col-lg-6 col-xl-6 col-xxl-6"></div>
</div>
</div>

@endsection