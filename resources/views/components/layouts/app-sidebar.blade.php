<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-section sidebar-user my-1">
            <div class="sidebar-section-body">
                <div class="media">
                    <a href="#" class="mr-3">
                        <img src="{{ asset(auth()->user()->profile_image) }}"
                             class="rounded-circle"
                             title="{{ auth()->user()->full_name }}"
                             alt="{{ auth()->user()->full_name }}">
                    </a>

                    <div class="media-body">
                        <div class="font-weight-semibold">{{ auth()->user()->full_name }}</div>
                        <!--
                        <div class="font-size-sm line-height-sm opacity-50">
                            Senior developer
                        </div>
                        -->
                    </div>

                    <div class="ml-3 align-self-center">
                        <button type="button"
                                class="btn btn-outline-light-100 text-white border-transparent btn-icon
                                rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                            <i class="icon-transmission"></i>
                        </button>

                        <button type="button"
                                class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill
                                btn-sm sidebar-mobile-main-toggle d-lg-none">
                            <i class="icon-cross2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Main</div>
                    <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link active">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->
