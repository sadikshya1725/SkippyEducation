@extends('backend.layouts.master')

@section('content')
@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif
    <div class="bg-light p-4 rounded">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1>Student Form</h1>
                <div class="lead">
                    <a href="{{ route('admin.student-forms.create') }}" class="btn btn-primary btn-sm">Add</a>
                </div>
            </div>
        </div>
        <table id="studentTable" class="table table-striped">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Country of Citizenship</th>
                    <th>Actions</th>
                                    
                </tr>
            </thead>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#studentTable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('admin.student-forms.index') }}",
                "columns": [
                    { "data": null, render: function(data, type, row, meta) {
                        return meta.row + 1; // Incremental number starting from 1
                    }},
                    { "data": "full_name" },
                    { "data": "current_address" },
                    { "data": "contact_number" },
                    { "data": "country_of_citizenship" },
                    { "data": "actions", "searchable": false, "orderable": false }
                ]
            });
        });
    </script>
@endsection