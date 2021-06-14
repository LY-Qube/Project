<div class="w-full flex flex-col p-5">
    <label for="{{ "input_" . $name }}">{{ $placeholder }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ "input_" . $name }}" placeholder="{{ $placeholder }}"
           class="rounded-md border border-blue-700">
</div>
