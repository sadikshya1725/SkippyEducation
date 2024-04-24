@extends('backend.layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Student Form') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.student-forms.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="full_name">{{ __('Full Name') }}</label>
                                <input id="full_name" type="text" class="form-control" name="full_name" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="current_address">{{ __('Current Address') }}</label>
                                <textarea id="current_address" class="form-control" name="current_address" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="contact_number">{{ __('Contact Number') }}</label>
                                <input id="contact_number" type="text" class="form-control" name="contact_number" required>
                            </div>

                            <div class="form-group">
                                <label for="country_of_citizenship">{{ __('Country of Citizenship') }}</label>
                                <input id="country_of_citizenship" type="text" class="form-control" name="country_of_citizenship" required>
                            </div>

                            <div class="form-group">
                                <label>{{ __('Visa Status') }}</label><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="visa_status" id="student" value="student" required>
                                    <label class="form-check-label" for="student">{{ __('Student') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="visa_status" id="temporary_visa" value="temporary_visa">
                                    <label class="form-check-label" for="temporary_visa">{{ __('Temporary Visa') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="visa_status" id="student_on_temporary_visa" value="student_on_temporary_visa">
                                    <label class="form-check-label" for="student_on_temporary_visa">{{ __('Student on Temporary Visa') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="visa_status" id="others" value="others">
                                    <label class="form-check-label" for="others">{{ __('Others') }}</label>
                                </div>
                                <input type="text" class="form-control" name="visa_status_other" placeholder="{{ __('Specify other visa status') }}">
                            </div>

                            <div class="form-group">
                                <label>{{ __('Highest Education Level') }}</label><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="highest_education_level" id="high_school" value="high_school" required>
                                    <label class="form-check-label" for="high_school">{{ __('High School') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="highest_education_level" id="VET_certificate" value="VET_certificate">
                                    <label class="form-check-label" for="VET_certificate">{{ __('VET Certificate') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="highest_education_level" id="university_degree" value="university_degree">
                                    <label class="form-check-label" for="university_degree">{{ __('University Degree') }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="enrolled_course">{{ __('Enrolled Course') }}</label>
                                <input id="enrolled_course" type="text" class="form-control" name="enrolled_course" required>
                            </div>

                            <div class="form-group">
                                <label for="purpose_of_visit">{{ __('Purpose of Visit') }}</label>
                                <input id="purpose_of_visit" type="text" class="form-control" name="purpose_of_visit" required>
                            </div>

                            <div class="form-group">
                                <label for="special_conditions">{{ __('Special Conditions') }}</label>
                                <textarea id="special_conditions" class="form-control" name="special_conditions"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
