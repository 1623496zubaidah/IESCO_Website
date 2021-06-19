<style>
body{
    background-color: #fff;
}
    .card-header {
        background-color: #fff;
        color: black; 
        font-weight: bold; 
        font-family: system-ui;
        text-transform: uppercase; 
    }
    .card-body{
        text-transform: uppercase; 
        font-family: system-ui;
        background-color: #E6E6FA;
    }

.card .btn{
background-color:#515355!important;
    color: white!important;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

a, .card :hover{
border-color: white!important;
color:white!important;
}
    </style>
@extends('layouts/admin')
@section('content') 



    <div class="card">
    <div class="card-header">
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12 ">
            <a class="btn btn-success text-capitalize font-weight-bold"  style="color:white; font-size:16px!important; background-color:#515355!important;"  href="{{ route("admin.news.create") }}">
                <i class="fas fa-plus mr-2">Add News</i>  
            </a>
        </div>
    </div>

<div class="card-body" style="background-color:white!important;">
        <div class="table-responsive">
            <table class=" table table-bordered text-center table-striped table-hover datatable datatable-Event">
                <thead>
                    <tr>
                        <th>News ID</th>
                        <th>News Title</th>
                        <th>Desc</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($news as $key => $news)
                        <tr data-entry-id="{{ $news->id }}" class="text-capitalize">
                            <td>{{ $news->id ?? '' }}</td>
                            <td>{{ $news->title ?? '' }}</td>
                            <td>{{ $news->desc ?? '' }}</td>
                            
                            <td class="text-capitalize">
                              <div class="portfolio-info">
                             
                                    <a class="btn btn-xs btn-primary"  style="background-color:#A0A0A0!important; border-color:#A0A0A0; color:white!important;"  href="{{('/admin/news/'). $news->id . '/show'}} ">
                                    
                                        {{ trans('global.view') }}
                                    </a>
                               

                                
                                    <a class="btn btn-xs btn-warning text-white" style="background-color:#808080!important; border-color:#808080; color:white!important;" href="{{'/admin/news/' . $news->id . '/edit'}}">
                                    {{ trans('global.edit') }} 
                                    </a>
                                

                                
                                    <form action="{{route('admin.news.destroy', $news->id) }}" 
                                        method="POST" 
                                        onsubmit="return confirm('{{ $news->news_count || $news->news ? '' : trans('global.areYouSure') }}');" style="display: inline-block;"
                                    >
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger"  style="background-color:#505050!important; border-color:#505050; color:white!important;" value="{{ trans('global.delete') }}">
                                    </form>
                            
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

            <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

            @endsection
{{-- 
            @datatablescript(['para' => ['delete' => 'project_delete', 'route' => "projects/destroy", 'class' => '.datatable-Project:not(.ajaxTable)']]) --}}

