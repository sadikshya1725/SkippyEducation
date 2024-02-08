@extends('backend.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->






    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">{{ $page_title }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item active">{{ $page_title }}</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->

    <!-- /.content-header -->


    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>S.N.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                {{-- <th>Action</th> --}}

            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr data-widget="expandable-table" aria-expanded="false">
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $contact->name ?? '' }}</td>

                    <td> {{ $contact->email ?? '' }}</td>
                    <td> {{ $contact->phone_no ?? '' }}</td>
                    <td> {{ $contact->message ?? '' }}</td>

                    {{-- <td>
                            <a href="edit/{{ $photogallery->id }}">
                                <div style="display: flex; flex-direction:row;">
                                    <button type="button" class="btn btn-block btn-warning btn-sm"><i
                                            class="fas fa-edit"></i>Edit </button>
                            </a>

                            <a href="{{ url('admin/photogallery/delete/'.$photogallery->id) }}">
                              <button type="button" class="btn btn-block btn-danger btn-sm" data-toggle="modal"
                                  data-target="#modal-default" style="width:auto;"
                                  onclick="replaceLinkFunction">Delete</button>
                              </a>

                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- /.row -->
    <!-- Main row -->

    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->








@stop
