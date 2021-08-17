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

    </style>

    <div class="card">
        <div class="card-header">
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12 ">
                    
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
                                <th>Profile</th>
                                <th>Status</th>
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
                                     
                                        <td class="text-capitalize">
                                            <div class="portfolio-info">

                                                <a class="btn btn-xs btn-primary"
                                                    style="background-color:#A52A2A!important; border-color:#A52A2A; color:white!important;"
                                                    href="{{ '/admin/scholarships/' . $scholarship->id }} ">

                                                    {{ trans('global.view') }}
                                                </a>
                                                
                                                <a class="btn btn-xs btn-warning text-white"
                                                    style="background-color:#A52A2A!important;border-color:#A52A2A!important; color:white!important;"
                                                    href="{{ url('download/' . $scholarship->id) }}">
                                                    Download files
                                                </a>

                                        </td>
                                        <td class="text-capitalize">

                                            <form action="{{ action('GeneralController@approve', [$scholarship->id]) }}"
                                                method="POST" enctype="multipart/form-data"> @csrf

                                                <input type="hidden" name="_method" value="PATCH">


                                                <input type="submit" class="btn btn-primary btn-sm btn-block"
                                                    style="background-color:grey!important; border-color:grey; color:white!important;"
                                                    value="Approve">
                                            </form>

                                            <form action="{{ action('GeneralController@deny', [$scholarship->id]) }}"
                                                method="POST" enctype="multipart/form-data"> @csrf

                                                <input type="hidden" name="_method" value="PATCH">


                                                <input type="submit" class="btn btn-primary btn-sm btn-block" value="Deny"
                                                    style="background-color:#A52A2A!important; border-color:#A52A2A; color:white!important;">
                                            </form>

                                        </td>

                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>

                    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
                @endsection
                @include('include.datatablesscript', ['para' => ['delete' => 'project_delete', 'route' => "scholarships/destroy", 'class' => '.datatable-Scholarships:not(.ajaxTable)']])
