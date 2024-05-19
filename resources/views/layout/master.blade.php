<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{asset('demo_admin/src/assets/css/styles.min.css')}}" />


  <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">

  @yield('css')

</head>

<body>




    @include('layout.sidebar')

    <div class="body-wrapper">

        @include('layout.header')


        @yield('content')


  </div>

  <script src="{{asset('demo_admin/src/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('demo_admin/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('demo_admin/src/assets/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('demo_admin/src/assets/js/app.min.js')}}"></script>


  {{-- <script src="{{asset('demo_admin/src/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('demo_admin/src/assets/js/dashboard.js')}}"></script>
  <script src="{{asset('assets/css/bootstrap.min.css')}}"></script> --}}





  @yield('js')
  <script src="{{asset('assets/js/index.js')}}"></script>



</body>

</html>
