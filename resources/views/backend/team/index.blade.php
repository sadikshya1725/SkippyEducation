@extends('backend.layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Team Members</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Phone Number</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Image</th> <!-- Add this column for the image -->
                                    <th>Actions</th> <!-- Add this column for edit and delete actions -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teamMembers as $member)
                                    <tr>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->position }}</td>
                                        <td>{{ $member->phone_no }}</td>
                                        <td>{{ $member->role }}</td>
                                        <td>{{ $member->email }}</td>
                                        <td>
                                            <img id="imagePreview{{ $member->id }}"
                                                src="{{ $member->image ? asset('storage/' . $member->image) : '' }}"
                                                alt="Team Member Image" style="max-width: 100px;">
                                        </td>
                                        <td style="white-space: nowrap;">
                                            <a href="{{ route('admin.teams.edit', $member->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <form action="{{ route('admin.teams.destroy', $member->id) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
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

@push('scripts')
    <script>
        // Function to preview image before upload
        function previewImage(event, id) {
            var input = event.target;
            var preview = document.getElementById('imagePreview' + id);

            while (preview.firstChild) {
                preview.removeChild(preview.firstChild);
            }

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.maxWidth = '100px';
                    preview.appendChild(img);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
