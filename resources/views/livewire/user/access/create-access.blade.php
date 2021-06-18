<div>
    @if (!$form)
        <div class="row mb-5">
            <div class="col-12 text-right">
                <button class="btn btn-primary" wire:click="form">Create New Access</button>
            </div>
        </div>
    @else
    <!-- Create New Access -->
        <div class="card pb-4">
            <div class="card-header">
                <h5 class="card-title">Create New Access</h5>
            </div>
            <div class="col-12">
                <form wire:submit.prevent="save">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" wire:model="access.email" placeholder="E-mail"
                                       class="form-control">
                                @error('access.email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="job_position">Job Position</label>
                                <input type="text" id="job_position" wire:model="access.job_position" placeholder="Job Position"
                                       class="form-control">
                                @error('access.job_position')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-right">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Create New Access -->
    @endif
</div>
