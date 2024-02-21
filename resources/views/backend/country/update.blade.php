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

    <form id="quickForm" method="POST" action="{{ route('admin.countries.update', $country->id) }}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Spoofing a PUT request -->
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label><span style="color:red; font-size:large"> *</span>
                <input style="width:auto;" type="text" name="name" class="form-control" id="name"
                    placeholder="Name" value="{{ old('name', $country->name) }}" required>
            </div>

            <div>
                <label for="content">Content:</label>
                <textarea name="content" id="content" cols="30" rows="10">{{ old('content', $country->content) }}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Images <span style="color:red;"></span></label>
                <span style="color:red; font-size:large"> *</span>
                <input type="file" name="image[]" class="form-control" multiple onchange="previewImages(event)">
            </div>

            <!-- Image Preview -->
            <div id="imagePreviews" class="row mt-3">
                @foreach (json_decode($country->image, true) as $image)
                    <div class="col-md-2 mb-3 image-preview">
                        <img src="{{ asset($image) }}" alt="Image Preview" class="img-fluid">
                    </div>
                @endforeach
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>

    <script>
        $('#content').summernote({
            placeholder: 'content...',
            tabsize: 2,
            height: 300
        });

        // Function to preview selected images
        const previewImages = e => {
            const files = e.target.files;
            const imagePreviews = document.getElementById('imagePreviews');
            imagePreviews.innerHTML = ''; // Clear existing previews

            for (const file of files) {
                const reader = new FileReader();
                reader.readAsDataURL(file);

                reader.onload = () => {
                    const preview = document.createElement('div');
                    preview.className = 'col-md-2 mb-3';
                    preview.innerHTML = `<img src="${reader.result}" alt="Image Preview" class="img-fluid">`;
                    imagePreviews.appendChild(preview);
                };
            }
        };
    </script>
@endsection
