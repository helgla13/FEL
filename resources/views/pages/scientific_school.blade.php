@extends('main')

@section('content')
    <div class="container-fluid">
        <div class="row spec">
            {!! $sschool->description!!}
            {{--<h3>Наукова школа</h3>--}}
            {{--<p>На кафедрі звукотехніки функціонує наукова школа <i>«Удосконалення технологій та технічних засобів створення--}}
                    {{--і розповсюдження аудіо-візуального контенту»,</i> заснована заслуженим діячем науки і техніки--}}
                {{--України, лауреатом державної премії України, д.т.н., професором <b>В.Г. Абакумовим</b>.</p>--}}
            {{--<p>Після виходу В.Г. Абакумова на пенсію роботу наукової школи очолили доктори технічних наук, професори--}}
                {{--Г.М. Розорінов та Г.Г. Власюк. Традиційними напрямами досліджень є технології оброблення звукових та--}}
                {{--відеосигналів, системи та засоби передавання і зберігання аудіо-візуальної інформації.</p>--}}
            {{--<p>Професор Г.Г. Власюк започаткувала новий напрям наукових досліджень, пов’язаний зі створенням--}}
                {{--тривимірних об’єктів віртуальної реальності та комп’ютерною анімацією.  До наукової роботи в межах--}}
                {{--тематики наукової школи долучилась і наукова група професора В.В. Пілінського. Фахівці цієї групи--}}
                {{--зосереджені головним чином на вирішенні проблем електромагнітної сумісності аудіовізуальних технічних--}}
                {{--засобів та засобів передавання мультимедійної інформації.</p>--}}
            {{--<p>На тепер всі НПП кафедри здійснюють наукові дослідження за напрямами діяльності наукової школи.</p>--}}
        </div>
    </div>


    @endsection