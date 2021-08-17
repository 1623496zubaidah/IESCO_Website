@extends('frontend.master')

@section('content')

    <div class="container mt-5">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar p-3">
                                    <img src="https://image.freepik.com/free-photo/people-holding-rubber-heart_1150-18576.jpg"
                                        class="img-thumbnail" salt="Maxwell Admin">
                                </div>
                                <h3 class="user-name">Allah almighty says
                                </h3>
                                <h4 class="user-email">إِنَّ الْمُصَّدِّقِينَ وَالْمُصَّدِّقَاتِ وَأَقْرَضُوا
                                    اللَّهَ قَرْضاً حَسَناً يُضَاعَفُ لَهُمْ وَلَهُمْ أَجْرٌ كَرِيم
                                </h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
           
                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3 class="mb-5 text-center text-primary" style="color:#A52A2A!important;">Fast Donation</h3>
                                    </div>


                                    @csrf
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="Name">Name</label>
                                            <input type="text" class="form-control" name="name" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">phone number</label>
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder=" ">
                                        </div>
                                    </div>
                                    @if (Session::has('success'))
                                        <div class="alert alert-success text-center">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                            <p>{{ Session::get('success') }}</p>
                                        </div>
                                    @endif
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="website">Name on Card</label>
                                            <input class='form-control' size='4' name type='text'>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="website">Card Number</label>
                                            <input autocomplete='off' class='form-control card-num' size='20' type='text'>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="CVC">CVC</label>
                                            <input autocomplete='off' class='form-control card-cvc' placeholder='e.g 415'
                                                size='4' type='text'>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="Amount">Amount</label>
                                            <input autocomplete='off' class='form-control card-num' size='20' type='text'
                                                name="amount">
                                        </div>
                                    </div>

                                    <div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 form-group expiration required'>
                                        <label class='control-label'>Expiration Month</label> <input
                                            class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                    </div>
                                    <div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 form-group expiration required'>
                                        <label class='control-label'>Expiration Year</label> <input
                                            class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                    </div>


                                    <div class="col">
                                        <div class="form-group justify-content-center">
                                            <label class='control-label'>Comments (optional)</label> <textarea
                                                class='form-control card-expiry-year' placeholder=' ' type='text'
                                                name="comment"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="form-group justify-content-center">
                                        <input class="btn btn-success btn-lg btn-block" type="submit" value="Donate Now" style="background-color:#A52A2A!important; border-color:#A52A2A!important;">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='form-row row'>
                <div class='col-md-12 hide error form-group'>
                    <div class='alert-danger alert'>Fill the required fields.</div>
                </div>
            </div>

        </div>
    </form>
  
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script type="text/javascript">
        $(function() {
            var $form = $(".validation");
            $('form.validation').bind('submit', function(e) {
                var $form = $(".validation"),
                    inputVal = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputVal),
                    $errorStatus = $form.find('div.error'),
                    valid = true;
                $errorStatus.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorStatus.removeClass('hide');
                        e.preventDefault();
                    }
                });

          /*      if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-num').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeHandleResponse);
                }
                */
                

            });
/*
            function stripeHandleResponse(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    var token = response['id'];
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }
*/
        });
    </script>

@endsection
