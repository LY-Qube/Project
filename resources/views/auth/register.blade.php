<x-guest-layout>
    <!-- Content area -->
    <div class="content d-flex justify-content-center align-items-center">

        <!-- Registration form -->
        <form action="{{ route('register') }}" method="POST" class="flex-fill">
            @csrf
            <input type="hidden" name="access" value="{{ request('token') }}">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-pill p-3 mb-3 mt-1"></i>
                                <h5 class="mb-0">Create account</h5>
                                <span class="d-block text-muted">All fields are required</span>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group form-group-feedback form-group-feedback-right">
                                        <input type="text"
                                               name="first_name"
                                               value="{{ old('first_name') }}"
                                               class="form-control"
                                               placeholder="First name" required>
                                        <div class="form-control-feedback">
                                            <i class="icon-user-check text-muted"></i>
                                        </div>
                                        @error('first_name')
                                        <span class="form-text text-danger">
                                            <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group form-group-feedback form-group-feedback-right">
                                        <input type="text"
                                               name="last_name"
                                               value="{{ old('last_name') }}"
                                               class="form-control"
                                               placeholder="Last name" required>
                                        <div class="form-control-feedback">
                                            <i class="icon-user-check text-muted"></i>
                                        </div>
                                        @error('last_name')
                                        <span class="form-text text-danger">
                                            <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group form-group-feedback form-group-feedback-right">
                                        <input type="text"
                                               name="address"
                                               value="{{ old('address') }}"
                                               class="form-control"
                                               placeholder="Address" required>
                                        <div class="form-control-feedback">
                                            <i class="icon-user-check text-muted"></i>
                                        </div>
                                        @error('address')
                                        <span class="form-text text-danger">
                                            <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group form-group-feedback form-group-feedback-right">
                                        <input type="text"
                                               name="city"
                                               value="{{ old('city') }}"
                                               class="form-control"
                                               placeholder="City" required>
                                        <div class="form-control-feedback">
                                            <i class="icon-user-check text-muted"></i>
                                        </div>
                                        @error('city')
                                        <span class="form-text text-danger">
                                            <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group form-group-feedback form-group-feedback-right">
                                        <input type="tel"
                                               name="phone"
                                               value="{{ old('phone') }}"
                                               class="form-control"
                                               placeholder="Phone" required>
                                        <div class="form-control-feedback">
                                            <i class="icon-mention text-muted"></i>
                                        </div>
                                        @error('phone')
                                        <span class="form-text text-danger">
                                            <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form-group-feedback form-group-feedback-right">
                                        <input type="email"
                                               name="email"
                                               value="{{ old('email', request('email')) }}"
                                               class="form-control"
                                               placeholder="Your email" required>
                                        <div class="form-control-feedback">
                                            <i class="icon-mention text-muted"></i>
                                        </div>
                                        @error('email')
                                        <span class="form-text text-danger">
                                            <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group form-group-feedback form-group-feedback-right">
                                        <input type="password"
                                               name="password"
                                               class="form-control"
                                               placeholder="Create password" required>
                                        <div class="form-control-feedback">
                                            <i class="icon-user-lock text-muted"></i>
                                        </div>
                                        @error('password')
                                        <span class="form-text text-danger">
                                            <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group form-group-feedback form-group-feedback-right">
                                        <input type="password"
                                               name="password_confirmation"
                                               class="form-control"
                                               placeholder="Repeat password" required>
                                        <div class="form-control-feedback">
                                            <i class="icon-user-lock text-muted"></i>
                                        </div>
                                        @error('password_confirmation')
                                        <span class="form-text text-danger">
                                            <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" checked>
                                    <span class="custom-control-label">Accept <a
                                            href="#">&nbsp;terms of service</a></span>
                                </label>
                            </div>
                        </div>

                        <div class="card-footer bg-transparent text-right">
                            <button type="submit" class="btn btn-teal btn-labeled btn-labeled-right"><b>
                                    <i class="icon-plus3"></i></b>
                                Create account
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- /registration form -->

    </div>
    <!-- /content area -->

</x-guest-layout>



