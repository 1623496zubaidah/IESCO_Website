@extends('frontend.master')

@section('content')


    <form role="form" action="{{ action('StripeController@handlePost', [$project->id]) }}" method="POST">


        <div class="container">


            <div class="container">
                {{-- <a href="/" class="btn btn-dark mb-4">Go Back</a> --}}
                <div class="row gutters">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="account-settings">
                                    <div class="user-profile">
                                        <div class="user-avatar p-3">
                                            <img src="/storage/projects/{{ $project->photo }}" class="img-thumbnail"
                                                salt="Maxwell Admin">
                                        </div>
                                        <h5 class="user-name">{{ $project->title }}
                                        </h5>
                                        <h6 class="user-email">{{ $project->desc }}
                                        </h6>
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
                                        <h3 class="mb-5 text-center text-primary">Payment Details</h3>
                                    </div>


                                    @csrf
                                    <input type="hidden" name="_method" value="PATCH">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="Name">Name</label>
                                            <input id="name" type="text" class="form-control" name="name" placeholder=" "
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">phone number</label>
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder=" "
                                                required>
                                        </div>
                                    </div>





                                    <div class="col">
                                        <div class="form-group">
                                            <input class="form-control" name="amount" type="number" placeholder="$"
                                                id="amount" required>
                                        </div>
                                    </div>
                                    {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <div id="paypal-button-container"></div>
                                </div>
                            </div> --}}


                                    {{-- <input type="number" placeholder="How much" id="myInput"> --}}

                                    <!-- Set up a container element for the button -->

                                    <div class="col" id="paypal-button-container"></div>
                                    <!-- Include the PayPal JavaScript SDK -->
                                    <script
                                                                        src="https://www.paypal.com/sdk/js?client-id=AWxHr7Z_WC4_UfZoozWhxNAz_SjOXfIg-EofQKvrpBBgoCzZe9wVQ-09YRdEhGvE28l-C_cd2LsMATmW">
                                    </script>

                                    <script>
                                        // Render the PayPal button into #paypal-button-container
                                        paypal.Buttons({
                                            // Set up the transaction
                                            createOrder: function(data, actions) {
                                                var amount = document.getElementById("amount").value;
                                                var name = document.getElementById("name").value;
                                                var phone = document.getElementById("phone").value;
                                                return actions.order.create({
                                                    purchase_units: [{
                                                        amount: {
                                                            value: amount
                                                        }
                                                    }]
                                                });
                                            },

                                            // Finalize the transaction
                                            onApprove: function(data, actions) {
                                                return actions.order.capture().then(function(details) {
                                                    // Show a success message to the buyer

                                                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                                                });
                                            }


                                        }).render('#paypal-button-container');
                                    </script>
                                </div>





                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div>
    </form>





@endsection
