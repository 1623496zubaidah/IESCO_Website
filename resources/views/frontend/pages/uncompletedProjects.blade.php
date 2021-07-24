@extends('frontend.master')

@section('content')
    @if (count($projects) > 0)

        <div class="container">
            {{-- {{ $projects }} --}}

            <div class="row">
                @foreach ($projects as $project)
                    <div class="card mr-5 mb-2 mt-2" style="width: 18rem; height: 27rem; color:black">
                        <div class="text-center mt-2"><img class="card-img-top rounded img-thumbnail mw-100 c"
                                src="/storage/projects/{{ $project->photo }}" alt="Card image cap"
                                style="height: 200px; width:300px"></div>
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title">Raised:<span
                                                class="budgetsNumber">{{ $project->paidBudget }}RM<span>
                                        </h5>

                                    </div>
                                    <div class="col">
                                        <h5 class="card-title">Goals:<span class="budgetsNumber">
                                                RM{{ $project->neededBudget }}<span>
                                        </h5>

                                    </div>
                                </div>
                                <div>
                                    <div class="progress" style=" height: 35px;">
                                        <div class="progress-bar progress-bar-animated progress-bar-striped bg-success"
                                            role="progressbar"
                                            style=" width: {{ $project->percent }}%; background-color:#A52A2A!important;"
                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            {{ $project->percent }}%
                                            {{ $project->percent }}%
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5><a href="{{ url('donation-payment') }}/{{ $project->id }}"
                                    class="card-text text-dark">{{ $project->title }}</h5></a>
                        </div>
                        <div class="card-footer">
                            <a href="{{ url('donation-payment') }}/{{ $project->id }}"> <input type="submit"
                                    href="donation-payment/{{ $project->id }}" class="btn  btn-outline-dark"
                                    style="background-color:#A52A2A!important;color:white" value="Donate Now"></a>
                        </div>
                    </div>
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
