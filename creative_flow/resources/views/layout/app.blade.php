<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includes.head')
    <title>@yield('title')</title>
  </head>

  <body>
    <main class="change-gradient">
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
    </main>

    <!-- Jquery js -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('assets/js/boostrap.bundle.min.js') }}"></script>
    <!-- CountDown -->
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <!-- counter up -->
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
    <!-- apex chart -->
    <script src="{{ asset('assets/js/apexchart.js') }}"></script>
    <!-- marquee -->
    <script src="{{ asset('assets/js/marquee.min.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>