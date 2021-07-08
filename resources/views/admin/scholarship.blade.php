@extends('layouts.admin')
@section('content')


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




    <div class="card">
        <div class="card-header">
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12 ">
                    {{-- <a class="btn btn-success text-capitalize font-weight-bold"  style="color:white; font-size:16px!important; background-color:#515355!important;"  href="{{ route("admin.projects.create") }}">
                <i class="fas fa-plus mr-2">Add Project</i>  
            </a> --}}
                </div>
            </div>

            <div class="card-body" style="background-color:white!important;">
                <div class="table-responsive">
                    <table class=" table table-bordered text-center table-striped table-hover datatable datatable-Event">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Nationality</th>
                                <th>Marital Status</th>
                                <th>Phone No</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($scholarships as $key => $scholarship)
                                <tr data-entry-id="{{ $scholarship->id }}" class="text-capitalize">
                                    <td>{{ $scholarship->first_name ?? '' }}</td>
                                    <td>{{ $scholarship->second_name ?? '' }}</td>
                                    <td>{{ $scholarship->gender ?? '' }}</td>
                                    <td>{{ $scholarship->nationality ?? '' }}</td>
                                    <td>{{ $scholarship->marital_status ?? '' }}</td>
                                    <td>{{ $scholarship->phone_no ?? '' }}</td>
                                    <td>{{ $scholarship->email ?? '' }}</td>
                                    {{-- <td>{{ $project->desc ?? '' }}</td>
                                <td>{{ $project->type ?? '' }}</td>
                                <td>{{ $project->photo ?? '' }}</td> --}}


                                    <td class="text-capitalize">
                                        <div class="portfolio-info">

                                            <a class="btn btn-xs btn-primary"
                                                style="background-color:#A0A0A0!important; border-color:#A0A0A0; color:white!important;"
                                                href="{{ '/admin/scholarship/' . $scholarship->id }} ">

                                                {{ trans('global.view') }}
                                            </a>



                                            <a class="btn btn-xs btn-warning text-white"
                                                style="background-color:#808080!important; border-color:#808080; color:white!important;"
                                                href="{{ '/admin/scholarship/' . $scholarship->id . '/edit' }}">
                                                {{ trans('global.edit') }}
                                            </a>




                                            <form action="{{ route('admin.projects.destroy', $scholarship->id) }}"
                                                method="POST" style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="btn btn-xs btn-danger"
                                                    style="background-color:#30bb11!important; border-color:#808080; color:white!important;"
                                                    value="Approve">
                                            </form>
                                            <form action="{{ route('admin.projects.destroy', $scholarship->id) }}"
                                                method="POST" style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="btn btn-xs btn-danger"
                                                    style="background-color:#bb0a0a!important; border-color:#808080; color:white!important;"
                                                    value="Reject">
                                            </form>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

                @endsection
                {{-- @datatablescript(['para' => ['delete' => 'project_delete', 'route' => "projects/destroy", 'class' => '.datatable-Project:not(.ajaxTable)']]) --}}
