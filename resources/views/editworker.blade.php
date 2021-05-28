
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Plumber & Electricians</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-12 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.html">Plumber & Electricians</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="col-xl-12 nav-menu d-none d-lg-block">
            <ul>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         

              <li class="active"><a href="/">Home</a></li>
              

              
              
              <li class="drop-down"><a href="">View</a>
                <ul>
                  <li><a href="/viewworker#viewworker">View Worker</a></li>
                  <li><a href="/viewcategory#viewcat">View Categories</a></li>
                  <li><a href="/viewcustomer#customer">View Customers</a></li>
                  <li><a href="/viewlocation#location">View Locations</a></li>
                  <li><a href="#">View Bookings</a></li>
                </ul>
              </li>

              <li class="drop-down"><a href="">Add</a>
                <ul>
                  <li><a href="/addworker#worker">Add Worker</a></li>
                  <li><a href="/adminhome#addlocation">Add Location</a></li>
                  <li><a href="/adminhome#addcategory">Add Category</a></li>
                  
                </ul>
              </li>

              <li><a href="/sessiondelete">Logout</a></li>
              

         
          </nav><!-- .nav-menu -->
        </div>
      </div>
      </div>

  </header><!-- End Header -->
  <br>

<br>
<br>
<br>

<br>

<section id="editworker" style="background-image: url(../assets/img/intro-carousel/viewworker2.jpg)" >
      <div class="container" data-aos="fade-up" >
        
      <br>
<br>
<br>
<br>
<br>
        <header class="section-header">
          <h3>Edit WORKER</h3>
          
        </header>

        <form action="/workereditprocess/{{$workerview->id}}" method="post" enctype="multipart/form-data"  >

{{csrf_field()}}
<table class="table table-borderless" style="width:500px; margin-left:300px;" >
 
<tr>
        <td>
        <input value="{{$workerview->Fname}}" type="text" class="form-control" name="fname" >
        </td>
    </tr>
    <tr>
        <td>
        <input value="{{$workerview->Lname}}" type="text" class="form-control" name="lname" >
        </td>
    </tr>
    <tr>
    <td>
    <select value="{{$workerview->Gender}}" name="gender" id="gender" class="form-control" >
    <option>Male</option>
    <option>Female</option>
    <option>Transgender</option>
    
    </select>
    </td>
    </tr>
    

    <tr>
        <td>
        <input value="{{$workerview->Hno}}" type="text" class="form-control" name="hno">
        </td>
    </tr>
    <tr>
        <td>
        <input value="{{$workerview->Street}}" type="text" class="form-control" name="street">
        </td>
    </tr>
    <tr>
        <td>
        <input value="{{$workerview->City}}" type="text" class="form-control" name="city">
        </td>
    </tr>
    <tr>
        <td>
        <input value="{{$workerview->Pincode}}" type="number" class="form-control" name="pin" >
        </td>
    </tr>
    <tr>
        <td>
        <input value="{{$workerview->Email}}" type="email" name="email" class="form-control" name="email">
        </td>
    </tr>

    <tr>
    <td><span class="text-danger">@error('email'){{ $message }} @enderror</span></td>
    </tr>

    <tr>
        <td>
        <input value="{{$workerview->Mob}}" type="tel" class="form-control" name="mob">
        </td>
    </tr>
    


    <tr>
    <td>
    <select value="{{$workerview->Wtype}}" name="wtype" id="wtype" class="form-control" name="wtype">
    <option>Electrician </option>
    <option>Plumber</option>
    </select>
    </td>
    </tr>


    <tr>
    <td>

    <select value="{{$workerview->Categoryid}}" name="category" id="category" class="form-control" >
    @foreach($category as $category)
    <option>{{$category->Category }}</option>
    @endforeach
    </select>
    </td>
    </tr>


    <tr>
    <td>
    <select value="{{$workerview->Idproof}}" name="idproof" id="idproof" class="form-control" name="idproof">
    <option>Aadhar Number </option>
    <option>Driving License Number</option>
    <option>PAN Card Number</option>
    </select>
    </td>
    </tr>

    <tr>
    <td>
    <input value="{{$workerview->Idproofno}}" type="text" class="form-control" name="idproofno">
    </td>
    </tr>

    <tr>
    <td>

    <select value="{{$workerview->Locationid}}" name="location" id="location" class="form-control" >
    @foreach($location as $location)
    <option>{{$location->Location }}</option>
    @endforeach
    </select>
    </td>
    </tr>

    <tr>
         <td>
        Choose Item Image :
                         <input value="{{$workerview->Filepath}}" class="form-control" type="file" name="photo">
         </td>
    </tr>

    <tr>
     <td>
        <input value="{{$workerview->Description}}" name="desc" id="desc" class="form-control" >
     </td>
    </tr>
    
     
     <td><center><button class="btn btn-primary">Update</button><center></td>
    
 </tr>
</table>
</form>

      </div>
    </section>



    <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Plumber&
                Electricians</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>
