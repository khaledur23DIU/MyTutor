<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Tutor') }}</title>
  <!-- GOOGLE FONT -->

  <!-- CSS FILES -->
  <!-- CSS only -->
  <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->

  <!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/assets/css/all.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/assets/css/fontawesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/assets/css/owl.carousel.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/assets/css/owl.theme.default.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/assets/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/assets/css/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  @stack('css')
</head>

<body>

  @include('layouts.frontend.partials.header')
  @include('layouts.frontend.partials.side-nav')

    <!----Header sidenav Area End----->

    @yield('content')


  <!-- Footer Start -->
  @include('layouts.frontend.partials.footer')
  <!-- Footer End -->

  <!-- JS FILES -->
  <!-- JavaScript Bundle with Popper -->
  <script src="{{asset('assets/frontend/assets/js/jquery.min.js')}}"></script>
  <!-- <script src="assets/js/popper.js')}}"></script> -->
  <script src="{{asset('assets/frontend/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/frontend/assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/frontend/assets/js/custom.js')}}"></script>
  <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  {!! Toastr::message() !!}
  @stack('js')
</body>

</html>