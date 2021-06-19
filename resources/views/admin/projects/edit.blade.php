@extends('layouts.admin')
@extends('partials.menu')
@section('content')

    <style>
    th {
        color: blue!important; /*{{config('styles.frondend.colors.primary')}}; */
    }
    table.table th {
        width: auto;
}
    #user-profile {
        color: blue!important;
        } /* {{config('styles.frondend.colors.primary')}};  } */
    #user-profile-container{
        padding: 10px;
        bottom: 450px;
        text-align: center;
        border-radius: 10px;
        background: white;
    }
    .card{
        padding-top: 20px;
        align-items: center;
    }
    .form-control{
        border: 1px solid black;
    }
    .select-all, .deselect-all{
        border: 1px solid black;
        background: #2dc997;
    }

            textarea{
            resize: none;
        }
        .file-upload-btn {
            width: 100%;
            margin: 0;
            color: white;
            background: white ;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 1px solid #ffc966;;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .file-upload-btn:hover {
            background: grey;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .file-upload-btn:active {
            border: 0;
            transition: all .2s ease;
        }

        .file-upload-content {
            display: none;
            text-align: center;
        }

        .file-upload-input {
            position: absolute;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            outline: none;
            opacity: 0;
            cursor: pointer;
        }

        .image-upload-wrap {
            margin-top: 20px;
            position: relative;
        }

        .image-dropping,
        .image-upload-wrap:hover {
            color: white!important;
            background-color: rgb(233, 231, 231);
            border: 2px dashed #ffc966;
        }
        .image-dropping,
        .image-upload-wrap:hover .drag-text i {
            color: grey;
        }

        .image-dropping,
        .image-upload-wrap:hover .drag-text h3 {
            color: grey;
        }

        .image-title-wrap {
            padding: 0 15px 15px 15px;
            color: #222;
        }

        .drag-text {
            text-align: center;
        }

        .drag-text h3 {
            font-weight: 100;
            text-transform: uppercase;
            color: grey;
            padding: 0 20px;
        }
        .drag-text i {
            font-size: 5rem;
            color: grey;
        }

        .file-upload-image {
            max-height: 300px;
            max-width: 300px;
            margin: auto;
            padding: 20px;
        }

        .remove-image {
            width: 400px;
            margin: 0;
            color: #fff;
            background: #cd4535;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #b02818;
            transition: all .2s ease;
            outline: none;
        }

        .remove-image:hover {
            background: #c13b2a;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .remove-image:active {
            border: 0;
            transition: all .2s ease;
        }

    
</style>


<div class="card">
    <div class="card-header">
<h2>Edit Project</h2>
    </div>

    <div class="card-body">

            <div class="card-body" style="border: 1px solid grey;">
                <form action="{{ route("admin.projects.update", [$project->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- @event_form() --}}

  <!-- name -->
    <div class="form-row col-sm-12" style="font-size:16px;">
        <!-- name -->
        <div class="form-group col-sm-6 {{-- {{ $errors->has('title') ? 'has-error' : '' }}; --}}" style="color:grey;">
            <label for="name">{{ trans('cruds.project.fields.title') }}*</label>
            <input type="text" id="title" name="title" class="form-control" {{-- {{ $errors->has('name') ? 'border-danger' : '' }}" --}} value="{{ old('name', isset($project) ? $project->title : '') }}" required>
          {{--   @if($errors->has('name'))
                <em class="invalid-feedback">
                    {{ $errors->first('name') }}
                </em>
            @endif --}}
            <p class="helper-block">
                {{ trans('cruds.project.fields.title_helper') }}
            </p>
        </div>
       <!-- targeted -->
     <div class="form-group col-sm-6 {{-- {{ $errors->has('title') ? 'has-error' : '' }}; --}}" style="color:grey;">
            <label for="name">{{ trans('cruds.project.fields.targeted') }}*</label>
            <input type="text" id="targeted" name="targeted" class="form-control" {{-- {{ $errors->has('name') ? 'border-danger' : '' }}" --}} value="{{ old('targeted', isset($project) ? $project->targeted : '') }}" required>
          {{--   @if($errors->has('name'))
                <em class="invalid-feedback">
                    {{ $errors->first('name') }}
                </em>
            @endif --}}
            <p class="helper-block">
                {{ trans('cruds.project.fields.targeted_helper') }}
            </p>
        </div>

        <!-- type -->
        <div class="form-group col-sm-6 {{ $errors->has('type') ?     'has-error' : '' }}" style="color:grey;">
            <label for="type">{{ trans('cruds.project.fields.type') }}*</label>
            <select id="type" name="type" class="form-control {{ $errors->has('type') ? 'border-danger' : '' }}">
                <option selected value="">Choose...</option>
                @foreach(App\Project::TYPE as $key => $type)
                     
                <option {{(old('type', isset($project) ? $project->type : '') === $type) ? 'selected' : ''}} value="{{$type}}">
                        {{ $type }}
                    </option>
                @endforeach
            </select>
            @if($errors->has('type'))
                <em class="invalid-feedback">
                    {{ $errors->first('type') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.project.fields.type_helper') }}
            </p>
        </div>
       </div>



        <!-- desc -->
        <div class="form-group col-sm-12{{ $errors->has('desc') ? 'has-error' : '' }}" style="color:grey;">
            <label for="desc">{{ trans('cruds.project.fields.desc') }}*</label>
            <textarea id="desc" name="desc" class="form-control {{ $errors->has('desc') ? 'border-danger' : '' }}"  required rows="6">{{ old('desc', isset($project) ? $project->desc : '') }}</textarea>
            @if($errors->has('desc'))
                <em class="invalid-feedback">
                    {{ $errors->first('desc') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.project.fields.desc_helper') }}
            </p>
        </div>
       </div>

    
        <!-- photo -->
      <div class="file-upload">
        <div class="form-group">
            <div class="image-upload-wrap border ">
                <input class="file-upload-input" type='file' onchange="readURL(this)" accept="image/*" name="photo" />
                <div class="drag-text">
                    <h3>Click or Drag & drop an image</h3>
                    <i class="fa fa-cloud-upload"></i>
                </div>
            </div>
            <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
                <div class="image-title-wrap">
                    <button type="button" onclick="removeUpload()" class="remove-image">
                        <b>Remove</b> <span class="image-title">Uploaded Image</span>
                    </button>
                </div>
            </div>
        </div>


  
       <div class="text-center">
        <input class="btn btn-success w-25" style="font-weight: bold; font-family: system-ui; background-color:grey!important;" type="submit" value="{{ trans('global.update') }}">
      </div>



<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    $('.image-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function () {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function () {
            $('.image-upload-wrap').removeClass('image-dropping');
        });
    </script>

@endsection