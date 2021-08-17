@extends('frontend.master')

@section('content')
<br><br>
    @if (count($projects) > 0)

        <div class="container" data-aos="fade-up">

            <div class="row">
               @foreach ($projects as $project)
                 @if ($project->published == 1)
                       <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                            <div class="card" style="width: 18rem; height: 20rem; color:black">
                                <img class="card-img-top rounded img-thumbnail mw-100"
                                    src="/storage/projects/{{ $project->photo }}" style="height: 200px;" alt="">
                                     
                                         <div class=" card-body ">
                                          <h4 class=" card-title text-truncate" style="color:#A52A2A;"><a href="{{ url('projects/' . $project->id) }}" style="color:#A52A2A;">{{ $project->title }}</a></h4>
                                          <p class="card-text text-truncate">{{ $project->desc }} </p>
                                            </div>
                                          </div>
                                      </div>
                                     

                                        @endif
                                     @endforeach
                                    </div>
                                    </div>

                         

    <div class="d-flex justify-content-center">
        {{ $projects->links() }}
    </div>

    @endif
    <br><br>
@endsection
