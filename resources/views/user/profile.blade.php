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

                    <livewire:user.user-card-profile />

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
