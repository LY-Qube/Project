<div>
    <!-- Account settings -->
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">Account settings</h6>
        </div>

        <div class="card-body">
            <form wire:submit.prevent="save">

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Job position</label>
                            <input type="text" wire:model="user.job_position" class="form-control">
                            @error('user.job_position')
                            <span class="form-text text-danger">
                                <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                            </span>
                            @enderror
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <label>Email</label>
                            <input type="text" value="{{$user->email}}" readonly="readonly" class="form-control">
                        </div>

                        <div class="col-lg-6">
                            <label>Current password</label>
                            <input type="password" wire:model="password"  class="form-control">
                            @error('password')
                            <span class="form-text text-danger">
                                <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <label>New password</label>
                            <input type="password" wire:model="user.newPassword" placeholder="Enter new password"
                                   class="form-control">
                            @error('user.newPassword')
                            <span class="form-text text-danger">
                                <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label>Repeat password</label>
                            <input type="password" wire:model="user.newPassword_confirmation"
                                   placeholder="Repeat new password"
                                   class="form-control">
                            @error('user.newPassword_confirmation')
                            <span class="form-text text-danger">
                                <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /account settings -->
</div>
