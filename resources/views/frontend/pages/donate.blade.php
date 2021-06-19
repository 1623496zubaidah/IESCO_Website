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
     {{--       <ul class="nav nav-tabs" role="tablist">
             <li class="nav-item active">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#one-time-div" role="tab" aria-expanded="true" style="color:#A52A2A!important;">One time</a>
             </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#recurring-div" role="tab" style="color:#A52A2A!important;">Monthly donation</a>
             </li> 
            </ul>  --}}

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
         {{-- <div class="form-group row">
          <label for="waqf-list" class="col-sm-3 col-form-label">Support Ensany
            <a class="btn-waqf-help" href="#" data-toggle="tooltip" data-placement="bottom" title="Any given Sadaqah will contribute in supporting Ensany’s platform development and relief efforts for the people in need, through humanitarian campaigns." onclick="event.preventDefault()">( i )</a>
           </label>
          <div class="col-sm-5" style="margin-bottom: 10px;">
            <select id="waqf-list" class="form-control" onchange="set_waqf()">
             <option value="">-- Select Amount --</option>
             <option value="20">RM20</option>
             <option value="100">RM100</option>
             <option value="200">RM200</option>
             <option value="400">RM400</option>
            </select>
          </div>
          <div class="col-sm-4">
            <input class="form-control" id="waqf_rm" type="number" step="any" min="3" placeholder="RM">
                                                                                                     </div>
         </div> --}}
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
        {{-- <div class="form-group row">
          <label for="gift_name" class="col-sm-3 col-form-label">gift your donation</label>
        <div class="col-sm-9">
          <input class="form-control" name="gift_name" id="gift_name" type="text" placeholder="Gifted to - Name (optional)">
        </div>
        </div> --}}
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


 {{-- </div>
                                            <div class="tab-pane fade" id="recurring-div" role="tabpanel" aria-labelledby="profile-tab">
                                                <!-- Recurring Payment Form -->
                                                <form id="recurring-form" action="/recurring/3491" method="post">
                                                    <input type="hidden" name="_token" value="C0Or7ehljo6LZgFSA0uweSQ9lDYhMoJNHdH0c4Vo">                                                    <input type="hidden" name="recaptcha" class="recaptcha" id="recaptcha">
                                                    <input type="hidden" name="camp_id" value="3491">
                                                    <input type="hidden" name="ref_id" value="-1">
                                                    <input type="hidden" name="amount" id="rec-amount" value="0">
                                                    <div style="height: 1px; width: 100%; background-color: #e5e5e5; margin-bottom: 25px;"></div>

                                                    <div class="form-group row">
                                                        <label for="rec-levels" class="col-sm-3 col-form-label">Amount</label>
                                                        <div class="col-sm-5">
                                                            <select id="rec-levels" onchange="set_recurring_level()" class="form-control">
                                                                <option value="">Amount</option>
                                                                <option value="10">RM10</option>
                                                                <option value="30">RM30</option>
                                                                <option value="50">RM50</option>
                                                                <option value="100">RM100</option>
                                                                <option value="500">RM500</option>
                                                                <option value="1000">RM1000</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                                                                                            <input class="form-control" id="rec-rm" type="number" step="any" min="3" required placeholder="RM">
                                                                                                                    </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="rec-name" class="col-sm-3 col-form-label">Donor Name</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" id="rec-name" name="name" type="text" required placeholder="Donor Name" value="zubaidah Mohammed">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="rec-email" class="col-sm-3 col-form-label">Donor Email</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" id="rec-email" name="email" type="email" required placeholder="Donor Email" value="zubaida_mohamed2007@yahoo.com">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="rec-phone" class="col-sm-3 col-form-label">Donor Phone</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" name="phone" id="rec-phone" type="tel" required placeholder="Donor Phone" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label"></label>
                                                        <div class="col-sm-9" style="padding-top: 5px;">
                                                            <input type="checkbox" class="form-check-input" name="anonymous" id="rec-anonymous" value="1">
                                                            <label class="form-check-label" for="rec-anonymous">hide my name</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="rec-comment" class="col-sm-3 col-form-label">
                                                            Leave comment - optional
                                                        </label>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control" name="comment" id="rec-comment" placeholder="Leave comment - optional"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label"></label>
                                                        <div class="col-sm-9">
                                                            <input type="checkbox" class="form-check-input" required id="rec_refund_agreement" value="1" checked>
                                                            <label class="form-check-label" for="rec_refund_agreement">
                                                                I Agree to  <a href="#" data-toggle="modal" data-target="#RefundPolicy" style="color:#A52A2A;">
                                                                    Return &amp; Refund Policies
                                                                </a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label"></label>
                                                        <div class="col-sm-9">
                                                            <button class="btn btn-success btn-block" id="btn-recurring" style="margin-top: 10px;" type="submit" form="recurring-form" style="background:#DAA520;">Donate Now</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- End Recurring Payment Form --> --}}
                                                 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection

