<!DOCTYPE html>

<html lang="en">

@include('site.layouts.page-header')


<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="{{asset('assets/site/images/header/loadinganimation.gif')}}" id="preloader_image"
                alt="loader">
        </div>
    </div>
    <!-- Top Scroll End -->
    @include('site.layouts.page-top-menus')
 
    

    @yield('content')


    @include('site.layouts.page-footer')
    @yield('scripts')
</body>

</html>