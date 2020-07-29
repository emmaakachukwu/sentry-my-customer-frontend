<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>mycustomer - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="MyCustomer - JusticeLeague" name="description" />
    <meta content="JusticeLeague" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/backend/assets/images/favicon.ico">

    <!-- plugins -->
    <link href="/backend/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css">
   <!--  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/shepherd/2.0.0-beta.1/css/shepherd-theme-arrows.css" />
    <link href="{{asset('backend/assets/css/tourguide.css')}}" rel="stylesheet" type="text/css"> -->



    <!-- Other Style CSS -->
    @yield('custom_css')


</head>

{{-- Checks if you are a new user, then show the mobile navbar for walkthrough. the mobile nav bar is hidden by default--}}
@if(\Illuminate\Support\Facades\Cookie::get('is_first_time_user') == true)
<body class="sidebar-enable">
@php
\Illuminate\Support\Facades\Cookie::queue('is_first_time_user', false);
@endphp
@else
<body>
@endif

    <!-- Begin page -->
    <div id="wrapper">
        @include('partials.bsidebar')

        <!--====================  heaer area ====================-->
        @include('partials.bheader')
        <!--====================  End of heaer area  ====================-->
        <div class="content-page">
            <div class="content">

                @yield('content')

            </div>

            <!--====================  footer area ====================-->
            @include('partials.bfooter')
            <!--====================  End of footer area  ====================-->
        </div>



    </div>

    <!-- JS
============================================ -->

    <!-- Vendor js -->
    <script src="/backend/assets/js/vendor.min.js"></script>

    <!-- optional plugins -->
    <script src="/backend/assets/libs/moment/moment.min.js"></script>
    <script src="/backend/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="/backend/assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- page js -->
    <script src="/backend/assets/js/pages/dashboard.init.js"></script>
    <script src="/backend/assets/js/pages/popper.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/shepherd/2.0.0-beta.1/js/shepherd.js"></script> -->


    <!-- App js -->
    <script src="/backend/assets/js/app.min.js"></script>
    <!-- <script src="/backend/assets/js/tourguide.js"></script> -->

    @yield('javascript')
</body>

</html>
