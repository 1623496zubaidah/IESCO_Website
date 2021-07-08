<style>
    /*
.footer-links i {
color: #DAA520!important;
}
.footer-links a:hover{
  color:#A52A2A!important;
}
.footer-top h4 {
  font-size: 16px;
  font-weight: 600;
  color: #DAA520!important;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .social-links a {
  background: #DAA520!important;
  font-size: 18px;
  display: inline-block;
  color: #A52A2A!important;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: rgb(104, 4, 4)!important;
  color: #fff;
  text-decoration: none;
}

#footer .copyright {
  position: inherit!important;
  text-align: center!important;
  background-color:rgb(59, 57, 57) ;
  height: 50px!important;

  padding: 50px!important; 
  margin-top: -10px!important;

*/
    }

</style>
<!-- Favicons -->
{{-- <link href="assets/img/logo.png" rel="icon"> --}}

<!-- Google Fonts -->
{{-- <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
    rel="stylesheet"> --}}

<!-- Vendor CSS Files -->
{{-- <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> --}}

<!-- Template Main CSS File -->
{{-- <link href="assets/css/style.css" rel="stylesheet"> --}}


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

<!-- Template Main JS File -->
{{-- <script src="assets2/js/main.js"></script> --}}


<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-12 footer-info" style="color: #DAA520!important;">
                    <h2>CONTACT US</h2><br>
                    <p>
                        <strong>Phone:</strong> +60 3-41442894<br>
                        <strong>Email:</strong> info@iesco.my<br>
                    </p><br>
                    <div class="social-links mt-3">
                        <a href="https://www.facebook.com/IESCOMALAYSIA" class="facebook"
                            style="background: #DAA520!important;"><i class="bx bxl-facebook"></i></a>
                        <a href="https://www.instagram.com/iescomalaysia/" class="instagram"
                            style="background: #DAA520!important;"><i class="bx bxl-instagram"></i></a>
                        <a href="https://twitter.com/IESCOmy" class="twitter" style="background: #DAA520!important;"><i
                                class="bx bxl-twitter"></i></a>
                        <a href="https://www.youtube.com/channel/UCsRHAz9NELlYdfasgq1J4BA" class="youtube"
                            style="background: #DAA520!important;"><i class="bx bxl-youtube"></i></a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-12 footer-links" style="color: #DAA520!important;">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.home') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.about') }}">About
                                IESCO</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Projects</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Campaigns</a></li>
                        <li><i class="bx bx-chevron-right" style="color: #DAA520!important;"></i> <a href="#">Privacy
                                policy</a></li>
                    </ul>
                </div>

                {{-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
              </div> --}}

                <div class="col-lg-3 col-md-12 footer-info">
                    <a href="{{ route('frontend.home') }}"><img src="assets/img/logo.png" alt="" class="img-fluid"
                            style="margin-left:-20px; width:200px; margin-bottom:30px;"></a>
                    <p>
                        E-03A-07, Pusat Komersial Setapak <br>
                        Jalan Taman Ibu Kota, Taman Danau Kota,
                        53300 Kuala Lumpur.<br><br>

                </div>
            </div>
        </div>
</footer>

{{-- <div class="container"> --}}
<div class="copyright">
    &copy; Copyright <strong><span>IESCO</span></strong>. All Rights Reserved
</div>
{{-- </div> --}}
<!-- End Footer -->
