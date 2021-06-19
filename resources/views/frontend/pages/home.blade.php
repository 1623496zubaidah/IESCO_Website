@extends('frontend.master')
@section('content')

<style>

</style>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IESCO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">



<body>


<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Mamba</span></h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main"> 


      <!-- ======= Campaigns Section ======= -->
    <section class="campaigns">
      <div class="container">
        <div class="section-title" data-aos="zoom-out" >
          <h2>Campaigns</h2>
        </div>
        <div class="row no-gutters">
          @if (isset($projects))
          @foreach ($projects as $project )
          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
                <h4>{{$project->title}}</h4>
            <p>{{$project->desc}}</p><br>
            <button class="nav-link scrollto" href="#" style="background:#890000; color:white; border-radius:4px; border-color:#890000; box-shadow:#890000;">Donate Now</button>
          </div>

             @endforeach
             @endif
          </div>
        </div>

      </div>
    </section><!-- End Campaigns Section -->

    <!-- ======= Projects Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up"data-aos-delay="100">

        <div class="section-title" >
          <h2>Projects</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
               <li data-filter="*" class="filter-active">All</li>
              @foreach (App\Project::TYPE as $type)
              
                <li data-filter=".filter-app{{$type}}">{{$type}}</li>
               @endforeach 
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
         @if (isset($projects))
           @foreach($projects as $project)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app{{$project->type}}">
             <div class="portfolio-wrap">
                <img src="{{asset('storage/photos/' . $project->photo)}}" > 
                <div class="portfolio-info"> 
                <h4>{{$project->title}}</h4>
                <p>{{$project->desc}}</p>
                <div class="portfolio-links">
                  <a href="{{ route("frontend.donate", [$project->id]) }}"  title="Donate"><i class="bi bi-plus"></i></a>
                  <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                  @endforeach
                  @endif
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div><br><br><br>


        <a href="{{route('frontend.projects.index')}}" class="btn"
                  style=" color:#A52A2A; font-size:20px!important; float:right!important;margin-right:30px!important;">See More Projects >></a><br>

        

    </section><!-- End Projects Section -->
 

    <!-- ======= Implemented Projects Section ======= -->
    <section id="implemented" class="implemented">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Completed Projects</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
         {{-- <div class="icon"><i class="bi bi-chat-left-dots"></i></div> --}}            
            <img src="assets/img/1.jpg" class="testimonial-img" alt="" style="width:200px; border-radius:15px!important;"><br><br>
            <h4 class="title"><a href="">Project 1</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
           {{-- <div class="icon"><i class="bi bi-bounding-box"></i></div> --}} <img src="assets/img/3.jpg" class="testimonial-img" alt="" style="width:200px; border-radius:15px!important;"><br><br>
            <h4 class="title"><a href="">Project 2</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
          {{-- <div class="icon"><i class="bi bi-globe"></i></div> --}}            
            <img src="assets/img/4.jpg" class="testimonial-img" alt="" style="width:200px;border-radius:15px!important;"><br><br>
            <h4 class="title"><a href="">Project 3</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          
        </div>

      </div>
    </section><!-- End Implemented Projects Section --><br>
<hr>

<!-- ======= News Section ======= -->
    <section id="news" class="news">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>IESCO Activities</h2>
        </div><br>

        <div class="row">
         @if (isset($news))
          @foreach ($news as $news )
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
               
               <img src="{{ url('storage/news/'.$news->photo) }}" class="testimonial-img" alt="" style="width:200px; height:200px!importany;border-radius:15px!important;"><br>
              <h4><a href="#">{{$news->title}}</a></h4>
              <p>{{$news->desc}}</p>
              <div class="row float-right">
              <a href="#" class="btn" style="color:#DAA520">Read More >></a>
              @endforeach
              @endif
              </div>
              </div>
            </div>
          </div>
         
         
          </div>
        </div>

              <a href="#" class="btn"
                  style=" color:#A52A2A; font-size:20px!important; float:right!important;margin-right:30px!important;">See More News >></a><br><br><br>
    </section><!-- End Services Section -->
    <br><br>


 <!-- ======= Partners Section ======= -->
       <div class="section-title">
          <h2>PARTNERS</h2>
        </div><br>
    <section id="clients" class="clients" style="">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/partners/1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/partners/2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/partners/3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/partners/4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/partners/5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/partners/6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/partners/7.png" class="img-fluid" alt=""></div>
          
          </div><br>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Partners Section -->
    <br><br>



    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact" style="color:#890000;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms\contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>

              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>

@endsection