@extends('frontend.master')
@section('content')

    <style>
        .form-control {
            padding: 0 10px !important;
        }
        .cc-selector input{
            margin:0;padding:0;
            -webkit-appearance:none;
            -moz-appearance:none;
            appearance:none;
        }

        .paypal{
          background-image:url('assets/img/paypal.png');
          background-size:50px;
          background-size:50px;
          }
        .billplz{
          background-image:url('assets/img/billplz.png');
          background-size:50px;
          background-size:50px;
          }


        .cc-selector input:active +.drinkcard-cc{opacity: .9;}
        .cc-selector input:checked +.drinkcard-cc{
            -webkit-filter: none;
            -moz-filter: none;
            filter: none;
            border: 1px solid #fb5e1c;
        }
        .drinkcard-cc{
            cursor:pointer;
            background-size:90%;
            background-repeat:no-repeat;
            background-position: center;
            display:inline-block;
            width:100px;height:70px;

        }
        .drinkcard-cc:hover{
            -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
            -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
        }
    </style>


 <!-- Start Page Header Section -->

    <section class="bg-page-header">
        <div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="page-header">
                        <div class="page-title">
                            <h2>title</h2>
                        </div>
                        <!-- .page-title -->
                       
                    </div>
                    <!-- .page-header -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </div>
        <!-- .page-header-overlay -->
    </section>

    <!-- End Page Header Section -->


<!-- Start Single campaign Section -->
    <section class="bg-single-campaign">
       <div class="container">
         <div class="row">
           <div class="single-blog campaign-single">
             <div class="row" id="main-content">
              <div class="col-md-8">
               <div class="causes-single">
                <div class="causes-list-box" style="margin-bottom: 30px;    direction: ltr">
                   <div style="box-shadow: 0 0.3125rem 1rem -0.1875rem rgba(0,0,0,.2); padding: 15px;">

<br>
    

         <div class="container">
              
          <!-- Single Payment Form -->
         <form id="donate-form" action="/donate/3491" method="post">
           <input type="hidden" name="_token" value="C0Or7ehljo6LZgFSA0uweSQ9lDYhMoJNHdH0c4Vo">                  <input type="hidden" name="recaptcha" class="recaptcha" id="recaptcha">
           <input type="hidden" name="camp_id" value="3491">
           <input type="hidden" name="ref_id" value="-1">
           <input type="hidden" name="amount" id="amount" value="0">
           <input type="hidden" name="waqf_amount" id="waqf_amount" value="0">
         <div style="height: 1px; width: 100%; background-color: #e5e5e5; margin-bottom: 25px;"></div>
         <div class="form-group row">
           <label for="rm" class="col-sm-3 col-form-label">Amount - RM</label>
         <div class="col-sm-9">
          <input class="form-control" id="rm" type="number" step="any" min="3" required placeholder="RM">
         </div>
         </div>
        
        <div class="form-group row">
          <label for="name" class="col-sm-3 col-form-label">Donor Name</label>
        <div class="col-sm-5">
          <input class="form-control" name="name" id="name" type="text" required placeholder="Donor Name" value="">
        </div>
        <div class="col-sm-4" style="padding-top: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="checkbox" class="form-check-input" name="anonymous" id="anonymous" value="1">
         <label class="form-check-label" for="anonymous">hide my name</label>
        </div>
        </div>
        <div class="form-group row">
         <label for="email" class="col-sm-3 col-form-label">Contact Info</label>
        <div class="col-sm-5">
          <input class="form-control" name="email" id="email" type="email" required placeholder="Donor Email" value="" style="margin-bottom: 10px;">
        </div>
        <div class="col-sm-4">
          <input class="form-control" name="phone" type="tel" required placeholder="Donor Phone" value="">
        </div>
        </div>
        <div style="height: 1px; width: 100%; background-color: #e5e5e5; margin-bottom: 25px; margin-top: 25px;"></div>
       
        <div class="form-group row">
          <label for="comment" class="col-sm-3 col-form-label">Comment</label>
        <div class="col-sm-9">
           <textarea class="form-control" id="comment" name="comment" placeholder="Leave comment - optional"></textarea>
        </div>
        </div>
       
       <div class="form-group row">
         <label class="col-sm-3 col-form-label"></label>
       <div class="col-sm-9">
       <div class="cc-selector">
         <input checked="checked" id="paypal" type="radio" name="payment_gateway" value="paypal" />
         <label class="drinkcard-cc paypal" for="paypal"></label>
         <input id="billplz" type="radio" name="payment_gateway" value="billplz" />
         <label class="drinkcard-cc billplz" for="billplz"></label>
         
       </div>
       </div>
       </div>
       
        <div class="form-group row">
         <label class="col-sm-3 col-form-label"></label>
        <div class="col-sm-9">
          <input type="checkbox" class="form-check-input" required id="refund_agreement" value="1" checked>
          <label class="form-check-label" for="refund_agreement">I Agree to  
          <a href="#" data-toggle="modal" data-target="#RefundPolicy" style="color:#A52A2A;">Return &amp; Refund Policies</a>
          </label>
          </div>
          </div>
          <div class="form-group row">
          <label class="col-sm-3 col-form-label"></label>
          <div class="col-sm-9">
           <button class="btn btn-success btn-block" id="btn-donate" type="submit" form="donate-form" style="background:#DAA520;">Donate Now</button>
          </div>
          </div>
          </form>
          </section>
         <!-- End Single Payment Form -->


                                                 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection


                                    