<div>
    <!-- Navigation -->
    <div class="card">
        <div class="card-body text-center">
            <div class="card-img-actions d-inline-block mb-3">
                    <img class="img-fluid rounded-circle"
                         src="{{ asset($user->profile_image) }}"
                         width="170"
                         height="170"
                         id="user-card-img-profile"
                         title="{{ $user->full_name }}"
                         alt="{{ $user->full_name }}">
                <div class="card-img-actions-overlay rounded-circle">
                    <a href="#"
                       onclick="$('#fileInput').click()"
                       class="btn btn-outline-white border-2 btn-icon rounded-pill">
                        <i class="icon-upload"></i>
                    </a>
                </div>
            </div><script>
                function preview() {
                    $('#user-card-img-profile').attr('src',URL.createObjectURL(event.target.files[0]));
                    $('#upload-image-profile-card').removeClass('d-none');
                }
            </script>
            <form action="{{ route('image.profile') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="avatar" id="fileInput" accept="image/*" onchange="preview()"
                       class="d-none" />

                <input type="submit" id="upload-image-profile-card"
                       class="btn btn-primary d-none"
                       value="Save Change">

            </form>
            @error('image')
            <span class="form-text text-danger">
                <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
            </span>
            @enderror

            <h6 class="font-weight-semibold mb-0">{{ $user->full_name }}</h6>
            <span class="d-block opacity-75">{{ $user->job_position }}</span>
        </div>

        <ul class="nav nav-sidebar">
            <li class="nav-item">
                <a href="{{ route('profile') }}" class="nav-link {{ ($active === "profile") ? "active" : '' }}">
                    <i class="icon-user"></i>
                    My profile
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('setting') }}" class="nav-link {{ ($active === "setting") ? "active" : '' }} ">
                    <i class="icon-cog"></i>
                    Setting
                </a>
            </li>
        </ul>
    </div>
    <!-- /navigation -->
</div>

