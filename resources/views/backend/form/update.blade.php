@extends('backend.layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- <div class="card"> --}}
                    {{-- <div class="card-header">{{ __('Update Student Form') }}</div> --}}
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

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.student-forms.update', $studentForm->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="full_name">{{ __('Full Name') }}</label>
                                <input id="full_name" type="text" class="form-control" name="full_name" value="{{ $studentForm->full_name }}" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="current_address">{{ __('Current Address') }}</label>
                                <textarea id="current_address" class="form-control" name="current_address" required>{{ $studentForm->current_address }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ $studentForm->email }}" required>
                            </div>

                            <div class="form-group">
                                <label for="contact_number">{{ __('Contact Number') }}</label>
                                <input id="contact_number" type="text" class="form-control" name="contact_number" value="{{ $studentForm->contact_number }}" required>
                            </div>

                            <div class="form-group">
                                <label for="country_of_citizenship">{{ __('Country of Citizenship') }}</label>
                                <input id="country_of_citizenship" type="text" class="form-control" name="country_of_citizenship" value="{{ $studentForm->country_of_citizenship }}" required>
                            </div>

                            <div class="form-group">
                                <label>{{ __('Visa Status') }}</label><br>
                                <!-- Assuming $studentForm->visa_status holds the value of selected option -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="visa_status" id="student" value="student" {{ $studentForm->visa_status == 'student' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="student">{{ __('Student') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="visa_status" id="temporary_visa" value="temporary_visa"{{ $studentForm->visa_status == 'temporary_visa' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="temporary_visa">{{ __('Temporary Visa') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="visa_status" id="others" value="others" {{ $studentForm->visa_status == 'others' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="others">{{ __('Others') }}</label>
                                </div>
                                <!-- Add similar form-checks for other options -->
                                <!-- Include an input for specifying other visa status if needed -->
                                <input type="text" class="form-control" name="visa_status_other" placeholder="{{ __('Specify other visa status') }}" value="{{ $studentForm->visa_status_other }}">
                            </div>

                            <div class="form-group">
                                <label>{{ __('Highest Education Level') }}</label><br>
                                <!-- Assuming $studentForm->highest_education_level holds the value of selected option -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="highest_education_level" id="high_school" value="high_school" {{ $studentForm->highest_education_level == 'high_school' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="high_school">{{ __('High School') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="highest_education_level" id="VET_certificate" value="VET_certificate" {{ $studentForm->highest_education_level == 'VET_certificate' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="VET_certificate">{{ __('VET Certificate') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="highest_education_level" id="university_degree" value="university_degree"  {{ $studentForm->highest_education_level == 'university_degree' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="university_degree">{{ __('University Degree') }}</label>
                                </div>
                               
                            </div>

                            <div class="form-group">
                                <label for="enrolled_course">{{ __('Enrolled Course') }}</label>
                                <input id="enrolled_course" type="text" class="form-control" name="enrolled_course" value="{{ $studentForm->enrolled_course }}" required>
                            </div>

                            <div class="form-group">
                                <label for="purpose_of_visit">{{ __('Purpose of Visit') }}</label>
                                <input id="purpose_of_visit" type="text" class="form-control" name="purpose_of_visit" value="{{ $studentForm->purpose_of_visit }}" required>
                            </div>

                            <div class="form-group">
                                <label for="special_conditions">{{ __('Special Conditions') }}</label>
                                <textarea id="special_conditions" class="form-control" name="special_conditions" required>{{ $studentForm->special_conditions }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                        </form>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
@endsection
