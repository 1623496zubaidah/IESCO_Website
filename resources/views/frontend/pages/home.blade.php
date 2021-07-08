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
            background: #fff;
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
            height: 750px;

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
        <section id="showcase">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach ($neededprojected as $index => $project)


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

        <!-- ======= Hero Section ======= -->
        {{-- <section id="hero">
            <div class="hero-container">
                <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                    <div class="carousel-inner" role="listbox">

                        <!-- Slide 1 -->
                        <div class="carousel-item active" style="background-image: url('');">
                            <div class="carousel-container">
                                <div class="carousel-content container">
                                    <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Mamba</span></h2>
                                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                        aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                        mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                        vel. Minus et tempore modi architecto.</p>
                                    <a href="#about"
                                        class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item" style="background-image: url('');">
                            <div class="carousel-container">
                                <div class="carousel-content container">
                                    <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                        aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                        mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                        vel. Minus et tempore modi architecto.</p>
                                    <a href="#about"
                                        class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="carousel-item" style="background-image: url('');">
                            <div class="carousel-container">
                                <div class="carousel-content container">
                                    <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                        aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                        mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                        vel. Minus et tempore modi architecto.</p>
                                    <a href="#about"
                                        class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
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
        </section><!-- End Hero --> --}}

        <main id="main">


            <!-- ======= Campaigns Section ======= -->
            <section class="campaigns">
                <div class="container">
                    <div class="section-title" data-aos="zoom-out">
                        <h2>Campaigns</h2>
                    </div>
                    {{-- <div class="row no-gutters">
                        @if (isset($projects))
                            @foreach ($projects as $project)
                                <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
                                    <h4>{{ $project->title }}</h4>
                                    <p>{{ $project->desc }}</p><br>
                                    <button class="nav-link scrollto" href="#"
                                        style="background:#890000; color:white; border-radius:4px; border-color:#890000; box-shadow:#890000;">Donate
                                        Now</button>
                                </div>

                            @endforeach
                        @endif
                    </div> --}}
                    {{-- <section id="portfolio" class="portfolio section-bg">
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

                            <div class="row">

                                {{-- [(New Price - Old Price)/Old Price] x 100 --}}
                    @foreach ($projects as $project)
                        @if ($project->published == 0)
                            {{-- <div class="col-lg-4 col-md-6 mb-2 icon-box portfolio-item filter-app{{ $project->type }}">
                                <div class="card" style="width: 18rem; height: 27rem; color:black">
                                    <img class="card-img-top"
                                        src="https://cdn.pixabay.com/photo/2016/12/29/16/12/barbed-wire-1938842_960_720.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="card-title">Raised:<span
                                                            class="text-success">{{ $project->paidBudget }}<span>
                                                    </h5>

                                                </div>
                                                <div class="col">
                                                    <h5 class="card-title">Goals:<span class="text-success">
                                                            RM{{ $project->neededBudget }}<span>
                                                    </h5>

                                                </div>
                                            </div>
                                            <div>
                                                <div class="progress" style=" height: 35px;">
                                                    <div class="progress-bar progress-bar-animated progress-bar-striped"
                                                        role="progressbar" style=" width: {{ $project->percent }}%;"
                                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                        {{ $project->percent }}%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h5><a href="" class="card-text text-dark">Ali salah</h5></a>
                                    </div>
                                    <div class="card-footer">
                                        <a href="stripe-payment/{{ $project->id }}"> <input type="submit"
                                                href="stripe-payment/{{ $project->id }}" class="btn  btn-outline-success"
                                                value="Donate Now"></a>
                                    </div>
                                </div>
                            </div> --}}
                        @endif

                    @endforeach
                </div>
                </div>
            </section>
            <!-- End Projects Section -->

            </div>

            </div>
            </section><!-- End Campaigns Section -->

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
                            @foreach ($projects as $project)
                                @if ($project->published == 0)

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-app{{ $project->type }}">
                                        <div class="card" style="width: 18rem; height: 27rem; color:black">
                                            <div class="text-center"><img
                                                    class="card-img-top rounded img-thumbnail mw-100 c"
                                                    src="/storage/projects/{{ $project->photo }}" alt="Card image cap"
                                                    style="height: 200px; width:300px"></div>
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title">Raised:<span
                                                                    class="budgetsNumber">{{ $project->paidBudget }}RM<span>
                                                            </h5>

                                                        </div>
                                                        <div class="col">
                                                            <h5 class="card-title">Goals:<span class="budgetsNumber">
                                                                    RM{{ $project->neededBudget }}<span>
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


                <a href="{{ url('projects') }}" class="btn"
                    style=" color:#A52A2A; font-size:20px!important; float:right!important;margin-right:30px!important;">See
                    More Projects >></a><br>



            </section><!-- End Projects Section -->


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
                                        style="width:200px; border-radius:15px!important;"><br><br>
                                    <h4 class="title"><a
                                            href="{{ url('projects/' . $project->id) }}">{{ $project->title }}</a>
                                    </h4>
                                    <p class="description">{{ $project->desc }} </p>
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
                                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon-box">

                                        <img src="{{ url('storage/news/' . $news->photo) }}" class="testimonial-img"
                                            alt=""
                                            style="width:200px; height:200px!importany;border-radius:15px!important;"><br>
                                        <h4><a href="#">{{ $news->title }}</a></h4>
                                        <p>{{ $news->desc }}</p>
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
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                </div>
            </div>
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
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                        required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
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
            </section><!-- End Contact Us Section -->

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
