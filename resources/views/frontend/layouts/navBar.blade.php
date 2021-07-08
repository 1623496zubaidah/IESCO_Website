<script>
    $(function() {
        $('.selectpicker').selectpicker();
    });
</script>
<style>
    /*
.search-container {
  float: left!important;
}

.search-container input[type=text] {
  color:#fff!important;
  padding: 6px;
  margin-top: 2px;
  margin-left:5px!important;
  font-size: 14px;
  border-radius:8px;
  height:28px!important;
  width:100px!important;
  background-color:rgb(59, 57, 57)!important;}

@media screen and (max-width: 600px) {
  input, button {
    float: none;
  }
   .search-container input[type=text], button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .search-container input[type=text] {
    border: 1px solid #ccc;  
  }

  }
  */
    .example {
        box-sizing: border-box;
        border: 5px !important;
        border-radius: 5px !important;
    }

    form.example input[type=text] {
        height: 25px !important;
        color: #fff !important;
        padding: 10px;
        margin: 8px 0px 8px 8px !important;
        font-size: 15px;
        border: 1px solid white;
        float: left;
        width: 50%;
        background: rgb(59, 57, 57) !important;
        ;
    }

    /* Style the submit button */
    form.example button {
        float: left;
        height: 25px !important;
        margin: 8px 8px 8px 0px !important;
        width: 20%;
        padding: 1px !important;
        background: #DAA520;
        color: #A52A2A;
        font-size: 15px;
        border: 1px solid white;
        border-left: none;
        /* Prevent double borders */
        cursor: pointer;
    }

    form.example button:hover {
        background: #fff;
    }

    /* Clear floats */
    form.example::after {
        content: "";
        clear: both;
        display: table;
    }

</style>



{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}


<!-- Favicons -->
<link href="assets/img/logo.png" rel="icon">

<!-- Google Fonts -->
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
    rel="stylesheet">

<!-- Vendor CSS Files -->
{{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> --}}


<!-- Template Main CSS File -->
{{-- <link href="assets/css/style.css" rel="stylesheet">


<!-- Vendor JS Files -->
{{-- <script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script> --}}

<!-- Template Main JS File -->
{{-- <script src="assets/js/main.js"></script> --}}



<!-- ======= Top Bar ======= -->

<section id="topbar" class="d-flex align-items-center" style="background-color:rgb(59, 57, 57)!important;">
    {{-- <input type="text" placeholder="Search.." style=" margin:10px; border-radius:10px; border-color:black!important; box-shadow:none!important;width:100px!important;"> --}}

    <form class="example" action="#">
        <input type="text" placeholder="" name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>


    {{-- <div class="search-container">

      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
</div> --}}

    <div>
        <select class="selectpicker" data-width="fit"
            style="margin:25px!important;color:#DAA520; background-color:rgb(59, 57, 57)!important;">
            <option data-content='<span class="flag-icon flag-icon-us"></span> English'>En</option>
            <option data-content='<span class="flag-icon flag-icon-mx"></span> Arabic'>Ar</option>
        </select>
    </div>
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            {{-- <i class="bi bi-envelope-fill" style="color:#A52A2A;"></i><a href="mailto:info@iesco.my" style="color:white;">info@iesco.my</a>
        <i class="bi bi-phone-fill phone-icon" style="color:#A52A2A;"></i><p style="color:#DAA520;margin-top:18px;"> +60 321812894</p> --}}
        </div>

        <div class="social-links d-none d-md-block" style="margin-top:5px; float:right;">
            <a href="https://www.facebook.com/IESCOMALAYSIA" class="facebook"><i class="bi bi-facebook"
                    style="color:#DAA520;"></i></a>
            <a href="https://www.instagram.com/iescomalaysia/" class="instagram"><i class="bi bi-instagram"
                    style="color:#DAA520;"></i></a>
            <a href="https://twitter.com/IESCOmy" class="twitter"><i class="bi bi-twitter"
                    style="color:#DAA520;;"></i></a>
            <a href="https://www.youtube.com/channel/UCsRHAz9NELlYdfasgq1J4BA" class="youtube"><i class="bi bi-youtube"
                    style="color:#DAA520;;"></i></a>
        </div>
    </div>

</section>

<!-- ======= Header ======= -->

<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo me-auto" style="margin-left:-5000;">
            <a href="{{ route('frontend.home') }}"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>



                <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('frontend.about') }}">About IESCO</a></li>
                        <li><a href="{{ route('frontend.chairman') }}">IESCO Chairman</a></li>
                        <li><a href="{{ route('frontend.ceo') }}">IESCO CEO</a></li>
                        <li><a href="#">Board of Directors</a></li>
                        <li><a href="{{ route('frontend.trustees') }}">Board of Trustees</a></li>
                        <li><a href="{{ route('frontend.chart') }}">Organizational Chart</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>Activities</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/projects">Implemented projects</a></li>
                        <li><a href="/organization-news">organization News</a>
                        </li>
                    </ul>
                </li>



                <li class="dropdown"><a href="#"><span>Contribute with us</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#"></a></li>
                        <li class="dropdown"><a href="#"><span>Projects</span> <i class="bi bi-chevron-right"></i></a>

                            <ul>
                                @foreach ($projects->slice(0, 5) as $project)
                                    <li><a href="improjects/{{ $project->id }}"> {{ $project->title }}</a></li>

                                @endforeach
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Initiatives</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                @foreach ($initiatives->slice(0, 5) as $initiative)
                                    <li><a href="improjects/{{ $initiative->id }}"> {{ $initiative->title }}</a>
                                    </li>

                                @endforeach

                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Campaigns</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                @foreach ($campaigns->slice(0, 5) as $campaign)
                                    <li><a href="improjects/{{ $campaign->id }}"> {{ $campaign->title }}</a></li>

                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a class="nav-link scrollto" href="apply/create">Apply for Scholarships</a>
                </li>


                <li class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                @else
                    <li class="nav-item dropdown">
                        {{-- <img src="{{Auth::user()->avatar}}" alt="{{Auth::user()->name}}" style="border: 1px so #cccccc; border-radius: 5px; width:39px; height:auto; float:left; margin-right:7px;"> --}}
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                </li>


                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <li><a class="nav-link scrollto text-center" href="{{ url('projects') }}"
                        style="background:#DAA520; color:#515355!important; border-radius:5px; border-color:#515355!important; box-shadow:#515355!important; width:120px!important; height:40px!important;padding:2px!important;font-size:16px!important;">
                        <span class="p-2 text-bold"> Donate Now</span> </a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>


        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->

<a href="donate" class="hi"
    style="position:-webkit-sticky; position:fixed; top: 50%; right: 0px; transform: translate(-50%, -50%);-ms-transform: translate(-50%, -50%); background:#890000; color:#fff; border-radius:5px; width:120px;height:35px;text-align:center; padding:5px;; margin-right:-55px; ">Fast
    Donate</a>
