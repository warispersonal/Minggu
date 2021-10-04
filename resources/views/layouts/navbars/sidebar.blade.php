<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <?php
        use Illuminate\Support\Facades\Auth;
        $route = 'star.dashboard';
        if (Auth::guard('admin')->check()) {
            $route = 'admin.dashboard';
        }
        if (Auth::guard('partner')->check()) {
            $route = 'partner.dashboard';
        }
        if (Auth::guard('superAdmin')->check()) {
            $route = 'star.dashboard';
        }
        ?>
        <a class="navbar-brand pt-0" href="{{route($route)}}">
            <img src="{{ asset('argon') }}/img/brand/logo.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{route($route)}}" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{route($route)}}">
                            <img src="{{ asset('argon') }}/img/brand/logo.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                                aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended"
                           placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">


                <!-- Menu SideBar For Super Admin -->
                @auth('superAdmin')
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('star.dashboard') ? 'active' : '' }}"
                           href="{{ route('star.dashboard') }}">
                            <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('star.admins') ? 'active' : '' }}"
                           href="{{ route('star.admins') }}">
                            <i class="fa fa-users text-primary"></i> {{ __('Manage Admins') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('star.partners') ? 'active' : '' }}"
                           href="{{ route('star.partners') }}">
                            <i class="fa fa-users text-primary"></i> {{ __('Manage Partners') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('star.users') ? 'active' : '' }}"
                           href="{{ route('star.users') }}">
                            <i class="ni ni-spaceship text-primary"></i> {{ __('Registrations') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('star.ref_submission') ? 'active' : '' }}"
                           href="{{ route('star.ref_submission') }}">
                            <i class="ni ni-spaceship text-primary"></i> {{ __('Ref Submission') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#page-content" data-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="navbar-examples">
                            <i class="fab fa-laravel text-primary"></i>
                            <span class="nav-link-text">{{ __('Page Content') }}</span>
                        </a>
                        <div class="collapse show" id="page-content">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('star.content.menu') }}">
                                        <i class="ni ni-ui-04 text-primary"></i> {{ __('Main Menu') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('star.content.theme') }}">
                                        <i class="ni ni-palette text-primary"></i> {{ __('Homepage & Theme Color') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('stars.homepage.index') }}">
                                        <i class="ni ni-palette text-primary"></i> {{ __('Approved Partner Changes') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('stars.homepage.index',2) }}">
                                        <i class="ni ni-palette text-primary"></i> {{ __('Pending Partner Changes') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('star.content.tonton') }}">
                                        <i class="ni ni-ui-04 text-primary"></i> {{ __('Tonton MSD Live') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('programs.index')}}">
                                        <i class="ni ni-ui-04 text-primary"></i> {{ __('Program & Jadual') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('star.MainDetail')}}">
                                        <i class="ni ni-ui-04 text-primary"></i> {{ __('Main Program') }}
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('star.faq')}}">
                                        <i class="ni ni-ui-04 text-primary"></i> {{ __('Soalan Lazim') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#comp-system" data-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="navbar-examples">
                            <i class="fab fa-laravel text-primary"></i>
                            <span class="nav-link-text">{{ __('Competition System') }}</span>
                        </a>
                        <div class="collapse" id="comp-system">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('star.viewSubmission')}}">
                                        <i class="ni ni-ui-04 text-primary"></i> {{ __('View Submissions') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('star.compitition.filter') }}">
                                        <i class="ni ni-ui-04 text-primary"></i> {{ __('Upload Filter') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('star.compitition.dailywinner') }}">
                                        <i class="ni ni-ui-04 text-primary"></i> {{ __('Generator “Daily” Winners') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('star.compitition.ringgitEmasWinner')}}">
                                        <i class="ni ni-ui-04 text-primary"></i> {{ __('Generate “Ringgit Emas” Winner') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('star.compitition.getLuckyDrawWinnerList')}}">
                                        <i class="ni ni-ui-04 text-primary"></i> {{ __('Generate “Lucky Draw” Winner') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endauth

                @auth('admin')
                    <h6 class="container navbar-heading text-muted">Page Content Settings</h6>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('admin.dashboard')}}">
                            <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.programs.index')}}">
                            <i class="ni ni-spaceship text-primary"></i> {{ __('Program & Jadual') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.faq')}}">
                            <i class="ni ni-ui-04 text-primary"></i> {{ __('Soalan Lazim') }}
                        </a>
                    </li>
                @endauth

                @auth('partner')
                    <h6 class="container navbar-heading text-muted">Edit Partner Page</h6>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('partner.dashboard')}}">
                            <i class="ni ni-ui-04 text-primary"></i> {{ __('Partner Info') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('partner.unique.info')}}">
                            <i class="ni ni-ui-04 text-primary"></i> {{ __('Update Partner Info') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('partner.show.promotion')}}">
                            <i class="ni ni-ui-04 text-primary"></i> {{ __('Promotions') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('partner.show.button')}}">
                            <i class="ni ni-ui-04 text-primary"></i> {{ __('Buttons') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('partner.show.slider')}}">
                            <i class="ni ni-ui-04 text-primary"></i> {{ __('Sliders') }}
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
