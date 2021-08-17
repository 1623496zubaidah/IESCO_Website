@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-2 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar p-3">
                                    <img src="{{ asset('/storage/photos/'. $scholarship->photo)  ?? ''}}" class="img-thumbnail"
                                        salt="Maxwell Admin">
                                </div>
                                <h5 class="user-name">{{ $scholarship->first_name }} {{ $scholarship->last_name }}</h5>
                                <h6 class="user-email">{{ $scholarship->email }}</h6>
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
                                <h6 class="mb-2 text-primary"style="color:#A52A2A!important;">Personal Details</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control" id="fullName"
                                        placeholder="{{ $scholarship->first_name . ' ' . $scholarship->second_name . ' ' . $scholarship->last_name }}"
                                        value="" readonly>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="eMail">Email</label>
                                    <input type="email" class="form-control" id="eMail"
                                        placeholder="{{ $scholarship->email }}" value="" readonly>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone"
                                        placeholder="{{ $scholarship->phone_no }}" value="" readonly>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="website">Nationality</label>
                                    <input type="text" class="form-control" id="nationality"
                                        placeholder="{{ $scholarship->nationality }}" value="" readonly>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="website">Marital Status</label>
                                    <input type="text" class="form-control" id="marital_status"
                                        placeholder="{{ $scholarship->marital_status }}" value="" readonly>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="website">Application Status</label>
                                    <input type="text" class="form-control" id="marital_status"
                                        placeholder="{{ $scholarship->approved }}" value="" readonly>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="website">Address</label>
                                    <input type="text" class="form-control" id="address"
                                        placeholder="{{ $scholarship->address }}" value="" readonly>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="website">Files</label>
                                    <a class="form-control btn btn-outline-primary" id="marital_status"
                                        style=" background-color:rgb(169,169,169)!important; border-color:#808080; color:white!important;"
                                        href="{{ url('download/' . $scholarship->id) }}">
                                        Download files
                                    </a>
                                </div>
                            </div>


                        </div>

                        <div class="row gutters">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12" style="margin-left:200px!important;">
                                <div class="text-right">
                                    @if ($scholarship->approved == 'approved' || $scholarship->approved == 'pending')


                                        <form action="{{ action('GeneralController@approve', [$scholarship->id]) }}"
                                            method="POST" enctype="multipart/form-data"> @csrf

                                            <input type="hidden" name="_method" value="PATCH">


                                            <input type="submit" class="btn btn-primary btn-sm btn-block mb-2"
                                                style="background-color:#DAA520!important; border-color:#505050; color:white!important;"
                                                value="Approve">
                                        </form>

                                        <form action="{{ action('GeneralController@deny', [$scholarship->id]) }}"
                                            method="POST" enctype="multipart/form-data"> @csrf

                                            <input type="hidden" name="_method" value="PATCH">


                                            <input type="submit" class="btn btn-primary btn-sm btn-block mb-2" value="Deny"
                                                style="background-color:#A52A2A!important; border-color:#505050; color:white!important;">
                                        </form>
                                    @endif
                                    <form action="{{ action('GeneralController@delete', [$scholarship->id]) }}"
                                        method="POST" enctype="multipart/form-data"> @csrf

                                        <input type="hidden" name="_method" value="DELETE">


                                        <input type="submit" class="btn btn-danger btn-sm btn-block mb-2" value="Delete"
                                            style="color:white!important;">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
