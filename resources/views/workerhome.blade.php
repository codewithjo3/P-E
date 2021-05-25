@extends('theme5')

@section('content')


<section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/intro-carousel/workerwall2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Welcome {{$data['Fname']}} </h2>
                
                
               
                <p class="animate__animated animate__fadeInUp"></p>
                
              </div>
            </div>
          </div>

         <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/workerwall3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">We are professionals</h2>
                
               
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/workerwall4.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">We guarantee 100% perfection</h2>
                
                
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/workerwall5.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Your satisfaction is our happiness</h2>
               
               
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
  </section>

  <main id="main">


    <!-- ======= my customers Section ======= -->
    <br>
<br>

    

    <section id="mycustomers"  style="background-image: url(assets/img/intro-carousel/custwall.jpg)">
    

    <header class="section-header">
    
<br>
<br>


    
          <h3 style="color:white;" >My Customers </h3>
         
        </header>
    <div class="container-xl"   >
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                
            </div>
            <div class="table-filter">
                <div class="row">
                    <div class="col-sm-3">
                        
                    </div>
                    
                        
                       
                       
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table" >
                <thead style="color:white;">
                    <tr >
                        <th>Customer Id</th>
                        <th>Customer name</th>
                        <th>Booking Id</th>
                        <th>Booking Date</th>	
                        <th>Booking Time</th>
                        <th>Location</th>										
                        <th>Contact</th>
                        
                    </tr>
                </thead>
                <tbody style="color:white;" >
                   <tr style="color:white;">
                        <td>@foreach($datacust as $cust)
                    <tr style="color:white;">
                   
                        <td>{{$cust->register->id}}</td> 
                        <td>{{$cust->register->Fname}} {{$cust->register->Lname}}</td>
                        <td>{{$cust->id}}</td> 
                        <td>{{$cust->date}}</td> 
                        <td>{{$cust->time}}</td>
                        <td>{{$cust->register->Hno}},{{$cust->register->Street}},{{$cust->register->City}},{{$cust->register->Pincode}}</td>      
                        <td>{{$cust->register->Mob}}</td>                 
                        
                      
                       </tr> @endforeach
                  
                 
                </tbody>
            </table>
            
    </div>        
</div>     
<br>
<br>
<br>
<br>
<br>
<br>
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
<br>
<br>
<br>
<br>
<br>


    <!-- End mycustomers Section -->
    
   

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg" style="background-image: url(assets/img/intro-carousel/blackwall.jpg)">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 style="color:white;">FEEDBACKS</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3 style="color:white;">Hrithik Prathip</h3>
            <h4 style="color:white;">4/5</h4>
            <p style="color:white;">
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Perfect okay.
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3 style="color:white;">Amal C Daniel</h3>
            <h4 style="color:white;">3.5/5</h4>
            <p style="color:white;">
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Johny is an excellent and trustworthy plumber for this company. A breath of fresh air of honesty, professionalism and a great source of information.
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3 style="color:white;">Basith Backer</h3>
            <h4 style="color:white;">4.5/5</h4>
            <p style="color:white;">
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Joel came out to fix a leak on an outside faucet. I am so happy with the service I received from him.
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3 style="color:white;">Bilin Jossy</h3>
            <h4 style="color:white;">5/5</h4>
            <p style="color:white;">
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Joe was professional, courteous  and conducted a thorough inspection of my AC unit. He also recommended better air filters and suggested maintenance plans. Thank you Joe! 
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item" >
            <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3 style="color:white;">Vishnu Mohandas</h3>
            <h4 style="color:white;">4/5</h4>
            <p style="color:white;">
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

    </section><!-- End Testimonials Section -->

    

   



      
 

  </main><!-- End #main -->

 @endsection
  
