@extends('frontend.master')
@section('content')


    <style>
        .cardtitle {
            text-transform: uppercase;
            font-weight: bold;
            color: #E44424;
            font-size: 20px;
        }

    </style>
    <br>
    @if (count($news) > 0)

        <div class="container">
            <div class="row">
                @foreach ($news as $new)

                    <div class="card col-md-12 p-3 m-2">
                        <div class="row ">
                            <div class="col-md-4">
                                <img class="w-100" src="{{ asset('storage/photos/' . $new->photo) }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-block">
                                    <h6 class="cardtitle" style="color:#A52A2A;">{{ $new->title }}</h6>
                                    <p class="card-text text-justify">{{ $new->desc }}</p>
                                    <a href="organization-news/{{ $new->id }}" class="btn btn-primary" style="background-color:#A52A2A;border-color:#A52A2A;">Read More...</a>
                                </div>
                            </div>
                        </div>
                    </div><br>
                @endforeach

            </div>
        </div>

    @endif

@endsection
