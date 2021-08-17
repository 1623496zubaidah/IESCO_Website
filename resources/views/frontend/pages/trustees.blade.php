@extends('frontend.master')
@section('content')


<style>

/*--------------------------------------------------------------
# Our Team
--------------------------------------------------------------*/
.team {
  background: #fff;
  padding: 60px 0 30px 0;
}

.team .member {
  text-align: center;
  margin-bottom: 80px;
  position: relative;
}

.team .member .pic {
  border-radius: 4px;
  overflow: hidden;
  
}

.team .member img {
  transition: all ease-in-out 0.4s;
  width:300px!important;
  height:300px!important;
}

.team .member:hover img {
  transform: scale(1.1);
}

.team .member .member-info {
  position: absolute;
  bottom: -48px;
  left: 20px;
  right: 20px;
  background: #A52A2A;
  padding: 15px 0;
  border-radius: 4px;
}

.team .member h4 {
  font-weight: 700;
  margin-bottom: 10px;
  font-size: 16px;
  color: #fff;
  position: relative;
  padding-bottom: 10px;
}

.team .member h4::after {
  content: '';
  position: absolute;
  display: block;
  width: 50px;
  height: 1px;
  background: #fff;
  bottom: 0;
  left: calc(50% - 25px);
}

.team .member span {
  font-style: italic;
  display: block;
  font-size: 16px;
  color: #fff;
}

.team .member .social {
  margin-top: 15px;
}

.team .member .social a {
  transition: color 0.3s;
  color: #fff;
}

.team .member .social a:hover {
  color: #9eccf4;
}

.team .member .social i {
  font-size: 16px;
  margin: 0 2px;
}

@media (max-width: 992px) {
  .team .member {
    margin-bottom: 100px;
  }
}

</style>

 <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h1><b>Board of Trustees</b></h1>
        </div>
<br><br>
        <div class="row justify-content-md-center">

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" style="float:center!important">
            <div class="member">
              <div class="pic"><img src="{{asset('assets/img/chairman.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Assoc. Prof. Dr. Mohd Zin Kandar</h4>
                <span>Chairman</span>
               
              </div>
            </div>
          </div>
          </div>
<br><br>
        
        
          <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
              <div class="pic"><img src="{{asset('assets/img/CEO.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr. Mahmoud Shakafa</h4>
                <span>Chief Executive Officer</span>
              
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="{{asset('assets/img/Member1.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Prof. Dr. Md Roslan Hashim</h4>
                <span>Member</span>
               
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="{{asset('assets/img/Member2.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr. Shamsuri Abdullah</h4>
                <span>Member</span>
                
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="{{asset('assets/img/Member3.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr. Syed Noh Syed Omar</h4>
                <span>Member</span>
              
              </div>
            </div>
          </div>

        </div>
        </div>

      </div>
    </section><!-- End Our Team Section -->
    @endsection