<!-- Paypal Payment -->
{{-- 
<div id="smart-button-container">
      <div style="text-align: center;">
        <div style="margin-bottom: 1.25rem;">
          <p>Infaq Ramadan _ IESCO Malaysia </p>
          <select id="item-options"><option value="For one Family one week " price="55">For one Family one week  - 55 USD</option><option value="For one person " price="15">For one person  - 15 USD</option><option value="For one family for one month" price="270">For one family for one month - 270 USD</option></select>
          <select style="visibility: hidden" id="quantitySelect"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option></select>
        </div>
      <div id="paypal-button-container"></div>
      </div>
    </div>
    <script src="https://www.paypal.com/sdk/js?client-id=ASSVtql00m25gEZYXBSQZKVCidISkAN5XU17Fysd0GZf0tOAneLuFXrmuBLQRHCDqjLBgrqQuuZFuAjo&currency=USD" data-sdk-integration-source="button-factory"></script>
    <script>
      function initPayPalButton() {
        var shipping = 0;
        var itemOptions = document.querySelector("#smart-button-container #item-options");
    var quantity = parseInt(50);
    var quantitySelect = document.querySelector("#smart-button-container #quantitySelect");
    if (!isNaN(quantity)) {
      quantitySelect.style.visibility = "visible";
    }
    var orderDescription = 'Infaq Ramadan _ IESCO Malaysia ';
    if(orderDescription === '') {
      orderDescription = 'Item';
    }
    paypal.Buttons({
      style: {
        shape: 'rect',
        color: 'gold',
        layout: 'vertical',
        label: 'paypal',
        
      },
      createOrder: function(data, actions) {
        var selectedItemDescription = itemOptions.options[itemOptions.selectedIndex].value;
        var selectedItemPrice = parseFloat(itemOptions.options[itemOptions.selectedIndex].getAttribute("price"));
        var tax = (0 === 0) ? 0 : (selectedItemPrice * (parseFloat(0)/100));
        if(quantitySelect.options.length > 0) {
          quantity = parseInt(quantitySelect.options[quantitySelect.selectedIndex].value);
        } else {
          quantity = 1;
        }

        tax *= quantity;
        tax = Math.round(tax * 100) / 100;
        var priceTotal = quantity * selectedItemPrice + parseFloat(shipping) + tax;
        priceTotal = Math.round(priceTotal * 100) / 100;
        var itemTotalValue = Math.round((selectedItemPrice * quantity) * 100) / 100;

        return actions.order.create({
          purchase_units: [{
            description: orderDescription,
            amount: {
              currency_code: 'USD',
              value: priceTotal,
              breakdown: {
                item_total: {
                  currency_code: 'USD',
                  value: itemTotalValue,
                },
                shipping: {
                  currency_code: 'USD',
                  value: shipping,
                },
                tax_total: {
                  currency_code: 'USD',
                  value: tax,
                }
              }
            },
            items: [{
              name: selectedItemDescription,
              unit_amount: {
                currency_code: 'USD',
                value: selectedItemPrice,
              },
              quantity: quantity
            }]
          }]
        });
      },
      onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
          alert('Transaction completed by ' + details.payer.name.given_name + '!');
        });
      },
      onError: function(err) {
        console.log(err);
      },
    }).render('#paypal-button-container');
  }
  initPayPalButton();
    </script> --}}
                                    