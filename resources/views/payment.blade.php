@extends('frontend.master')

@section('content')

<br><br>
        <div class="container">


            <div class="container">
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
                                        <h3 class="mb-5 text-center text-primary" style="color:#A52A2A!important;">Payment Details</h3>
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




                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder=" "
                                                required>
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="phone">Amount</label>
                                            <input class="form-control" name="amount" type="number" placeholder="$"
                                                id="amount" required>
                                        </div>
                                    </div>

                                     <div class="col">
                                         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 justify-content-center">
                                             <input class="btn btn-success btn-lg btn-block" type="submit"
                                                 value="Donate Now" style="background-color:#A52A2A!important; border-color:#A52A2A!important;margin-left:165px!important;">
                                         </div>
                                     </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div>
    </form>
    <br><br><br>

@endsection
