@extends('frontend.master')
@section('content')

    <div class="container">
        <br>

        <div class="container">

            <div class="row">
            <img class="" src="{{ asset('storage/photos/' . $new->photo) }}" style="width:700px; height:400px;">

                <div class="col-lg-8"><br>
                   
                            <p class="card-text" style="font-size:18px;font-family:serif;">{{ $new->desc }}</p>

                        </div>
                    </div>
                   
                </div>
            </div>

        </div>

    </div>
    <br><br><br><br>


@endsection
