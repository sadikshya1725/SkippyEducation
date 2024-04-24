@extends('backend.layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Student Forms</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Contact Number</th>
                                    <th>Country of Citizenship</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($studentForms as $studentForm)
                                    <tr>
                                        <td>{{ $studentForm->id }}</td>
                                        <td>{{ $studentForm->full_name }}</td>
                                        <td>{{ $studentForm->email }}</td>
                                        <td>{{ $studentForm->contact_number }}</td>
                                        <td>{{ $studentForm->country_of_citizenship }}</td>
                                        <td>
                                            <a href="{{ route('admin.student-forms.edit', $studentForm->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('admin.student-forms.destroy', $studentForm->id) }}"
                                                method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
