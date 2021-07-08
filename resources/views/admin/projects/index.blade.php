<style>
    body {
        background-color: #fff;
    }

    .card-header {
        background-color: #fff;
        color: black;
        font-weight: bold;
        font-family: system-ui;
        text-transform: uppercase;
    }

    .card-body {
        text-transform: uppercase;
        font-family: system-ui;
        background-color: #E6E6FA;
    }

    .card .btn {
        background-color: #515355 !important;
        color: white !important;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

    a,
    .card :hover {
        border-color: white !important;
        color: white !important;
    }

</style>
@extends('layouts.admin')
@section('content')


    @if (count($projects) > 0)

        <div class="card">
            <div class="card-header">
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12 ">
                        <a class="btn btn-success text-capitalize font-weight-bold"
                            style="color:white; font-size:16px!important; background-color:#515355!important;"
                            href="{{ route('admin.projects.create') }}">
                            <i class="fas fa-plus mr-2">Add Project</i>
                        </a>
                    </div>
                </div>

                <div class="card-body" style="background-color:white!important;">
                    <div class="table-responsive">
                        <table
                            class=" table table-bordered text-center table-striped table-hover datatable datatable-Event">
                            <thead>
                                <tr>
                                    <th>Project ID</th>
                                    <th>Project Title</th>
                                    <th>Target People</th>
                                    <th>Project Type</th>
                                    <th></th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $key => $project)
                                    @if ($project->published == false)

                                        <tr data-entry-id="{{ $project->id }}" class="text-capitalize">
                                            <td>{{ $project->id ?? '' }}</td>
                                            <td>{{ $project->title ?? '' }}</td>
                                            <td>{{ $project->targeted ?? '' }}</td>
                                            <td>{{ $project->type ?? '' }}</td>
                                            <td> <img src="/storage/projects/{{ $project->photo }}"
                                                    style="width:80px!important; height:50px!important;"></td>




                                            <td class="text-capitalize">
                                                <div class="portfolio-info">

                                                    <a class="btn btn-xs btn-primary"
                                                        style="background-color:#A0A0A0!important; border-color:#A0A0A0; color:white!important;"
                                                        href=" {{ '/admin/projects/' . $project->id }} ">

                                                        {{ trans('global.view') }}
                                                    </a>



                                                    <a class="btn btn-xs btn-warning text-white"
                                                        style="background-color:#808080!important; border-color:#808080; color:white!important;"
                                                        href="{{ '/admin/projects/' . $project->id . '/edit' }}">
                                                        {{ trans('global.edit') }}
                                                    </a>



                                                    <form action="{{ route('admin.projects.destroy', $project->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('{{ $project->projects_count || $project->project ? '' : trans('global.areYouSure') }}');"
                                                        style="display: inline-block;">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="submit" class="btn btn-xs btn-danger"
                                                            style="background-color:#505050!important; border-color:#505050; color:white!important;"
                                                            value="{{ trans('global.delete') }}">
                                                    </form>

                                                    <form
                                                        action="{{ action('GeneralController@publishProject', [$project->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="PATCH">


                                                        <input type="submit" class="btn btn-xs btn-danger"
                                                            style="background-color:#049a1b!important; border-color:#505050; color:white!important;"
                                                            value="Publish">
                                                    </form>

                                            </td>

                                        </tr>
                                    @endif

                                @endforeach
                            </tbody>
                        </table>

                        <div class="col-md-12" style="color:black!important;">
                            {{ $projects->links() }}

                            <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    @endif

@endsection
{{-- @datatablescript(['para' => ['delete' => 'project_delete', 'route' => "projects/destroy", 'class' => '.datatable-Project:not(.ajaxTable)']]) --}}
