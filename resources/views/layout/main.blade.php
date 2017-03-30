@include('layout.partials._head')
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class=" "><!-- START TOPBAR -->
    @include('layout.partials._topsidebar')
<!-- END TOPBAR -->
<!-- START CONTAINER -->
<div class="page-container row-fluid">

    <!-- SIDEBAR - START -->
    @include('layout.partials._sidebar')
    <!--  SIDEBAR - END -->
    <!-- START CONTENT -->
    <section id="main-content" class="">
        <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

            @include('layout.partials._messages')

            {{Auth::check()? "Logged In" : "Logged out"}}
            @yield('content')

            <p class="text-center">Copyright Teejay - All Rights Reserved</p>
        </section>
    </section>
    <!-- END CONTENT -->



</div>

<!-- END CONTAINER -->
<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

@include('layout.partials._footer');
<!-- CORE JS FRAMEWORK - START -->

{{--<script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="assets/js/chart-sparkline.js" type="text/javascript"></script>--}}
<!-- Sidebar Graph - END -->

</body>
</html>


