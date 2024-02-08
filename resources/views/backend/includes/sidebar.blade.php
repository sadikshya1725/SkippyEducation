<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" aria-label="Toggle Navigation" data-bs-original-title="Toggle Navigation"><span
                    class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        </div><a class="navbar-brand" href="">
            <div class="d-flex align-items-center py-3"><img class="me-2"
                    src="{{ asset('adminassets/assets/img/icons/spot-illustrations/falcon.png') }}" alt=""
                    width="40"><span class="font-sans-serif">Admin</span></div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="dashboard">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                    class="svg-inline--fa fa-chart-pie fa-w-17" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="chart-pie" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 544 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M527.79 288H290.5l158.03 158.03c6.04 6.04 15.98 6.53 22.19.68 38.7-36.46 65.32-85.61 73.13-140.86 1.34-9.46-6.51-17.85-16.06-17.85zm-15.83-64.8C503.72 103.74 408.26 8.28 288.8.04 279.68-.59 272 7.1 272 16.24V240h223.77c9.14 0 16.82-7.68 16.19-16.8zM224 288V50.71c0-9.55-8.39-17.4-17.84-16.06C86.99 51.49-4.1 155.6.14 280.37 4.5 408.51 114.83 513.59 243.03 511.98c50.4-.63 96.97-16.87 135.26-44.03 7.9-5.6 8.42-17.23 1.57-24.08L224 288z">
                                    </path>
                                </svg>
                                <a href="#"><span class="nav-link-text ps-1">Dashboard</span></a>
                        </div>
                    </a>

                </li>

                {{-- Beginning of Site Settings --}}

                @hasanyrole('superadmin|admin')
                    <li class="nav-item">
                        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                            <div class="col-auto navbar-vertical-label">Site Settings</div>
                            <div class="col ps-0">
                                <hr class="mb-0 navbar-vertical-divider">
                            </div>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link dropdown-indicator" href="#dashboard6" role="button" data-bs-toggle="collapse"
                            aria-expanded="true" aria-controls="dashboard">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><i
                                        class="fas fa-users"></i></span><span class="nav-link-text ps-1">Site Setting
                                </span></div>
                        </a>
                        <ul class="nav collapse  {{ Request::segment(2) == 'site-settings' ? 'show' : '' }}"
                            id="dashboard6">
                            @can('list_site_settings')
                                <li class="nav-item"><a
                                        class="nav-link {{ Request::segment(2) == 'site-settings' ? 'active' : '' }}"
                                        href="{{ route('admin.site-settings.index') }}">
                                        <div class="d-flex align-items-center"><i class="fa fa-angle-double-right"></i>
                                            Site Setting

                                        </div>
                                    </a>
                                </li>
                            @endcan

                        </ul>
                    </li>
                    </li>
                @endhasanyrole

                {{-- End of Site Settings --}}


                {{-- Beginning of Cover Image --}}

                @hasanyrole('superadmin|admin')
                    <li class="nav-item">
                        {{-- <hr class="my-4"> --}}
                        <!-- label-->
                        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                            <div class="col-auto navbar-vertical-label">Cover Image</div>
                            <div class="col ps-0">
                                <hr class="mb-0 navbar-vertical-divider">
                            </div>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link dropdown-indicator" href="#dashboard6" role="button" data-bs-toggle="collapse"
                            aria-expanded="true" aria-controls="dashboard">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><i
                                        class="fas fa-users"></i></span><span class="nav-link-text ps-1">Cover Image
                                </span></div>
                        </a>
                        <ul class="nav collapse  {{ Request::segment(2) == 'cover-images' ? 'show' : '' }}" id="dashboard6">
                            @can('list_cover_images')
                                <li class="nav-item"><a
                                        class="nav-link {{ Request::segment(2) == 'cover-images' ? 'active' : '' }}"
                                        href="{{ route('admin.cover-images.index') }}">
                                        <div class="d-flex align-items-center"><i class="fa fa-angle-double-right"></i> Cover
                                            Image

                                        </div>
                                    </a>
                                </li>
                            @endcan

                        </ul>
                    </li>
                    </li>
                @endhasanyrole

                {{-- End of Cover Image --}}

                {{-- Beginning of About --}}

                @hasanyrole('superadmin|admin')
                    <li class="nav-item">
                        {{-- <hr class="my-4"> --}}
                        <!-- label-->
                        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                            <div class="col-auto navbar-vertical-label">About</div>
                            <div class="col ps-0">
                                <hr class="mb-0 navbar-vertical-divider">
                            </div>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link dropdown-indicator" href="#dashboard6" role="button" data-bs-toggle="collapse"
                            aria-expanded="true" aria-controls="dashboard">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><i
                                        class="fas fa-users"></i></span><span class="nav-link-text ps-1">About us
                                </span></div>
                        </a>
                        <ul class="nav collapse  {{ Request::segment(2) == 'about-us' ? 'show' : '' }}" id="dashboard6">
                            @can('list_about_us')
                                <li class="nav-item"><a
                                        class="nav-link {{ Request::segment(2) == 'about-us' ? 'active' : '' }}"
                                        href="{{ route('admin.about-us.index') }}">
                                        <div class="d-flex align-items-center"><i class="fa fa-angle-double-right"></i> About
                                            Us

                                        </div>
                                    </a>
                                </li>
                            @endcan

                        </ul>
                    </li>
                    </li>
                @endhasanyrole

                {{-- End of About --}}


                {{-- Beginning of Services --}}

                @hasanyrole('superadmin|admin')
                    <li class="nav-item">
                        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                            <div class="col-auto navbar-vertical-label">Services</div>
                            <div class="col ps-0">
                                <hr class="mb-0 navbar-vertical-divider">
                            </div>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link dropdown-indicator" href="#dashboard6" role="button"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><i
                                        class="fas fa-users"></i></span><span class="nav-link-text ps-1">Services
                                </span></div>
                        </a>
                        <ul class="nav collapse  {{ Request::segment(2) == 'services' ? 'show' : '' }}" id="dashboard6">
                            @can('list_services')
                                <li class="nav-item"><a
                                        class="nav-link {{ Request::segment(2) == 'services' ? 'active' : '' }}"
                                        href="{{ route('admin.services.index') }}">
                                        <div class="d-flex align-items-center"><i class="fa fa-angle-double-right"></i>
                                            service

                                        </div>
                                    </a>
                                </li>
                            @endcan

                        </ul>
                    </li>
                    </li>
                @endhasanyrole

                {{-- End of Services --}}

                {{-- Beginning of Favicon --}}

                @hasanyrole('superadmin|admin')
                    <li class="nav-item">
                        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                            <div class="col-auto navbar-vertical-label">Favicons</div>
                            <div class="col ps-0">
                                <hr class="mb-0 navbar-vertical-divider">
                            </div>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link dropdown-indicator" href="#dashboard6" role="button"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><i
                                        class="fas fa-users"></i></span><span class="nav-link-text ps-1">Favicons
                                </span></div>
                        </a>
                        <ul class="nav collapse  {{ Request::segment(2) == 'favicons' ? 'show' : '' }}" id="dashboard6">
                            @can('list_favicons')
                                <li class="nav-item"><a
                                        class="nav-link {{ Request::segment(2) == 'favicons' ? 'active' : '' }}"
                                        href="{{ route('admin.favicons.index') }}">
                                        <div class="d-flex align-items-center"><i class="fa fa-angle-double-right"></i>
                                            Favicon

                                        </div>
                                    </a>
                                </li>
                            @endcan

                        </ul>
                    </li>
                    </li>
                @endhasanyrole

                {{-- End of Favicon --}}


                {{-- Beginning of Gallery --}}

                @hasanyrole('superadmin|admin')
                    <li class="nav-item">
                        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                            <div class="col-auto navbar-vertical-label">Gallery</div>
                            <div class="col ps-0">
                                <hr class="mb-0 navbar-vertical-divider">
                            </div>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link dropdown-indicator" href="#dashboard6" role="button"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><i
                                        class="fas fa-users"></i></span><span class="nav-link-text ps-1">Gallery
                                </span></div>
                        </a>
                        <ul class="nav collapse  {{ Request::segment(2) == 'photo-galleries' || Request::segment(2) == 'video-galleries' ? 'show' : '' }}"
                            id="dashboard6">
                            @can('list_photo_galleries')
                                <li class="nav-item"><a
                                        class="nav-link {{ Request::segment(2) == 'photo-galleries' ? 'active' : '' }}"
                                        href="{{ route('admin.photo-galleries.index') }}">
                                        <div class="d-flex align-items-center"><i class="fa fa-angle-double-right"></i>
                                            Photo Gallery

                                        </div>
                                    </a>
                                </li>
                            @endcan

                            @can('list_video_galleries')
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::segment(2) == 'video-galleries' ? 'active' : '' }}"
                                        href="{{ route('admin.video-galleries.index') }}">
                                        <div class="d-flex align-items-center">
                                            <i class="fa fa-angle-double-right"></i> Video Gallery
                                        </div>
                                    </a>
                                </li>
                            @endcan

                        </ul>
                    </li>
                    </li>
                @endhasanyrole

                {{-- End of Gallery --}}



                {{-- Beginning of Categories --}}

