<div class="page-sidebar ">


    <!-- MAIN MENU - START -->
    <div class="page-sidebar-wrapper" id="main-menu-wrapper">

        <!-- USER INFO - START -->
        <div class="profile-info row">

            <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                <a href="ui-profile.html">
                    <img src="data/profile/profile.png" class="img-responsive img-circle">
                </a>
            </div>

            <div class="profile-details col-md-8 col-sm-8 col-xs-8">

                <h3>
                    <a href="ui-profile.html">Salako Adetunji</a>

                    <!-- Available statuses: online, idle, busy, away and offline -->
                    <span class="profile-status online"></span>
                </h3>

                <p class="profile-title">Blogger</p>

            </div>

        </div>
        <!-- USER INFO - END -->



        <ul class='wraplist'>


            <li class="{{ Request::is('/')? "open" : "" }}">
                <a href="/">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Home</span>
                </a>
            </li>
            <li class="{{ Request::is('blog')? "open" : "" }}">
                <a href="/blog">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Blog</span>
                </a>
            </li>
            <li class="{{ Request::is('blog')? "open" : "" }}">
                <a href="{{route('categories.index')}}">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Categories</span>
                </a>
            </li>
            <li class="{{ Request::is('blog')? "open" : "" }}">
                <a href="{{route('tags.index')}}">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Tags</span>
                </a>
            </li>

        </ul>

    </div>
    <!-- MAIN MENU - END -->

</div>