<x-app-layout>
    <!-- Content area -->
    <div class="content" style="overflow: auto">

        <!-- Inner container -->
        <div class="d-lg-flex align-items-lg-start">

            <!-- Left sidebar component -->
            <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left wmin-300
            border-0 shadow-none sidebar-expand-lg">

                <!-- Sidebar content -->
                <div class="sidebar-content">

                    <!-- Navigation -->
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="card-img-actions d-inline-block mb-3">
                                <img class="img-fluid rounded-circle"
                                     src="{{ asset(auth()->user()->profile_image) }}"
                                     width="170"
                                     height="170"
                                     title="{{ auth()->user()->full_name }}"
                                     alt="{{ auth()->user()->full_name }}">
                                <div class="card-img-actions-overlay rounded-circle">
                                    <a href="#" class="btn btn-outline-white border-2 btn-icon rounded-pill">
                                        <i class="icon-upload"></i>
                                    </a>

                                </div>
                            </div>

                            <h6 class="font-weight-semibold mb-0">{{ auth()->user()->full_name }}</h6>
                            <!--
                            <span class="d-block opacity-75">Head of UX</span>
                            -->
                        </div>

                        <ul class="nav nav-sidebar">
                            <li class="nav-item">
                                <a href="#" class="nav-link active" data-toggle="tab">
                                    <i class="icon-user"></i>
                                    My profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-cog"></i>
                                    Setting
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /navigation -->

                </div>
                <!-- /sidebar content -->

            </div>
            <!-- /left sidebar component -->

            <!-- Right content -->
            <div class="tab-content flex-1">
                <div class="tab-pane fade active show">

                    <!-- Profile info -->
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title">No data for now</h6>
                        </div>

                    </div>
                    <!-- /profile info -->
                </div>

            </div>
            <!-- /right content -->

        </div>
        <!-- /inner container -->

    </div>
    <!-- /content area -->
</x-app-layout>
