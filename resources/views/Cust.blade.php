@extends('theme2')

@section('content')



   <!-- ======= Intro Section ======= -->
   <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/intro-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Welcome {{ $LoggedUserInfo['Fname'] }}</h2>
                
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="/booknow" class="btn-get-started scrollto animate__animated animate__fadeInUp">Book Now</a>
              </div>
            </div>
          </div>

          

          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">We are professionals</h2>
               
                <a href="/booknow" class="btn-get-started scrollto animate__animated animate__fadeInUp">Book Now</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/4.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">We guarantee 100% perfection</h2>
                
                <a href="/booknow" class="btn-get-started scrollto animate__animated animate__fadeInUp">Book Now</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/5.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Your satisfaction is our happiness</h2>
               
                <a href="/booknow" class="btn-get-started scrollto animate__animated animate__fadeInUp">Book Now</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Intro Section -->

  

   
    

    <!-- ======= About Us Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>About Us</h3>
          <p>Our team is committed to helping stop the spread of Covid-19 throughout our country. When you call us for service or an estimate, we promise to exercise a “No Contact Service Call” safety protocol, which includes using Personal Protective Equipment (PPE) such as masks, gloves and shoe covers as recommended by guidance from the Centers for Disease Control & Prevention (CDC). Our technicians will also maintain at least a 6 feet distance for the safety of all while in your home or business. We’ll save the hand-shakes, high-fives and dog petting for when we get back to normal operations. Let’s all keep each other safe!.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Plumbing</a></h2>
              <p>
              A trusted, full-service company
Prompt, reliable, thorough service
Up-front flat rate pricing – no hidden charges
The job done right and clean the first time – guaranteed
Experienced, knowledgeable technicians
The highest levels of customer service
Peace of mind – 100% satisfaction guaranteed.
              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Electric work</a></h2>
              <p>
              PandE is one of Florida’s premier residential, multi-family and commercial plumbing, electrical, air conditioning, and indoor air quality service providers – your number one resource for plumbing, sewer and drain cleaning, water treatment, air conditioning, electrical and indoor air quality needs. We currently sell, service, repair and install plumbing, heating and air conditioning systems throughout the world.

Discover why tens of thousands of Indains have trusted and counted on our knowledgeable experts for prompt, reliable service since 1983..
              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Goal</a></h2>
              <p>
                Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= mybookings Section ======= -->
    
    <!-- End mybookings Section -->

    

    <!-- ======= viewworkers Section ======= -->
    <br>
    <br>
   
       
        
    <section id="viewworkers" style="background-image: url(assets/img/intro-carousel/whitewall.jpg)">
    <br>
    <br>
    <header class="section-header">

          <h3>Our Workers</h3>
         
        </header>
    
      <div class="container" data-aos="fade-up "  >
   
    <br>
    <br>
    <br>
   
    <div class="row-fluid ">
    
    @foreach($worker as $worker)
    <div class="col-xs-12 col-sm-6 col-md-4">
    
    
        <aside class="profile-card">

  <header>

    <!-- here’s the avatar -->
     
     

    <a>
      <img  class="avatar" src="{{ URL::asset('assets/worker_img/'.$worker->Filepath) }}">
    </a>

    <!-- the username -->
    <h1 style="color:black;">{{$worker->Fname}}{{$worker->Lname}}</h1>

    <!-- worker type -->
    <h2  style="color:black;">{{$worker->Wtype}}</h2>

  </header>

  <!-- description-->
  <div class="profile-bio">

    <p  style="color:black;">Hello there!</p>
    <p  style="color:black;">{{$worker->Description}}</p>

  </div>

  <!-- some social links to show off -->
  <ul class="profile-social-links">

    <!-- twitter - el clásico  -->
    <li>
      <a href="https://twitter.com/tutsplus">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-twitter.svg">
      </a>
    </li>

    <!-- envato – use this one to link to your marketplace profile -->
    <li>
      <a href="https://envato.com">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-envato.svg">
      </a>
    </li>

    <!-- codepen - your codepen profile-->
    <li>
      <a href="https://codepen.io/tutsplus">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-codepen.svg">
      </a>
    </li>

    <!-- add or remove social profiles as you see fit -->

  </ul>

</aside>


 </div>
      </div>  

