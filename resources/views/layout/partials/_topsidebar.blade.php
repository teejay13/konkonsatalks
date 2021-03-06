<div class='page-topbar '>
    <div class='logo-area'>

    </div>
    <div class='quick-area'>
        <div class='pull-left'>
            <ul class="info-menu left-links list-inline list-unstyled">
                <li class="sidebar-toggle-wrap">
                    <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class='pull-right'>
            <ul class="info-menu right-links list-inline list-unstyled">
                @if(Auth::check())
                <li class="profile">
                    <a href="#" data-toggle="dropdown" class="toggle">
                        <img src="data/profile/profile.png" alt="user-image" class="img-circle img-inline">
                        <span> {{ Auth::user()->name }} <i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul class="dropdown-menu profile animated fadeIn">
                        <li>
                            <a href="{{ route('posts.index') }}">
                                <i class="fa fa-wrench"></i>
                                Posts
                            </a>
                        </li>
                        <li>
                            <a href="#profile">
                                <i class="fa fa-user"></i>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="#help">
                                <i class="fa fa-info"></i>
                                Help
                            </a>
                        </li>
                        <li class="last">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-lock"></i>
                                Logout
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </a>
                        </li>
                    </ul>
                </li>

                @else
                    <a href="{{ route('login') }}" class="btn btn-default">Login</a>

                @endif
            </ul>
        </div>
    </div>

</div>