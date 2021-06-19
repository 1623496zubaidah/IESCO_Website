@extends('layouts.admin')
@extends('partials.menu')
@section('content')


<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.project.title_singular') }}
     </div>

     <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.id') }}
                        </th>
                        <td>
                            {{ $project->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.title') }}
                        </th>
                        <td>
                            {{ $project->title }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.targeted') }}
                        </th>
                        <td>
                            {{ $project->targeted }}
                        </td>
                    </tr>

                    <tr>
                       <th>
                            {{ trans('cruds.project.fields.desc') }}
                        </th>
                        <td>
                            {{ $project->desc}}
                        </td>
                    </tr>

                     <tr>
                        <th>
                            {{ trans('cruds.project.fields.photo') }}
                        </th>
                        <td>
                            {{ $project->photo }}
                        </td>
                    </tr>
                    
                    </tbody>
                    </table>
              
           
      </div> 

       <a style="margin-top:20px; color:white; font-size:16px!important; background-color:grey!important;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
       </div>
     

@endsection