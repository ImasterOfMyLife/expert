<!DOCTYPE html>
<html>
<head>
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <title>ЭкспертЦЕНТР</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/datepicker/bootstrap-datetimepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('js/jquery-ui-1.12.1.custom/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/b0fd7bf54f.js"></script>
    <script src="{{ URL::asset('js/moment-with-locales.js') }}"></script>
    <script src="{{ URL::asset('js/datepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>

    <script type="text/javascript">
        $.ajaxSetup({
         headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
     });
 </script>

<style type="text/css">
    ul#ui-id-1{
        z-index: 10;
    }
</style>

</head>
<body>
    <div class="container">
        @yield('content')            
    </div>

    @yield('footer')
</body>
@include('afterScripts')
</html>
