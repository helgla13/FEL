<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pashashayt</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <link href="{{ asset('css/main.css') }} " rel="stylesheet" />
    <script type="text/javascript" src="{{ asset('tinymce/tinymce.min.js') }} "></script>
    <script>tinymce.init({
            selector:'textarea',
            height: 500,
            width: 1000,
            theme: 'modern',
            plugins: 'print preview fullpage paste searchreplace autolink directionality  visualblocks visualchars' +
            ' fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc' +
            ' insertdatetime advlist lists textcolor wordcount   imagetools   contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter' +
            ' alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
    });</script>



</head>
<body>
<div class="panel panel-default">
    <div class="panel-body" id="adpanel">
        <div class="col-sm-10">
            <h3>Adminka</h3>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-sm-2">

@include('admin.nav_adminka')

    </div>

    <div class="col-sm-10">

@yield('content')

    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('js/main.js') }} "></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDds93Qm757OAi-dsL4QlSKx0NT26Xj6x4&callback=myMap"></script>
</body>
</html>