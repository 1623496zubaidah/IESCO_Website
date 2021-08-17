@extends('frontend.master')
@section('content')

        <br><br><br> 

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img class="w-100" src="{{ asset('storage/projects/' . $project->photo) }}">

                </div>


                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3 class="text-center" style="font-weight: bold">{{ $project->title }}</h3>

                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">Description</h5>
                            <p class="card-text">{{ $project->desc }}</p>

                             
                             <a href="/donation-payment/{{ $project->id }}"> <input type="submit"
                              href="/donation-payment/{{ $project->id }}" class="btn  btn-outline-dark" style="background-color:#A52A2A!important;color:white" value="Donate Now"></a>
                            
                        </div>
                    </div>

                </div>
            </div>

          

         @if (!Auth::guest())
 

            @if (Auth::user()->id == $project->user_id || Auth::user()->email == 'ibrahim@example.com')


                {!! Form::open(['action' => ['App\Http\Controllers\projectsController@destroy', $project->id], 'method' => 'project', 'class' => 'pull-right text-center']) !!}
                <a href="/projects/{{ $project->id }}/edit" class="btn btn-primary">Edit</a>
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                {!! Form::close() !!}
            @endif
         @endif

      </div>
    <br><br><br><br>


@endsection
