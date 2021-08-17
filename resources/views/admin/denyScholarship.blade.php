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
                            @foreach ($approved as $key => $scholarship)
                                @if ($scholarship->approved == 'deny')



                                    <tr data-entry-id="{{ $scholarship->id }}" class="text-capitalize">
                                        <td>{{ $scholarship->first_name ?? '' }}</td>
                                        <td>{{ $scholarship->second_name ?? '' }}</td>
                                        <td>{{ $scholarship->gender ?? '' }}</td>
                                        <td>{{ $scholarship->nationality ?? '' }}</td>
                                        <td>{{ $scholarship->email ?? '' }}</td>


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

                                        </td>
                                        <td class="text-capitalize">



                                            <form action="{{ action('GeneralController@delete', [$scholarship->id]) }}"
                                                method="POST" enctype="multipart/form-data"> @csrf

                                                <input type="hidden" name="_method" value="DELETE">


                                                <input type="submit" class="btn btn-primary btn-sm btn-block" value="Delete"
                                                    style="background-color:#d00a0a!important; border-color:#505050; color:white!important;">
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
