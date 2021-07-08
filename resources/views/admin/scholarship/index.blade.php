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
            /* border-color: white !important;
                                                            color: white !important; */
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
                                <th> </th>
                                <th>Approve/Reject</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($scholarships as $key => $scholarship)
                                @if ($scholarship->approved == 'pending')


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
                                                    href="{{ '/admin/scholarships/' . $scholarship->id }} ">

                                                    {{ trans('global.view') }}
                                                </a>



                                                <a class="btn btn-xs btn-warning text-white"
                                                    style="background-color:#808080!important; border-color:#808080; color:white!important;"
                                                    href="{{ '/admin/scholarships/' . $scholarship->id . '/edit' }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                                <a class="btn btn-xs btn-warning text-white"
                                                    style="background-color:#565bb6!important; border-color:#808080; color:white!important;"
                                                    href="{{ url('download/' . $scholarship->id) }}">
                                                    Download files
                                                </a>






                                        </td>
                                        <td class="text-capitalize">

                                            <form action="{{ action('GeneralController@approve', [$scholarship->id]) }}"
                                                method="POST" enctype="multipart/form-data"> @csrf

                                                <input type="hidden" name="_method" value="PATCH">


                                                <input type="submit" class="btn btn-primary btn-sm btn-block"
                                                    style="background-color:#60dd87!important; border-color:#505050; color:white!important;"
                                                    value="Approve">
                                            </form>

                                            <form action="{{ action('GeneralController@deny', [$scholarship->id]) }}"
                                                method="POST" enctype="multipart/form-data"> @csrf

                                                <input type="hidden" name="_method" value="PATCH">


                                                <input type="submit" class="btn btn-primary btn-sm btn-block" value="Deny"
                                                    style="background-color:#e73232!important; border-color:#505050; color:white!important;">
                                            </form>



                                        </td>

                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>

                    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

                @endsection
                {{-- @datatablescript(['para' => ['delete' => 'project_delete', 'route' => "projects/destroy", 'class' => '.datatable-Project:not(.ajaxTable)']]) --}}
