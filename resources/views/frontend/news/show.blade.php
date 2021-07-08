@extends('frontend.master')
{{-- @extends('partials.menu') --}}
@section('content')

    <div class="container">
        <a href="/organization-news" class="btn btn-dark mt-4">Go Back</a>
        <br><br><br>

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img class="w-100" src="{{ asset('storage/photos/' . $new->photo) }}">

                </div>


                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3 class="text-center" style="font-weight: bold">{{ $new->title }}</h3>

                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">Description</h5>
                            <p class="card-text">{{ $new->desc }}</p>

                        </div>
                    </div>
                    {{-- <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">Phone Number</h5>
                            <p class="card-text">{{ $project->phone }}</p>

                        </div>
                    </div> --}}
                    {{-- <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">Send your CV to this Email</h5>
                            <p class="card-text">{{ $project->email }}</p>

                        </div>
                    </div> --}}

                </div>
            </div>

        </div>





    </div>
    <br><br><br><br>


@endsection