@hasanyrole('superadmin|admin')
<li class="nav-item">
    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
        <div class="col-auto navbar-vertical-label">Categories</div>
        <div class="col ps-0">
            <hr class="mb-0 navbar-vertical-divider">
        </div>
    </div>
    <li class="nav-item">
        <a class="nav-link dropdown-indicator" href="#dashboard6" role="button" data-bs-toggle="collapse"
            aria-expanded="true" aria-controls="dashboard">
            <div class="d-flex align-items-center">
                <span class="nav-link-icon"><i class="fas fa-users"></i></span>
                <span class="nav-link-text ps-1">Categories</span>
            </div>
        </a>
        <ul class="nav collapse {{ Request::segment(2) == 'categories' ? 'show' : '' }}" id="dashboard6">
            {{-- Add Category --}}
            <li class="nav-item">
                <a class="nav-link {{ Request::segment(2) == 'categories' && Request::segment(3) == 'create' ? 'active' : '' }}" href="{{ route('admin.categories.create') }}">
                    <div class="d-flex align-items-center">
                        <i class="fa fa-plus"></i>
                        <span class="nav-link-text ps-1">Add Category</span>
                    </div>
                </a>
            </li>
        </ul>
    </li>
</li>
@endhasanyrole
{{-- End of Categories --}}


