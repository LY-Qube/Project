<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <title>{{ config('app.name') }} - </title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('limitless/global/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('limitless/assets/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    @livewireStyles
</head>

<body>

<x-layouts.app-navbar></x-layouts.app-navbar>


<!-- Page content -->
<div class="page-content">

<x-layouts.app-sidebar></x-layouts.app-sidebar>


    {{ $slot }}


    @if (session('success'))
        <div class="alert alert-teal alert-dismissible mb-2" style="position: fixed; bottom: 15px; left: 15px;z-index: 900">
            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
            {{ session('success') }}
        </div>
    @else
        <livewire:layouts.alert-success />
    @endif



</div>
<!-- /page content -->


<!-- Core JS files -->
<script src="{{ asset('limitless/global/js/main/jquery.min.js') }}"></script>
<script src="{{ asset('limitless/global/js/main/bootstrap.bundle.min.js') }}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="{{ asset('limitless/assets/js/app.js') }}"></script>
<!-- /theme JS files -->

@livewireScripts
<script>
    window.addEventListener('offline', (e) => {
        document.getElementById('online-status').innerHTML =
            '<span class="badge badge-danger my-3 my-lg-0 ml-lg-3">OffLine</span>'
    })
    window.addEventListener('online', (e) => {
        document.getElementById('online-status').innerHTML =
            '<span class="badge badge-success my-3 my-lg-0 ml-lg-3">Online</span>'
    })
</script>
</body>

</html>