@endforeach

      
      

    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <!-- End Skills Section -->

    <!-- ======= Myprofile Section ======= -->

    

    <section id="myprofile" style="background-image: url(assets/img/intro-carousel/regwall2.png)" >

    
    
    <div class="container emp-profile" style="background-image: url(assets/img/intro-carousel/regwalll.png)" >
         
         
         <header class="section-header">
    
          <h3>My Profile</h3>
         
        </header>
            <br>
            <br>
   
            <form method="post" >
                <div class="row"  >
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                   
                                   
                                    
                           
                        </div>
                    </div>
                    <div class="col-md-2">
                       
                    </div>
                </div>
                
                    <div class="col-md-8"  style="margin-left:30px">
                        <div class="tab-content profile-tab" id="myTabContent" >
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" > 
                                        <div class="row" >
                                            <div class="col-md-6" >
                                                <label>First Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $LoggedUserInfo['Fname'] }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $LoggedUserInfo['Lname'] }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>House no</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $LoggedUserInfo['Hno'] }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Street</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $LoggedUserInfo['Street'] }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $LoggedUserInfo['City'] }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Pincode</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $LoggedUserInfo['Pincode'] }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $LoggedUserInfo['Email'] }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Contact</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $LoggedUserInfo['Mob'] }}</p>
                                            </div>
                                        </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </form>           
        </div>

    </section> 
    
    <!-- End myprofile Section -->

    

    <!-- ======= change password Section ======= -->
     <br>
     <br>
     <br>
    <section id="changepass" style="background-image: url(assets/img/intro-carousel/regwalll.png)">
      <div class="container text-center" data-aos="zoom-in">
      <div class="section-header">
      <br>
      <br>
      <br>
  <h3>change password</h3>
  
</div>
<form action="changepass" method="post">
                {{csrf_field()}}
<table class="table table-borderless" style="width:400px;">
<br>
      <br>
      <br>
<tr>
    <td>Old Password :</td>
    <td><input type="password" class="form-control" name="oldpass" required></td>
</tr>
<tr>
    <td>New Password :</td>
    <td><input type="password" class="form-control" name="newpass"  
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>
</tr>
<tr>
    <td>Confirm New Password :</td>
    <td><input type="password" class="form-control" name="cnewpass"  
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-dark">Confirm</button></td>
</tr>

</table>
</form>
        
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    </section>
      <br>
      <br>
      <br>

    <!-- ======= change passowrd Section ======= -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg" style="background-image: url(assets/img/intro-carousel/whitewall2.jpg)">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title" >Services</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class=" col-lg-12">
          <ul id="portfolio-flters">
            
            <!-- <li data-filter=".filter-app">App</li>  -->
            <li data-filter=".filter-card">Plumbing</li>
            <li data-filter=".filter-web">Electric</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
              
            </figure>

            <div class="portfolio-info">
              <h4><a href="/booknow">Book Now</a></h4>
              <p>worworke</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
              
            </figure>

            <div class="portfolio-info">
              <h4><a href="/booknow">Book Now</a></h4>
              <p>Ducts & Attics</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
              
            </figure>

            <div class="portfolio-info">
              <h4><a href="/booknow">Book Now</a></h4>
              <p>Air Conditioning & Heating</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
              
            </figure>

            <div class="portfolio-info">
              <h4><a href="/booknow">Book Now</a></h4>
              <p>Water leakage</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
              
            </figure>

            <div class="portfolio-info">
              <h4><a href="/booknow">Book Now</a></h4>
              <p>Air Quality Testing</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
              
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">App 3</a></h4>
              <p>App</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/card1.jpg" class="img-fluid" alt="">
              
            </figure>

            <div class="portfolio-info">
              <h4><a href="/booknow">Book Now</a></h4>
              <p>Tapping services</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
              
            </figure>

            <div class="portfolio-info">
              <h4><a href="/booknow">Book Now</a></h4>
              <p>Water heater services</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
              
            </figure>

            <div class="portfolio-info">
              <h4><a href="/booknow">Book Now</a></h4>
              <p>CCTV Work</p>
            </div>
          </div>
        </div>

      </div>

      </div>
    </section><!-- End Portfolio Section -->

    
   

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg" style="background-image: url(assets/img/intro-carousel/whitewall2.jpg)">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>FEEDBACKS</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Hrithik Prathip</h3>
            <h4>4/5</h4>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Perfect okay.
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Amal C Daniel</h3>
            <h4>3.5/5</h4>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Johny is an excellent and trustworthy plumber for this company. A breath of fresh air of honesty, professionalism and a great source of information.
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Basith Backer</h3>
            <h4>4.5/5</h4>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Joel came out to fix a leak on an outside faucet. I am so happy with the service I received from him.
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Bilin Jossy</h3>
            <h4>5/5</h4>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Joe was professional, courteous  and conducted a thorough inspection of my AC unit. He also recommended better air filters and suggested maintenance plans. Thank you Joe! 
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>Vishnu Mohandas</h3>
            <h4>4/5</h4>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Responsive, professional and on time. Delivered as promised.
I used them before and i will use them again.
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
      <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    </section><!-- End Testimonials Section -->

    

   



      
 

  </main><!-- End #main -->

 @endsection
  
