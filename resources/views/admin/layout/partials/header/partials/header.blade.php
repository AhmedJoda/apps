<!-- Header start -->
<header class="header">
    <div class="logo-wrapper">
        <a href="index.html" class="logo">
            <img src="{{getUrl(setting('logo'))}}" alt="main-logo">
        </a>
        <a href="#" class="quick-links-btn" data-toggle="tooltip" data-placement="right" title=""
            data-original-title="Quick Links">
            <i class="icon-menu1"></i>
        </a>
    </div>
    <div class="header-items">
        <!-- Custom search start -->
        <div class="custom-search">
            <input type="text" class="search-query" placeholder="Search here ...">
            <i class="icon-search1"></i>
        </div>
        <!-- Custom search end -->

        <!-- Header actions start -->
        <ul class="header-actions">
            <li class="dropdown">
                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                    <i class="icon-box"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                    <div class="dropdown-menu-header">
                        Tasks (05)
                    </div>
                    <ul class="header-tasks">
                        <li>
                            <p>#48 - Dashboard UI<span>90%</span></p>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                    <span class="sr-only">90% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <p>#95 - Alignment Fix<span>60%</span></p>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <p>#7 - Broken Button<span>40%</span></p>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                    <i class="icon-bell"></i>
                    <span class="count-label">8</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                    <div class="dropdown-menu-header">
                        Notifications (40)
                    </div>
                    <ul class="header-notifications">
                        <li>
                            <a href="#">
                                <div class="user-img away">
                                    <img src="{{asset('assets/dashboard')}}/img/user21.png" alt="User" />
                                </div>
                                <div class="details">
                                    <div class="user-title">Abbott</div>
                                    <div class="noti-details">Membership has been ended.</div>
                                    <div class="noti-date">Oct 20, 07:30 pm</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-img busy">
                                    <img src="{{asset('assets/dashboard')}}/img/user10.png" alt="User" />
                                </div>
                                <div class="details">
                                    <div class="user-title">Braxten</div>
                                    <div class="noti-details">Approved new design.</div>
                                    <div class="noti-date">Oct 10, 12:00 am</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-img online">
                                    <img src="{{asset('assets/dashboard')}}/img/user6.png" alt="User" />
                                </div>
                                <div class="details">
                                    <div class="user-title">Larkyn</div>
                                    <div class="noti-details">Check out every table in detail.</div>
                                    <div class="noti-date">Oct 15, 04:00 pm</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">

                    @if(!is_null(config('admin-auth.defaults.guard')))
                    <span class="user-name">{{ Auth::guard(config('admin-auth.defaults.guard'))->check() ?
                        Auth::guard(config('admin-auth.defaults.guard'))->user()->full_name : 'Anonymous' }}</span>
                    @else
                    <span class="user-name">{{ Auth::check() ? Auth::user()->full_name : 'Anonymous' }}</span>
                    @endif

                    @if(Auth::check() && Auth::user()->avatar_thumb_url)
                    <img src="{{ Auth::user()->avatar_thumb_url }}" class="avatar-photo">
                    @elseif(Auth::check() && Auth::user()->first_name && Auth::user()->last_name)
                    <span class="avatar">{{ mb_substr(Auth::user()->first_name, 0, 1) }}{{
                        mb_substr(Auth::user()->last_name, 0, 1) }}</span>
                    @elseif(Auth::check() && Auth::user()->name)
                    <span class="avatar">{{ mb_substr(Auth::user()->name, 0, 1) }}</span>
                    @elseif(Auth::guard(config('admin-auth.defaults.guard'))->check() &&
                    Auth::guard(config('admin-auth.defaults.guard'))->user()->first_name &&
                    Auth::guard(config('admin-auth.defaults.guard'))->user()->last_name)
                    <span class="avatar">{{
                        mb_substr(Auth::guard(config('admin-auth.defaults.guard'))->user()->first_name, 0, 1) }}{{
                        mb_substr(Auth::guard(config('admin-auth.defaults.guard'))->user()->last_name, 0, 1) }}</span>
                    @else
                    <span class="avatar"><i class="fa fa-user"></i></span>
                    @endif

                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                    <div class="header-profile-actions">
                        <div class="header-user-profile">
                            <div class="header-user">
                                @if(Auth::check() && Auth::user()->avatar_thumb_url)
                                <img src="{{ Auth::user()->avatar_thumb_url }}" class="avatar-photo">
                                @endif
                            </div>
                            <h5>{{ Auth::check() ? Auth::user()->full_name : 'Anonymous' }}</h5>
                            <p>Admin</p>
                        </div>
                        <a href="{{ url('admin/profile') }}"><i class="icon-user1"></i> الملف الشخصي</a>

                        {!! Form::open(['url' => route('logout'),'method' => 'post' ,'id'=> 'logout']) !!}
                        <a class="btn" onclick="document.getElementById('logout').submit();">
                            <i class="icon-log-out1"></i> تسجيل الخروج
                        </a>
                        {!! Form::close() !!}
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="quick-settings-btn" data-toggle="tooltip" data-placement="left" title=""
                    data-original-title="Quick Settings">
                    <i class="icon-list"></i>
                </a>
            </li>
        </ul>
        <!-- Header actions end -->
    </div>
</header>
<!-- Header end -->