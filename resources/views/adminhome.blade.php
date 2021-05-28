@extends('theme4')

@section('content')



  <!-- ======= Intro Section ======= -->
  <!-- End Intro Section -->

  <main id="main">

    <!-- ======= Featured Services Section Section ======= -->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>


          
        </div>
      </div>
    </section><!-- End Featured Services Section -->

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

    <!-- ======= Services Section ======= -->
    <section id="addlocation">
      <div class="container" data-aos="fade-up">

        <header class="section-header wow fadeInUp">
          <h3>Add Location</h3>
         
        </header>

        <form action="/addlocation" method="post">

       {{csrf_field()}}
<table class="table table-borderless">
 
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
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <!-- End Call To Action Section -->

    <!-- ======= add category Section ======= -->

    <br>
    <br>
    <br>
    <br>

    <section id="addcategory" >
      <div class="container" data-aos="fade-up" >

        <header class="section-header">
          <h3>ADD CATEGORY</h3>
          
        </header>

        <form action="/addcategory" method="post">

{{csrf_field()}}
<table class="table table-borderless" style="width:400px; margin-left:300px;">
 
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
    </section>
    
    <br>
    <br>
    <br>
    <br>
    <!-- End add category Section -->


  

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Services</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class=" col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
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
              <a href="assets/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="/#signup">Book Now</a></h4>
              <p>worworke</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/web3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 3"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="/#signup">Book Now</a></h4>
              <p>Ducts & Attics</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="App 2"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="/#signup">Book Now</a></h4>
              <p>Air Conditioning & Heating</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/card2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 2"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Book Now</a></h4>
              <p>Water leakage</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/web2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 2"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Book Now</a></h4>
              <p>Air Quality Testing</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="App 3"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
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
              <a href="assets/img/portfolio/card1.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 1"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Book Now</a></h4>
              <p>Tapping services</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/card3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 3"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Book Now</a></h4>
              <p>Water heater services</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/web1.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Book Now</a></h4>
              <p>CCTV Work</p>
            </div>
          </div>
        </div>

      </div>

      </div>
    </section><!-- End Portfolio Section -->

    
   

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
  
