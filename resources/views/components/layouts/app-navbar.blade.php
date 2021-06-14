<!-- Main navbar -->
<div class="navbar navbar-expand-lg navbar-dark navbar-static">

    <div class="d-flex flex-1 d-lg-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-paragraph-justify3"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-transmission"></i>
        </button>
    </div>

    <div class="navbar-brand text-center text-lg-left">
        <a href="/" class="d-inline-block">
            <img src="{{ asset('limitless/global/images/logo_light.png') }}" class="d-none d-sm-block" alt="Logo">
            <img src="{{ asset('limitless/global/images/logo_icon_light.png') }}" class="d-sm-none" alt="Logo">
        </a>
    </div>

    <div class="collapse navbar-collapse order-2 order-lg-1" id="navbar-mobile">
        <!-- Notification
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link" data-toggle="dropdown">
                    <i class="icon-bell3"></i>
                    <span class="d-lg-none ml-3">Notification</span>
                    <span class="badge badge-warning badge-pill ml-auto ml-lg-0">9</span>
                </a>

                <div class="dropdown-menu dropdown-content wmin-lg-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Notification</span>
                        <a href="#" class="text-body"><i class="icon-sync"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-primary text-primary rounded-pill border-2 btn-icon">
                                        <i class="icon-user-plus"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    New User is registered
                                    <div class="text-muted font-size-sm">4 minutes ago</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="#" class="text-body mr-auto">All notifications</a>
                    </div>
                </div>
            </li>
        </ul>
        -->
        <div id="online-status">
            <span class="badge badge-success my-3 my-lg-0 ml-lg-3">Online</span>
        </div>


        <!-- Users
        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link" data-toggle="dropdown">
                    <i class="icon-people"></i>
                    <span class="d-lg-none ml-3">Messages</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-lg-300">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Some of users</span>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">

                                    <img src="{{ asset('limitless/global/images/demo/users/face18.jpg') }}"
                                         width="36"
                                         height="36"
                                         class="rounded-circle" alt="Online Users">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
                                    <span class="d-block text-muted font-size-sm">Lead web developer</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="{{ asset('limitless/global/images/demo/users/face24.jpg') }}"
                                         width="36"
                                         height="36"
                                         class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Will Brason</a>
                                    <span class="d-block text-muted font-size-sm">Marketing manager</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="{{ asset('limitless/global/images/demo/users/face17.jpg') }}"
                                         width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
                                    <span class="d-block text-muted font-size-sm">Project manager</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="{{ asset('limitless/global/images/demo/users/face19.jpg') }}"
                                         width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
                                    <span class="d-block text-muted font-size-sm">Business developer</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-warning"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="{{ asset('limitless/global/images/demo/users/face16.jpg') }}"
                                         width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
                                    <span class="d-block text-muted font-size-sm">UX expert</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-secondary"></span></div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="#" class="text-body mr-auto">All users</a>
                        <a href="#" class="text-body"><i class="icon-gear"></i></a>
                    </div>
                </div>
            </li>
        </ul>
         /Users -->

        <!-- Lang
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('limitless/global/images/lang/gb.png') }}"
                         title="English"
                         class="img-flag mr-2"
                         alt="English">
                    English
                </a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item active english">
                        <img src="{{ asset('limitless/global/images/lang/gb.png') }}"
                             title="English"
                             class="img-flag"
                             alt="English">
                        English
                    </a>
                    <a href="#" class="dropdown-item french">
                        <img src="{{ asset('limitless/global/images/lang/fr.png') }}"
                             title="French"
                             class="img-flag"
                             alt="French"> French
                    </a>
                </div>
            </li>
        </ul>
         /Lang -->

    </div>

    <ul class="navbar-nav flex-row order-1 order-lg-2 flex-1 flex-lg-0 justify-content-end align-items-center">
        <!-- Messages
        <li class="nav-item nav-item-dropdown-lg dropdown">
            <a href="#" class="navbar-nav-link navbar-nav-link-toggler" data-toggle="dropdown">
                <i class="icon-bubbles4"></i>
                <span class="badge badge-warning badge-pill ml-auto ml-lg-0">2</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-lg-350">
                <div class="dropdown-content-header">
                    <span class="font-weight-semibold">Messages</span>
                    <a href="#" class="text-body"><i class="icon-compose"></i></a>
                </div>

                <div class="dropdown-content-body dropdown-scrollable">
                    <ul class="media-list">
                        <li class="media">
                            <div class="mr-3 position-relative">

                                <img src="{{ asset('images/user-icon.jpg') }}"
                                     width="36"
                                     height="36"
                                     class="rounded-circle"
                                     title="James Alexander"
                                     alt="James Alexander">
                            </div>

                            <div class="media-body">
                                <div class="media-title">
                                    <a href="#">
                                        <span class="font-weight-semibold">James Alexander</span>
                                        <span class="text-muted float-right font-size-sm">04:58</span>
                                    </a>
                                </div>

                                <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="mr-3 position-relative">
                                <img src="{{ asset('limitless/global/images/demo/users/face3.jpg') }}" width="36" height="36" class="rounded-circle" alt="">
                            </div>

                            <div class="media-body">
                                <div class="media-title">
                                    <a href="#">
                                        <span class="font-weight-semibold">Margo Baker</span>
                                        <span class="text-muted float-right font-size-sm">12:16</span>
                                    </a>
                                </div>

                                <span class="text-muted">That was something he was unable to do because...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="mr-3">
                                <img src="{{ asset('limitless/global/images/demo/users/face24.jpg') }}" width="36"
                                     height="36" class="rounded-circle" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-title">
                                    <a href="#">
                                        <span class="font-weight-semibold">Jeremy Victorino</span>
                                        <span class="text-muted float-right font-size-sm">22:48</span>
                                    </a>
                                </div>

                                <span class="text-muted">But that would be extremely strained and suspicious...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="mr-3">
                                <img src="{{ asset('limitless/global/images/demo/users/face4.jpg') }}" width="36"
                                     height="36" class="rounded-circle" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-title">
                                    <a href="#">
                                        <span class="font-weight-semibold">Beatrix Diaz</span>
                                        <span class="text-muted float-right font-size-sm">Tue</span>
                                    </a>
                                </div>

                                <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="mr-3">
                                <img src="{{ asset('limitless/global/images/demo/users/face25.jpg') }}" width="36"
                                     height="36" class="rounded-circle" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-title">
                                    <a href="#">
                                        <span class="font-weight-semibold">Richard Vango</span>
                                        <span class="text-muted float-right font-size-sm">Mon</span>
                                    </a>
                                </div>

                                <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="dropdown-content-footer justify-content-center p-0">
                    <a href="#" class="btn btn-light btn-block border-0 rounded-top-0"
                       data-popup="tooltip"
                       title="Load more">
                        <i class="icon-menu7"></i>
                    </a>
                </div>
            </div>
        </li>
         \Message -->

        <!-- User -->
        <li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
            <a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle d-inline-flex align-items-center h-100"
               data-toggle="dropdown">
                <img src="{{ asset(auth()->user()->profile_image) }}"
                     class="rounded-pill mr-lg-2"
                     height="34"
                     title="{{ auth()->user()->full_name }}"
                     alt="{{ auth()->user()->full_name }}">
                <span class="d-none d-lg-inline-block">{{ auth()->user()->full_name }}</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <i class="icon-user-plus"></i> My profile
                </a>
                <!--
                <a href="#" class="dropdown-item">
                    <i class="icon-coins"></i> My balance
                </a>
                <a href="#" class="dropdown-item">
                    <i class="icon-comment-discussion"></i>
                    Messages <span class="badge badge-primary badge-pill ml-auto">2</span>
                </a>
                -->
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="icon-cog5"></i> Account settings
                </a>
                <form method="POST" action="{{ route('logout') }}" id="logout-form">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="icon-switch2"></i> Logout</button>
                </form>
            </div>
        </li>
        <!--   /User -->
    </ul>

</div>
<!-- /main navbar -->
