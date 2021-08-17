@extends('frontend.master')
@section('content')


    <head>

        <link href="https://unpkg.com/@coreui/coreui@2.1.16/dist/css/coreui.min.css" rel="stylesheet" />

        @yield('styles')


    </head>


    <style>
        body {
            background: rgb(224,224,224) !important;
        }

        .file-upload-btn {
            background: red !important;
            width: 100%;
            margin: 0;
            color: white !important;
            background: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 1px solid #ffc966;
            ;
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
            border: 10px solid #fff !important;
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
            color: white !important;
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

        h2 {
            color: #A52A2A !important;
        }


        .file-upload-wrap2 {
            margin-top: 20px;
            position: relative;
        }

        .file-dropping,
        .file-upload-wrap2:hover {
            color: grey !important;
            background-color: rgb(233, 231, 231);
            border: 2px dashed #ffc966;
        }

        .file-dropping,
        .file-upload-wrap2:hover .drag-text i {
            color: grey;
        }

        .file-dropping,
        .file-upload-wrap2:hover .drag-text h3 {
            color: grey;
        }

        .file-title-wrap2 {
            padding: 0 15px 15px 15px;
            color: #222;
        }

        .drag-text {
            text-align: center;
        }

        .drag-text h3 {
            font-weight: 100;
            color: grey;
            padding: 0 20px;
        }

        .drag-text i {
            font-size: 5rem;
            color: grey;
        }

        .file-upload-file {
            max-height: 300px;
            max-width: 300px;
            margin: auto;
            padding: 20px;
        }

        .remove-file {
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

        .remove-file:hover {
            background: #c13b2a;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .remove-file:active {
            border: 0;
            transition: all .2s ease;
        }

    </style>


    <section id="hi" class="hi">
        <div class="container" data-aos="fade-up">
            <div class=" display-4 pb-3"
                style="color:#A52A2A!important;text-align:center!important;margin-top:20px!important;"> Scholarship
                Application Form
            </div><br>
            <div class="card-body" style="border: 1px solid grey; width:1050px!important;">
                <form action="{{ action('frontend\ScholarshipController@store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <br>
                    <h2>Personal Information</h2><br>
                    <!-- Full name -->
                    <div class="form-row col-sm-12" style="font-size:16px;">
                        <!-- First Name -->
                        <div class="form-group col-sm-4">
                            <label for="first_name">First Name *</label>
                            <input type="text" id="first_name" name="first_name" class="form-control"
                                value="{{ old('name', isset($scholarship) ? $user->first_name : '') }}" required>
                        </div>

                        <!-- Second Name -->
                        <div class="form-group col-sm-4">
                            <label for="second_name">Second Name *</label>
                            <input type="text" id="second_name" name="second_name" class="form-control"
                                value="{{ old('name', isset($user) ? $user->second_name : '') }}" required>
                        </div>


                        <!-- Last Name -->
                        <div class="form-group col-sm-4">
                            <label for="last_name">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" class="form-control"
                                value="{{ old('name', isset($user) ? $user->last_name : '') }}" required>
                        </div>


                        <!-- Gender -->
                        <div class="form-group col-sm-4 {{ $errors->has('gender') ? 'has-error' : '' }}">
                            <label for="gender">Gender *</label>
                            <select id="gender" name="gender"
                                class="form-control {{ $errors->has('gender') ? 'border-danger' : '' }}">
                                <option selected value="">Choose...</option>
                                @foreach (App\scholarship::TYPE as $key => $type)

                                    <option
                                        {{ old('type', isset($scholarship) ? $scholarship->type : '') === $type ? 'selected' : '' }}
                                        value="{{ $type }}">
                                        {{ $type }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('type'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('type') }}
                                </em>
                            @endif
                        </div>
                        <!-- Nationality -->
                        <div class="form-group col-sm-4 {{ $errors->has('nation') ? 'has-error' : '' }}">
                            <label for="nation">Nationality *</label>
                            <select id="nation" name="nation"
                                class="form-control {{ $errors->has('nation') ? 'border-danger' : '' }}">
                                <option selected value="">Choose...</option>
                                @foreach (App\scholarship::NATION as $key => $nation)

                                    <option
                                        {{ old('type', isset($scholarship) ? $scholarship->nation : '') === $nation ? 'selected' : '' }}
                                        value="{{ $nation }}">
                                        {{ $nation }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('nation'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('nation') }}
                                </em>
                            @endif
                        </div>


                        <!-- Place of birth -->
                        <div class="form-group col-sm-4 {{ $errors->has('place_of_birth') ? 'has-error' : '' }}">
                            <label for="place_of_birth">Place of Birth *</label>
                            <select id="place_of_birth" name="place_of_birth"
                                class="form-control {{ $errors->has('place_of_birth') ? 'border-danger' : '' }}">
                                <option selected value="">Choose...</option>
                                @foreach (App\scholarship::BIRTH_PLACE as $key => $place_of_birth)

                                    <option
                                        {{ old('place_of_birth', isset($scholarship) ? $scholarship->place_of_birth : '') === $place_of_birth ? 'selected' : '' }}
                                        value="{{ $place_of_birth }}">
                                        {{ $place_of_birth }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('place_of_birth'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('place_of_birth') }}
                                </em>
                            @endif
                        </div>

                        <!-- Birth Date -->
                        <div class="form-group col-sm-4">
                            <label for="birth">Date of Birth *</label>
                            <input type="date" id="birth" name="birth" class="form-control"
                                value="{{ old('birth', isset($scholarship) ? $user->birthday : '') }}" required>
                        </div>


                        <!-- Marital status -->
                        <div class="form-group col-sm-4">
                            <label for="marital">Marital Status *</label>

                            <select id="marital_status" name="marital_status"
                                class="form-control {{ $errors->has('marital_status') ? 'border-danger' : '' }}">
                                <option selected value="">Choose...</option>
                                @foreach (App\scholarship::STATUS as $key => $marital_status)

                                    <option
                                        {{ old('marital_status', isset($scholarship) ? $scholarship->marital_status : '') === $marital_status ? 'selected' : '' }}
                                        value="{{ $marital_status }}">
                                        {{ $marital_status }}
                                    </option>
                                @endforeach
                            </select>

                        </div>

                        <!-- Passport NO -->
                        <div class="form-group col-sm-4">
                            <label for="passport">Passport No *</label>
                            <input type="text" id="passport" name="passport" class="form-control"
                                value="{{ old('passport', isset($scholarship) ? $user->passport_no : '') }}" required>
                        </div>


                        <!-- Email -->
                        <div class="form-group col-sm-6">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" class="form-control"
                                value="{{ old('email', isset($scholarship) ? $user->email : '') }}" required>
                        </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                        <!-- Phone No -->
                        <div class="form-group col-sm-4">
                            <label for="phone">Phone No *</label>
                            <input type="text" id="phone" name="phone" class="form-control"
                                value="{{ old('phone', isset($scholarship) ? $user->phone_no : '') }}" required>
                        </div>

                        <!-- Address -->
                        <div class="form-group col-sm-8">
                            <label for="address">Address*</label>
                            <textarea id="address" name="address" class="form-control" required
                                rows="4">{{ old('address', isset($scholarship) ? $scholarship->address : '') }}</textarea>
                            @if ($errors->has('address'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('address') }}
                                </em>
                            @endif
                        </div>
                    </div>

                    <!-- photo -->
                    <div class="file-upload">
                        <div class="form-group">
                            <div class="image-upload-wrap border">
                                <input class="file-upload-input" type='file' onchange="readURL(this)" accept="image/*"
                                    name="photo" />
                                <div class="drag-text">
                                    <h3>Upload Personal Photo</h3>
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
                            <br>
                            <hr>

                            <br>
                            <h2>Academic Information</h2><br>

                            <div class="form-row col-sm-12" style="font-size:16px;">
                                <!-- University Name -->
                                <div class="form-group col-sm-4">
                                    <label for="uni_name">University Name</label>
                                    <input type="text" id="uni_name" name="uni_name" class="form-control"
                                        value="{{ old('uni_name', isset($scholarship) ? $user->uni_name : '') }}"
                                        required>
                                </div>


                                <!-- Education Level -->
                                <div class="form-group col-sm-4">
                                    <label for="edu_level">Education Level</label>
                                    <select id="edu_level" name="edu_level"
                                        class="form-control {{ $errors->has('edu_level') ? 'border-danger' : '' }}">
                                        <option selected value="">Choose...</option>
                                        @foreach (App\scholarship::LEVEL as $key => $level)

                                            <option
                                                {{ old('level', isset($scholarship) ? $scholarship->edu_level : '') === $level ? 'selected' : '' }}
                                                value="{{ $level }}">
                                                {{ $level }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('level'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('level') }}
                                        </em>
                                    @endif
                                </div>

                                <!-- Course -->
                                <div class="form-group col-sm-4">
                                    <label for="course">Course</label>
                                    <input type="text" id="course" name="course" class="form-control"
                                        value="{{ old('course', isset($scholarship) ? $user->course : '') }}">
                                </div>

                                <!-- Major -->
                                <div class="form-group col-sm-4">
                                    <label for="major">Major</label>
                                    <input type="text" id="major" name="major" class="form-control"
                                        value="{{ old('major', isset($scholarship) ? $user->major : '') }}">
                                </div>

                                <!-- Matric No -->
                                <div class="form-group col-sm-4">
                                    <label for="matric">Matric No</label>
                                    <input type="text" id="matric" name="matric" class="form-control"
                                        value="{{ old('matric', isset($scholarship) ? $user->matric_no : '') }}">
                                </div>

                                <!-- CGPA -->
                                <div class="form-group col-sm-4">
                                    <label for="cgpa">CGPA</label>
                                    <input type="text" id="cgpa" name="cgpa" class="form-control"
                                        value="{{ old('cgpa', isset($scholarship) ? $user->cgpa : '') }}">
                                </div>


                                <!-- Total credit hour -->
                                <div class="form-group col-sm-4">
                                <label for="Total_credit">Total credit hour</label>
                                <input type="text" id="Total_credit" name="Total_credit" class="form-control" value="{{ old('Total_credit', isset($scholarship) ? $user->total_credit : '') }}">
                                </div>


                                <!-- Total years of study -->
                                <div class="form-group col-sm-4">
                                <label for="Total_years">Total years of study</label>
                                <input type="text" id="Total_years" name="Total_years" class="form-control" value="{{ old('Total_years', isset($scholarship) ? $user->Total_years : '') }}">
                                </div>


                                <!-- How many credit hour you have done -->
                                <div class="form-group col-sm-4">
                                <label for="credit_hours_done">How many credit hours you have done</label>
                                <input type="text" id="credit_hours_done" name="credit_hours_done" class="form-control" value="{{ old('credit_hours_done', isset($scholarship) ? $user->credit_hours_done : '') }}">
                                </div>


                                <!-- Cost of tuition fee per year -->
                                <div class="form-group col-sm-4">
                                <label for="tuition_fee">Cost of tuition fee per year</label>
                                <input type="text" id="tuition_fee" name="tuition_fee" class="form-control" value="{{ old('tuition_fee', isset($scholarship) ? $user->tuition_fee : '') }}">
                                </div>


                                <!-- Cost of transportation per semester -->
                                <div class="form-group col-sm-4">
                                <label for="transport_cost">Cost of transportation per semester</label>
                                <input type="text" id="transport_cost" name="transport_cost" class="form-control" value="{{ old('transport_cost', isset($scholarship) ? $user->transport_cost : '') }}">
                                </div>


                                <!-- Cost of books per semester -->
                                <div class="form-group col-sm-4">
                                <label for="books_cost">Cost of books per semester</label>
                                <input type="text" id="books_cost" name="books_cost" class="form-control" value="{{ old ('books_cost', isset($scholarship) ? $user->books_cost : '') }}">
                                </div>

                            </div>

                            <br>
                            <h4> Upload Your Certificates</h4><br>

                            <div>
                                <input type="file" name="files[]" class="myfrm form-control" multiple>
                            </div>

                            <br>

                           <h2>Economic situation</h2><br>

                            <div class="form-row col-sm-12" style="font-size:16px;">

                            <!-- Cost of rent of House or Room -->
                                <div class="form-group col-sm-4">
                                <label for="room_cost">Cost of rent of House or Room</label>
                                <input type="text" id="room_cost" name="room_cost" class="form-control" value="{{ old ('room_cost', isset($scholarship) ? $user->room_cost : '') }}">
                                </div>

                                <!-- Number of family members -->
                                <div class="form-group col-sm-4">
                                <label for="No_family_members">Number of family members</label>
                                <input type="text" id="No_family_members" name="No_family_members" class="form-control" value="{{ old ('No_family_members', isset($scholarship) ? $user->No_family_members : '') }}">
                                </div>

                                <!-- Monthly income -->
                                <div class="form-group col-sm-4">
                                <label for="monthly_income">Monthly income</label>
                                <input type="text" id="monthly_income" name="monthly_income" class="form-control" value="{{ old ('monthly_income', isset($scholarship) ? $user->monthly_income : '') }}">
                                </div>


                                <!-- Economic and social situation -->
                                <div class="form-group col-sm-8">
                                <label for="situation">Write briefly about your economic and social situation</label>
                                <textarea id="situation" name="situation" class="form-control"
                                rows="5">{{ old('situation', isset($scholarship) ? $scholarship->situation : '') }}</textarea>
                                </div>
                            
                            </div>

                            <div class="text-center">
                                <input class="btn btn-success w-25"
                                    style="font-weight: bold; font-family: system-ui; background-color:grey!important;"
                                    type="submit" value="{{ trans('global.save') }}">
                            </div>

                </form>
            </div>
        </div>

    </section><!-- End Portfolio Section -->


    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
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
        $('.image-upload-wrap').bind('dragover', function() {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function() {
            $('.image-upload-wrap').removeClass('image-dropping');
        });
    </script>


    <script>
        // Upload file
        function uploadFile() {

            var totalfiles = document.getElementById('files').files.length;

            if (totalfiles > 0) {

                var formData = new FormData();

                // Read selected files
                for (var index = 0; index < totalfiles; index++) {
                    formData.append("files[]", document.getElementById('files').files[index]);
                }

                var xhttp = new XMLHttpRequest();

                // Set POST method and ajax file path
                xhttp.open("POST", "ajaxfile.php", true);

                // call on request changes state
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {

                        var response = this.responseText;

                        alert(response + " File uploaded.");

                    }
                };

                // Send request with data
                xhttp.send(formData);

            } else {
                alert("Please select a file");
            }

        }
    </script>


@endsection
