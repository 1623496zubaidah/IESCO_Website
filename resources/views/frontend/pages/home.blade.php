@extends('frontend.master')
@section('content')

    <style>
        .budgetsNumber {
            color: #A52A2A !important;

        }

        .divider {
            border: 1px solid #ccc;
        }



        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            
        }

        .sponser-image {
            width: 150px;
            height: 150px;
        }

        .carousel-item {
            height: 450px;
        }

        .carousel-image-1 {
            height: 650px;

        }


        #home-heading {
            position: relative;
            min-height: 200px;
            background: url('../img/lights.jpg');
            background-attachment: fixed;
            background-repeat: no-repeat;
            text-align: center;
            color: #fff;
        }

        .dark-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
        }

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

        <!-- SHOWCASE SLIDER -->
        <section id="showcase" style="">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach ($neededprojects as $index => $project)


                        <div class="carousel-item carousel-image-1 {{ $index == 0 ? 'active' : '' }}"
                            style=" background: url('/storage/projects/{{ $project->photo }}');                   background-size: cover;
                                                                                                                                                                                                                                                                                        background-repeat: no-repeat;">
                            <div class="container">
                                <div class="carousel-caption d-none d-sm-block text-right mb-5">
                                    <h1 class="display-3">{{ $project->title }}</h1>
                                    <p class="lead">{{ $project->desc }}</p>
                                    <a href="donation-payment/{{ $project->id }}" class="btn btn-danger btn-lg"
                                        style="background-color:#A52A2A!important;">Donate Now</a>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

                <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>

                <a href="#myCarousel" data-slide="next" class="carousel-control-next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </section>

        <main id="main">



            <!-- ======= Projects Section ======= -->
            <section id="portfolio" class="portfolio section-bg">
               
                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="section-title">
                        <h2>Projects</h2>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                @foreach (App\Project::TYPE as $type)

                                    <li data-filter=".filter-app{{ $type }}">{{ $type }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container">
                        @if (isset($projects))
                     @foreach ($neededprojects as $index => $project)
                                @if ($project->published == 0)

                                    <div class="col-lg-4 col-md-4 portfolio-item filter-app{{ $project->type }}">
                                        <div class="card" style="width: 22rem; height: 28rem; color:black;border-radius:30px!important;">
                                            <div class="text-center"><br><img
                                                    class="card-img-top rounded img-thumbnail mw-100 c"
                                                    src="/storage/projects/{{ $project->photo }}" alt="Card image cap"
                                                    style="height: 200px; width:300px"></div>
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title">Raised: &nbsp;<span
                                                                    class="budgetsNumber">{{ $project->paidBudget }}&nbsp;RM<span>
                                                            </h5>

                                                        </div>
                                                        <div class="col">
                                                            <h5 class="card-title">Goals:<span class="budgetsNumber">
                                                                    RM&nbsp;{{ $project->neededBudget }}<span>
                                                            </h5>

                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="progress" style=" height: 35px;">
                                                            <div class="progress-bar progress-bar-animated progress-bar-striped bg-success"
                                                                role="progressbar"
                                                                style=" width: {{ $project->percent }}%; background-color:#A52A2A!important;"
                                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                                {{ $project->percent }}%
                                                                {{ $project->percent }}%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5><a href="donation-payment/{{ $project->id }}"
                                                        class="card-text text-dark">{{ $project->title }}</h5></a>
                                            </div>
                                            <div class="card-footer">
                                                <a href="donation-payment/{{ $project->id }}"> <input type="submit"
                                                        href="donation-payment/{{ $project->id }}"
                                                        class="btn  btn-outline-dark"
                                                        style="background-color:#A52A2A!important;color:white"
                                                        value="Donate Now"></a>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            @endforeach
                        @endif

                     </div>
                      </div>
                      </div>
                     </div>
                      </div><br><br><br>


                <a href="{{ url('projectslist') }}" class="btn"
                    style=" color:#A52A2A; font-size:20px!important; float:right!important;margin-right:30px!important;">See
                    More Projects >></a><br>



            </section><!-- End Projects Section -->
            <br><br>
            <hr>


            <!-- ======= Implemented Projects Section ======= -->
            <section id="implemented" class="implemented">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Completed Projects</h2>
                    </div>

                    <div class="row">
                        @foreach ($projects as $project)
                            @if ($project->published == 1)

                                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                                    {{-- <div class="icon"><i class="bi bi-chat-left-dots"></i></div> --}}
                                    <img src="/storage/projects/{{ $project->photo }}" class="testimonial-img" alt=""
                                        style="width:300px; height:200px; border-radius:15px!important;"><br><br>
                                    <h1 class="title"><a href="{{ url('projects/' . $project->id) }}">{{ $project->title }}</a>
                                    </h1>
                                    <h2 class="description">{{ $project->desc }} </h2>
                                </div>
                            @endif


                        @endforeach

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
                            @foreach ($news as $news)
                                <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon-box">

                                        <img src="{{ url('storage/photos/' . $news->photo) }}" class="testimonial-img"
                                            alt=""
                                            style="width:280px; height:300px!importany;border-radius:12px!important;"><br>
                                        <h4><a href="#">{{ $news->title }}</a></h4>
                                       <div class="row float-right">
                                            <a href="#" class="btn" style="color:#DAA520">Read More >></a>
                                            
                            
                      </div>
                      </div>
                      </div>
                      
                      @endforeach
                        @endif
                        </div>
                      

                  <a href="{{url('organization-news')}}" class="btn"
                    style=" color:#A52A2A; font-size:20px!important; float:right!important;margin-right:30px!important;">See
                    More News >></a><br><br><br>
            </section><!-- End Services Section -->
            <br><br>


            <!-- ======= Partners Section ======= -->

            <div class="section-title">
                <h2>PARTNERS</h2>
            </div><br>

            <div class="container">

                <div class="row">
                    <!-- Swiper -->
                    <div class="swiper-container ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-md-3 mt-3 mb-3">
                                        <div class="card">
                                            <div class="card-img"><img src="assets/img/partners/1.png"
                                                    class="sponser-image">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-3 mb-3">
                                        <div class="card">
                                            <div class="card-img"><img src="assets/img/partners/2.png"
                                                    class="sponser-image">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-3 mb-3">
                                        <div class="card">
                                            <div class="card-img"><img src="assets/img/partners/3.png"
                                                    class="sponser-image">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-3 mb-3">
                                        <div class="card">
                                            <div class="card-img"><img src="assets/img/partners/7.png"
                                                    class="sponser-image">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-md-3 mt-3 mb-3">
                                        <div class="card">
                                            <div class="card-img"><img src="assets/img/partners/4.png"
                                                    class="sponser-image">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-3 mb-3">
                                        <div class="card">
                                            <div class="card-img"><img src="assets/img/partners/5.png"
                                                    class="sponser-image">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-3 mb-3">
                                        <div class="card">
                                            <div class="card-img"><img src="assets/img/partners/6.png"
                                                    class="sponser-image">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-3 mb-3">
                                        <div class="card">
                                            <div class="card-img"><img src="assets/img/partners/7.png"
                                                    class="sponser-image">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination" style="color:#A52A2A!important;"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-black"></div>
                        <div class="swiper-button-prev swiper-button-black"></div>
                    </div>

                </div>
            </div>
            <br><br>
         <!-- ======= End Partners Section ======= -->


            <!-- ======= Contact Us Section ======= -->
          {{--   <section id="contact" class="contact" style="color:#890000;">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Contact Us</h2>
                    </div>

                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                        <form action="{{ action('frontend\PagesController@dosend') }}" method="post" role="form" class="php-email-form">
                        @csrf

                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                        required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="body" rows="5" placeholder="Message"
                                    required></textarea>
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
            </section><!-- End Contact Us Section --> --}}

        </main><!-- End #main -->


        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>



    </body>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

    <script>
        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());

        // Configure Slider
        $('.carousel').carousel({
            interval: 10000,

            pause: 'hover'
        });

        // Lightbox Init
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

        // Video Play
        $(function() {
            // Auto play modal video
            $(".video").click(function() {
                var theModal = $(this).data("target"),
                    videoSRC = $(this).attr("data-video"),
                    videoSRCauto = videoSRC +
                    "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
                $(theModal + ' iframe').attr('src', videoSRCauto);
                $(theModal + ' button.close').click(function() {
                    $(theModal + ' iframe').attr('src', videoSRC);
                });
            });
        });
    </script>
@endsection
