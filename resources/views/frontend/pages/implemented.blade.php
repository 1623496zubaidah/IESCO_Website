@extends('frontend.master')

@section('content')
    @if (count($projects) > 0)

        <div class="container">
            {{-- {{ $projects }} --}}

            <div class="row">
                @foreach ($projects as $project)
                    <a href="/projects/{{ $project->id }}">
                        <div class="col my-2 ml-5">
                            <div class="card" style="width: 18rem; height: 20rem; color:black">
                                <img class="card-img-top rounded img-thumbnail mw-100"
                                    src="/storage/projects/{{ $project->photo }}" style="height: 200px; alt="">
                                                                                        {{-- <img class="card-img-top rounded img-thumbnail mw-100" src="{{ $project->photo }}"
                                    style="height: 200px" ; alt=""> --}}
                                                                                        <div class=" card-body ">
                                                                                            <h4 class=" card-title
                                    text-truncate">{{ $project->title }}
                                </h4>
                                <p class="card-text text-truncate">
                                    {{ $project->desc }} </p>
                            </div>
                        </div>
            </div>
            </a>
    @endforeach


    {{-- <div class="col-sm" style="border:1px solid #333">Equal Width Stack</div>
                <div class="col-sm" style="border:1px solid #333">Equal Width Stack</div>
                <div class="col-sm" style="border:1px solid #333">Equal Width Stack</div> --}}

    </div>

    </div>
    <div class="d-flex justify-content-center">
        {{ $projects->links() }}
    </div>

    @endif
@endsection
