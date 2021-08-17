<script>
    $(function() {
        $('.selectpicker').selectpicker();
    });
</script>
<style>


/* Style the search box inside the navigation bar */
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border:1px solid #A52A2A;
  border-radius:5px!important;
  margin-top: 4px;
  margin-bottom: 4px;
  margin-left: 16px;
  font-size: 16px;
  background-color:rgb(169,169,169)!important;
}


/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}


</style>

<!-- Favicons -->
<link href="assets/img/logo.png" rel="icon">

<!-- Google Fonts -->
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
    rel="stylesheet">

<!-- ======= Top Bar ======= -->

<section id="topbar" class="d-flex align-items-center" style="background-color:rgb(169,169,169)!important;">

<div class="topnav">
  <input type="text" placeholder="Search.." style="height:30px!important;width:150px!important;">
</div>


    <div>
        <select class="selectpicker" data-width="fit"
            style="margin:25px!important;color:#A52A2A; background-color:rgb(169,169,169)!important;border:1px solid #A52A2A;
  border-radius:5px!important;">
            <option data-content='<span class="flag-icon flag-icon-us"></span> English'>En</option>
            <option data-content='<span class="flag-icon flag-icon-mx"></span> Arabic'>Ar</option>
        </select>
    </div>
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
           
        </div>

        <div class="social-links d-none d-md-block" style="margin-top:5px; float:right;">
            <a href="https://www.facebook.com/IESCOMALAYSIA" class="facebook"><i class="bi bi-facebook"
                    style="color:#A52A2A;"></i></a>
            <a href="https://www.instagram.com/iescomalaysia/" class="instagram"><i class="bi bi-instagram"
                    style="color:#A52A2A;"></i></a>
            <a href="https://twitter.com/IESCOmy" class="twitter"><i class="bi bi-twitter"
                    style="color:#A52A2A;"></i></a>
            <a href="https://www.youtube.com/channel/UCsRHAz9NELlYdfasgq1J4BA" class="youtube"><i class="bi bi-youtube"
                    style="color:#A52A2A;"></i></a>
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
                        <li><a href="{{ route('frontend.trustees') }}">Board of Trustees</a></li>
                        <li><a href="{{ route('frontend.advisors') }}">Board of Advisors</a></li>
                        <li><a href="{{ route('frontend.chart') }}">Organizational Chart</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>Activities</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/implemented">Implemented projects</a></li>
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
                                    <li><a href="{{ url('donation-payment') }}/{{ $project->id }}">
                                            {{ $project->title }}</a></li>

                                @endforeach
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Initiatives</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                @foreach ($initiatives->slice(0, 5) as $initiative)
                                    <li><a href="{{ url('donation-payment') }}/{{ $initiative->id }}">
                                            {{ $initiative->title }}</a>
                                    </li>

                                @endforeach

                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Campaigns</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                @foreach ($campaigns->slice(0, 5) as $campaign)
                                    <li><a href="{{ url('donation-payment') }}/{{ $campaign->id }}">
                                            {{ $campaign->title }}</a></li>

                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a class="nav-link scrollto" href="scholarship/create">Apply for Scholarships</a>
                </li>


                <li class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                   
                @else
                    <li class="nav-item dropdown">
                       
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">



                           {{-- Profile  --}}
                            <a class="dropdown-item" href="{{ route('frontend.profile', Auth::id() ) }}">
                                {{ __('Profile') }}
                            </a>


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
                        style="background:#A52A2A; color:white!important; border-radius:10px; border-color:#A52A2A!important; box-shadow:#A52A2A!important; width:120px!important; height:40px!important;padding:2px!important;font-size:16px!important;">
                        <span class="p-2 text-bold"> Donate Now</span> </a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>


        </nav><!-- .navbar -->
    </div>
    
</header><!-- End Header -->

 <a href="donate" class="hi"
    style="position:-webkit-sticky; position:fixed; top: 50%; right: 0px; transform: translate(-50%, -50%);-ms-transform: translate(-50%, -50%); background:#890000; color:#fff; border-radius:5px; width:120px;height:35px;text-align:center; padding:5px;; margin-right:-55px; ">Fast
    Donate</a>


