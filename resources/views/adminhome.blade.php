@extends('theme4')

@section('content')



  <!-- ======= Intro Section ======= -->
  <!-- End Intro Section -->

  <main id="main">

    

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
      <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
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
    <section id="addlocation" style="background-image: url(assets/img/intro-carousel/viewloc3.jpg)">
      <div class="container" data-aos="fade-up">
        
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

        <header class="section-header wow fadeInUp">
          <h3 style="color:white;">Add Location</h3>
         
        </header>
        <br>
    

        <form action="/addlocation" method="post">

       {{csrf_field()}}
<table class="table table-borderless" style="width:400px; margin-left:350px;">
 
 <tr>
     <td><input name="location" type="text" class="form-control" placeholder="Add location"></td>
 </tr>
 
 
 <tr>
    
     <td><center><button class="btn btn-primary">ADD</button><center></td>
 </tr>
</table>
</form>
          
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

    </section>

    
    <!-- End loc Section -->

 

    <!-- ======= add category Section ======= -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <section id="addcategory" style="background-image: url(assets/img/intro-carousel/viewcat.jpg)" >
      <div class="container" data-aos="fade-up" >
       
      <br>
    <br>
    <br>
    <br>

        <header class="section-header">
          <h3>ADD CATEGORY</h3>
          
        </header>
    

        <form action="/addcategory" method="post">

{{csrf_field()}}
<table class="table table-borderless" style="width:400px; margin-left:350px;">
 
 <tr>
     <td><input name="category" type="text" class="form-control"placeholder="category name"></td>
 </tr>
 
 <tr>

 <tr>
     <td><input name="payment" type="text" class="form-control"placeholder="Add payment "></td>
 </tr>
 
 <tr>
     
     <td><center><button class="btn btn-primary">Add</button><center></td>
    
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
    <!-- End add category Section -->


  

   
   

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
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
    </section><!-- End Testimonials Section -->

    

   



      
 

  </main><!-- End #main -->

 @endsection
  
