<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>{{ config('app.name', 'Quoting Tool') }}</title>

  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('css/flag-icon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cs-skin-elastic.css') }}">
  <link rel="stylesheet" href="{{ asset('scss/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/lib/vector-map/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->

    <!-- navigation baar file include here -->
     @include('includes.navbar')

     <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        @include('includes.header')
        <!-- /header -->
        <!-- Header-->

    <!-- .content -->
      @yield('content')
    <!-- /#right-panel -->
    </div>

    <script src="{{asset('js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/lib/chart-js/Chart.bundle.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="{{asset('js/widgets.js')}}"></script>
    <script src="{{asset('js/lib/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('js/lib/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
 

