@extends('main')

@section('content')
    <div class="container-fluid">
        <div class="row spec">
            {!! $opendays->description!!}

            {{--<h3>Дні відкритих дверей</h3>--}}
            {{--<p>--}}
                {{--<b>21 квітня 2018 р.</b> відбудеться День відкритих дверей КПІ ім. Ігоря Сікорського <b>KPI Science--}}
                    {{--Fest.</b></p>--}}
            {{--<p>Місце проведення – 1 корпус, Велика фізична аудиторія (корпус 1), Державний політехнічний музей, НТБ ім.--}}
                {{--Г.І. Денисенка, навчальні підрозділи КПІ ім. Ігоря Сікорського.</p>--}}
{{--<p>Час проведення – з 09.00 до 15.00:</p>--}}
            {{--<ul>--}}
                {{--<li>09.00 – реєстрація учасників (корпус 1);</li>--}}
                {{--<li>09.00 – 12.00 – робота майданчиків (майстер-класи, презентації, тематичні конкурси, інформація про--}}
                    {{--навчальні підрозділи, розповсюдження профорієнтаційних матеріалів), консультаційних та--}}
                    {{--інформаційних пунктів;</li>--}}
                {{--<li>11.00 – 12.00 – загальні збори у Великій фізичній аудиторії, інформація щодо Правил прийому до КШ--}}
                    {{--ім. Ігоря Сікорського у 2018 році;</li>--}}
                {{--<li><b>12.00 – 15.00</b> – «Дні відкритих дверей» факультетів/інститутів, зокрема, на--}}
                    {{--<b><i style="color: cornflowerblue">факультеті електроніки</i></b> та--}}
                    {{--<b><i style="color: cornflowerblue">кафедрі звукотехніки та реєстрації інформації</i></b>--}}
                    {{--(12 корпус).</li>--}}
            {{--</ul>--}}
            {{--<p>Дні відкритих дверей для абітурієнтів на <b>кафедрі</b>:</p>--}}
            {{--<table border="1" class="opendaystab">--}}
                {{--<th>День</th>--}}
                {{--<th>Час</th>--}}
                {{--<th>Аудиторія</th>--}}
                {{--<tr>--}}
                    {{--<td>23 квітня 2018 р.</td>--}}
                    {{--<td>15.00</td>--}}
                    {{--<td>215б, 12 корп.</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>2 травня 2018 р.</td>--}}
                    {{--<td>15.00</td>--}}
                    {{--<td>215б, 12 корп.</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>14 травня 2018 р.</td>--}}
                    {{--<td>15.00</td>--}}
                    {{--<td>215б, 12 корп.</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>23 травня 2018 р.</td>--}}
                    {{--<td>15.00</td>--}}
                    {{--<td>215б, 12 корп.</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>4 червня 2018 р.</td>--}}
                    {{--<td>15.00</td>--}}
                    {{--<td>215б, 12 корп.</td>--}}
                {{--</tr>--}}
            {{--</table>--}}
            {{--<p>Дні відкритих дверей на <b>факультеті електроніки</b>:</p>--}}
            {{--<table border="1" class="opendaystab">--}}
                {{--<th>День</th>--}}
                {{--<th>Час</th>--}}
                {{--<th>Аудиторія</th>--}}
                {{--<tr>--}}
                    {{--<td>20 квітня 2018 р.</td>--}}
                    {{--<td>17.00</td>--}}
                    {{--<td>412, 12 корп.</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>18 травня 2018 р.</td>--}}
                    {{--<td>17.00</td>--}}
                    {{--<td>412, 12 корп.</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>30 червня 2018 р.</td>--}}
                    {{--<td>12.00</td>--}}
                    {{--<td>412, 12 корп.</td>--}}
                {{--</tr>--}}
            {{--</table>--}}
            {{--<p>Відповідальний за роботу з абітурієнтами на кафедрі: <b>Гребінь Олександр Павлович</b></p>--}}
            {{--<p>Телефон для довідок: (050) 330-83-54</p>--}}
            {{--<img src="/img/opendays.jpg" id="openimg">--}}

        </div>

    </div>




    @endsection