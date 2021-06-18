<div>
    <!-- Profile info -->
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">Profile information</h6>
        </div>

        <div class="card-body">
            <form wire:submit.prevent="save">

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <label>First name</label>
                            <input type="text" wire:model="user.first_name" class="form-control">
                            @error('user.first_name')
                            <span class="form-text text-danger">
                                <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label>Last name</label>
                            <input type="text" wire:model="user.last_name" class="form-control">
                            @error('user.last_name')
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
                            <label>Address</label>
                            <input type="text" wire:model="information.address" class="form-control">
                            @error('information.address')
                            <span class="form-text text-danger">
                                <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label>City</label>
                            <input type="text" wire:model="information.city" class="form-control">
                            @error('information.city')
                            <span class="form-text text-danger">
                            <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                        </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Phone #</label>
                            <input type="text" wire:model="information.phone" class="form-control">
                            <span class="form-text text-muted">06 61 00 00 00</span>
                        </div>
                        @error('information.phone')
                        <span class="form-text text-danger">
                            <i class="icon-cancel-circle2 mr-2"></i> {{ $message }}
                        </span>
                        @enderror

                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /profile info -->
</div>
