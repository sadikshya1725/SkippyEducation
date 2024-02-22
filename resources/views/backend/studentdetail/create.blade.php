@extends('backend.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->

    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif




    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">{{ $page_title }}</h1>
            <a href="{{ url('admin') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i>
                    Back</button></a>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
        </div>
    </div>



    <form id="quickForm" method="POST" action="{{ route('admin.student-details.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="phone_no">Phone Number</label>
                <input type="text" name="phone_no" class="form-control" id="phone_no" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <label for="country_id">Country</label>
                <select name="country_id" class="form-control" id="country_id" required>
                    <option value="">Select Country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="university_id">University</label>
                <select name="university_id" class="form-control" id="university_id" required>
                    <option value="">Select University</option>
                    @foreach ($universities as $university)
                        <option value="{{ $university->id }}">{{ $university->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="course_id">Course</label>
                <select name="course_id" class="form-control" id="course_id" required>
                    <option value="">Select Course</option>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="intake_month_year">Intake Date</label>
                <input type="text" name="intake_month_year" class="form-control" id="intake_month_year"
                    placeholder="MM/YYYY" required>
            </div>


            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image" onchange="previewImage(event)"
                    required>
                <img id="preview" style="max-width: 150px; max-height:150px; margin-top:10px;">
            </div>

            <div class="form-group">
                <label for="documents">Upload Documents</label>
                <input type="file" class="form-control-file" id="documents" name="documents[]" multiple
                    accept=".pdf,.doc,.docx,.jpg,.jpeg,.png,.gif">
                <small class="form-text text-muted">Supported formats: pdf, doc, docx, jpg, jpeg, png, gif.</small>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create Student Details</button>
        </div>
    </form>

    <script>
        const previewImage = e => {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview').src = e.target.result;
            }
            reader.readAsDataURL(e.target.files[0]);
        };
    </script>
    <script>
        // Get the input element
        const intakeMonthYearInput = document.getElementById('intake_month_year');

        // Listen for input event and format the value to MM/YYYY
        intakeMonthYearInput.addEventListener('input', function() {
            let inputValue = intakeMonthYearInput.value.replace(/\D/g, '').substring(0,
                6); // Allow only digits and limit to 6 characters
            const month = inputValue.substring(0, 2);
            const year = inputValue.substring(2, 6);
            if (inputValue.length > 2) {
                inputValue = month + '/' + year;
            }
            intakeMonthYearInput.value = inputValue;
        });
    </script>

@stop
