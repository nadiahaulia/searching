<!DOCTYPE html>
{{-- <html lang="{{ app()->getLocale() }}"> --}}
<html lang="en" ng-app="main-App">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
          @include('inc.message')
          @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ URL::asset('../js/jquery.min.js') }}"></script>
  	<script src="{{ URL::asset('../js/bootstrap.min.js') }}"></script>
  	{{-- Angular JS --}}
  	<script src="{{ URL::asset('../js/angular.min.js') }}"></script>
  	<script src="{{ URL::asset('../js/angular-route.min.js') }}"></script>
  	{{-- App --}}
  	<script src="{{ URL::asset('app/routes.js') }}"></script>
  	<script src="{{ URL::asset('../app/dirPagination.js') }}"></script>
  	<script src="{{ URL::asset('../app/myServices.js') }}"></script>
  	<script src="{{ URL::asset('../app/myHelper.js') }}"></script>
  	{{-- App Controller --}}
  	<script src="{{ URL::asset('../app/BlogController.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <br><br>
    @include('inc.footer')
</body>
</html>
