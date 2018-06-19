<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fel KPI</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <link href="{{ asset('css/main.css') }} " rel="stylesheet" />



</head>
<body>

@include('layouts.nav')

<div class="row">

    <div class="col-sm-2 bok">

        @include('layouts.left')


    </div>


    <div class="col-sm-8">

@yield('content')

    </div>

    <div class="col-sm-2 bok">

        @include('layouts.right')

    </div>



</div>

@include('layouts.footer')



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('js/main.js') }} "></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDds93Qm757OAi-dsL4QlSKx0NT26Xj6x4&callback=myMap"></script>
</body>
</html>