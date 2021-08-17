@extends('frontend.master' , ['page' => 'events_show'])
@section('content')
<style>

    table.table th {
        width: auto;
    }

    #user-profile-container {
        padding: 10px;
        bottom: 450px;
        text-align: center;
        border-radius: 10px;
        background: white;
    }

    .card {
        margin-top: 10px!important;
        height: 450px!important;
        align-items: center;
    }

    .profile-pic {
        max-width: 200px;
        max-height: 200px;
        display: block;
    }

    .file-upload {
        display: none;
    }

    .circle {
        border-radius: 1000px !important;
        overflow: hidden;
        width: 128px;
        height: 128px;
        border: 1px solid rgba(0,0,0,.125);
        background-color: white;
        position: absolute;
        top: -50px;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .p-image {
        position: absolute;
        top: 65px;
        right: 435;
        color: #666666;
        transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
    }

    .p-image:hover {
        transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
    }

    .upload-button {
        font-size: 1.2em;
    }

    .upload-button:hover {
        transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
        color: #999;
    }
</style>


<section id="portfolio" class="portfolio" style="margin-top: 4rem;">
    <div class="container" data-aos="fade-up">
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        <div class="card" style="margin-top:10px;">
                    <!-- profile -->
                          <div class="circle" style="width:160px;height:160px;margin-top:50px;">
                            <!-- User Profile Image -->
                            @if(isset($user->scholarship->photo) && !empty($user->scholarship->photo))
                                <img class="img-thumbnail" salt="Maxwell Admin" src="{{ asset('/storage/photos/'. $user->scholarship->photo)  ?? ''}}" style="position: absolute;">
                                
                            @else
                                <img class="img-thumbnail" salt="Maxwell Admin" src="">
                                <!-- Default Image -->
                                <i class="fa fa-user fa-5x" style="position: absolute;top:30px;left:48px;"></i>
                            @endisset 
                          </div>
                          <div class="p-image" style="top:110px;">
                            <i class="fa fa-camera upload-button"></i>
                             <input class="file-upload" type="file" accept="image/*"/>
                          </div><br>
            <div class="card-body" style="
                        margin-top: 150px;
                        width: 700px;">
                    <div class="mb-2">
                    
                    <div class="tab-content" id="nav-tabContent">
                    

                  
                        {{-- profile Tab --}}
                        <div class="tab-pane fade show active" id="nav-profile" role="tabpanel"
                            aria-labelledby="nav-profile-tab">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>
                                            ID 
                                        </th>
                                        <td>
                                            {{ $user->scholarship->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            First Name
                                        </th>
                                        <td>
                                            {{ $user->scholarship->first_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                           Last Name 
                                        </th>
                                        <td>
                                            {{ $user->scholarship->last_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Email
                                        </th>
                                        <td>
                                            {{ $user->scholarship->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Status
                                        </th>
                                        <td>
                                            {{ $user->scholarship->approved }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        
  </section><!-- End Portfolio Section -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script type="text/javascript">
     
   
        
  </script>
@endsection