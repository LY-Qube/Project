<x-guest-layout>
    <!-- Content area -->
    <div class="content d-flex justify-content-center align-items-center">

        <!-- Password recovery form -->
        <form class="login-form" action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="icon-spinner11 icon-2x text-warning border-warning border-3 rounded-pill p-3 mb-3 mt-1"></i>
                        <h5 class="mb-0">Update your password</h5>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="email"
                               name="email"
                               value="{{ old('email',$request->email) }}"
                               class="form-control"
                               placeholder="Your email" required>
                        <div class="form-control-feedback">
                            <i class="icon-mail5 text-muted"></i>
                        </div>
                        @error('email')
                        <span class="form-text text-danger">
                                            <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                                        </span>
                        @enderror
                    </div>
                    <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="password"
                               name="password"
                               value="{{ old('password') }}"
                               class="form-control"
                               placeholder="Your new password" required>
                        <div class="form-control-feedback">
                            <i class="icon-lock text-muted"></i>
                        </div>
                        @error('password')
                        <span class="form-text text-danger">
                            <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="password"
                               name="password_confirmation"
                               value="{{ old('password_confirmation') }}"
                               class="form-control"
                               placeholder="Confirm your new password" required>
                        <div class="form-control-feedback">
                            <i class="icon-lock text-muted"></i>
                        </div>
                        @error('password_confirmation')
                        <span class="form-text text-danger">
                            <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="icon-spinner11 mr-2"></i> Reset password
                    </button>
                </div>
            </div>
        </form>
        <!-- /password recovery form -->

    </div>
    <!-- /content area -->
</x-guest-layout>














