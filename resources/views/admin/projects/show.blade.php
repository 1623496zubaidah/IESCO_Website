@extends('layouts.admin')
{{-- @extends('partials.menu') --}}
@section('content')

    <div class="container">
        <a href="/admin/projects/" class="btn btn-dark mt-4">Go Back</a>
        <br><br><br>

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src="/storage/projects/{{ $project->photo }}" class="img-fluid" alt="">

                </div>


                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3 class="text-center" style="font-weight: bold">{{ $project->title }}</h3>

                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">Description</h5>
                            <p class="card-text">{{ $project->desc }}</p>

                        </div>

                    </div>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">Donation Progress</h5>
                            <div class="progress" style=" height: 35px;">
                                <div class="progress-bar progress-bar-animated progress-bar-striped bg-success"
                                    role="progressbar" style=" width: {{ $project->percent }}%;" aria-valuenow="90"
                                    aria-valuemin="0" aria-valuemax="100">
                                    {{ $project->percent }}%
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">Send your CV to this Email</h5>
                            <p class="card-text">{{ $project->email }}</p>

                        </div>
                    </div> --}}

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