{{-- Beginning of Posts --}}
@hasanyrole('superadmin|admin')
    <li class="nav-item">
        <!-- label-->
        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
            <div class="col-auto navbar-vertical-label">Posts</div>
            <div class="col ps-0">
                <hr class="mb-0 navbar-vertical-divider">
            </div>
        </div>
        <li class="nav-item">
            <a class="nav-link dropdown-indicator collapsed" href="#dashboard6" role="button" data-bs-toggle="collapse"
                aria-expanded="false" aria-controls="dashboard">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon"><i class="fas fa-users"></i></span>
                    <span class="nav-link-text ps-1">Posts</span>
                </div>
            </a>
            <ul class="nav collapse {{ Request::segment(2) == 'posts' ? 'show' : '' }}" id="dashboard6">
                {{-- Add Post --}}
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(2) == 'posts' && Request::segment(3) == 'create' ? 'active' : '' }}" href="{{ route('admin.posts.create') }}">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-plus"></i>
                            <span class="nav-link-text ps-1">Add Post</span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
@endhasanyrole
{{-- End of Posts --}}




{{-- Beginning of User Management --}}
               {{-- <li class="nav-item">
    <!-- Label -->
    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
        <div class="col-auto navbar-vertical-label">User Management</div>
        <div class="col ps-0">
            <hr class="mb-0 navbar-vertical-divider">
        </div>
    </div>
</li>
<li class="nav-item">
    <!-- Dropdown Toggle -->
    <a class="nav-link dropdown-indicator" href="#user-management" role="button" data-bs-toggle="collapse"
        aria-expanded="true" aria-controls="user-management">
        <div class="d-flex align-items-center">
            <span class="nav-link-icon"><i class="fas fa-users"></i></span>
            <span class="nav-link-text ps-1">User Management</span>
        </div>
    </a>
    <!-- Dropdown Content -->
    <ul class="nav collapse {{ Request::segment(2) == 'usermanagement' ? 'show' : '' }}" id="user-management">
        @can('list_users')
            <li class="nav-item">
                <a class="nav-link {{ Request::segment(3) == '' ? 'active' : '' }}"
                    href="{{ route('usermanagement.index') }}">
                    <div class="d-flex align-items-center">
                        <i class="fa fa-angle-double-right"></i> User List
                    </div>
                </a>
            </li>
        @endcan
        @can('create_users')
            <li class="nav-item">
                <a class="nav-link {{ Request::segment(3) == 'create' ? 'active' : '' }}"
                    href="{{ route('usermanagement.create') }}">
                    <div class="d-flex align-items-center">
                        <i class="fa fa-angle-double-right"></i> Create User
                    </div>
                </a>
            </li>
        @endcan
    </ul>
</li>  --}}
{{-- End of User Management --}}

 </ul>
        </div>
    </div>
</nav>
