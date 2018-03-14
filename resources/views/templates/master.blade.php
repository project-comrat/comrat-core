<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <!--link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"-->
    <!--Import materialize.css with roboto font & material icons font-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}"  media="screen,projection"/>
    <!--Import custom css comrat.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/comrat.css') }}"  media="screen,projection"/>

    <!--Place to put internal css where needed-->
    @yield('css')
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body >
@include('templates.navbar')
<div id="app">
    @yield('content')
</div>


<!--Import jQuery before anything*.js-->
<!--script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"/-->
<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>

<!--Place to put internal js or extra scripts where needed-->
@yield('js')
</body>
<script type="text/javascript">
    $(".button-collapse").sideNav();
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
</html>