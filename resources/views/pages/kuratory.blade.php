@extends('main')

@section('content')
    <div class="container-fluid">
        <div class="row spec">
            {!! $kuratory->description!!}

            {{--<h3>Куратори груп</h3>--}}
            {{--<p>Куратори та старости навчальних груп (2017-2018 н.р.)</p>--}}
            {{--<img src="/img/kuratory_starosty-2018.png" id="cur">--}}
        </div>
    </div>
    @endsection