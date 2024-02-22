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
                            <a href="{{ route('admin.services.create') }}"><button class="btn btn-primary btn-sm"><i
                                        class="fa fa-plus"></i>Add
                                    Services</button></a>
                            <a href="{{ url('admin') }}"><button class="btn btn-primary btn-sm"><i
                                        class="fa fa-arrow-left"></i>
                                    Back</button></a>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td width="5%">{{ $loop->iteration }}</td>
                                    <td>{{ $service->title ?? '' }}</td>
                                    <td> <img id="preview{{ $loop->iteration }}"
                                            src="{{ asset('uploads/service/' . $service->image) }}"
                                            style="width: 150px; height:150px" /></td>
                                    <td>{!! preg_replace('/<p>(.*?)<iframe\b[^>]*>.*?<\/iframe>(.*?)<\/p>/is', '$1$2', $service->summernoteContent) !!}</td>

                                    <td>
                                        <div style="display: flex; flex-direction:row;">
                                            <a href="{{ route('admin.services.edit', $service->id) }}"
                                                class="btn btn-warning btn-sm" style="margin-right: 5px;"><i
                                                    class="fas fa-edit"></i>
                                                Edit</a>
                                            <form action="{{ route('admin.services.destroy', $service->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this item?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <script>
                        $(document).ready(function() {
                            function extractPlainTextFromSummernote() {
                                var plainText = $('.note-editable')
                                    .text(); // Assuming '.note-editable' is the class used by Summernote
                                console.log(plainText); // For demonstration purposes, you can log the plainText to the console
                                // Now, you can do something with the plainText, such as saving it to your database
                            }
                        });
                    </script>
                @endsection
