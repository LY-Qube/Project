<div>
    <livewire:user.access.create-access/>
    <!-- List Access -->
    <div class="card">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Job Position</th>
                    <th class="text-center" colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($accesses as $access)
                    <tr wire:key="{{ $loop->index }}">
                        <td>{{ $loop->index +1 }}</td>
                        <td>{{ $access->email }}</td>
                        <td>{{ $access->job_position }}</td>
                        <td>
                            <button wire:click="resend({{$access->id}})" class="btn btn-warning">
                                Send Email Again
                            </button>
                        </td>
                        <td>
                            <button wire:click="delete({{$access->id}})" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /List Access -->
</div>
