<div>
    @if ($message)
        <div class="alert alert-teal alert-dismissible mb-2" style="position: fixed; bottom: 15px; left: 15px;z-index: 900">
            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
            {{ $message }}
        </div>
    @endif

</div>
