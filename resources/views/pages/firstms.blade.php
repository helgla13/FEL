@extends('main')

@section('content')
    <div class="container-fluid">
        <div class="row spec">
            {!! $firstms->description!!}
            {{--<h3>Вступ на 1 курс (на базі молодшого спеціаліста)</h3>--}}
            {{--<p>Особи, які отримали освітньо-кваліфікаційний рівень «молодший спеціаліст», мають право брати участь--}}
                {{--у конкурсі за результатами зовнішнього незалежного оцінювання або <b>вступних іспитів</b> з таких--}}
                {{--конкурсних предметів:</p>--}}
{{--<ol>--}}
    {{--<li>Математика</li>--}}
    {{--<li>Фізика</li>--}}
{{--</ol>--}}
            {{--<p><b>Термін навчання</b></p>--}}
            {{--<p>бакалавр (на базі молодшого спеціаліста ) – 2 роки 10 місяців (3 навчальні роки).</p>--}}
            {{--<p>Ліцензійні обсяги набору абітурієнтів за освітнім рівнем «бакалавр» для вступників на основі здобутого--}}
                {{--освітньо-кваліфікаційного рівня «молодший спеціаліст»</p>--}}
{{--<table border="1">--}}
    {{--<tr>--}}
        {{--<th>Спеціальність</th>--}}
        {{--<th>Спеціалізація</th>--}}
        {{--<th colspan="2">Ліцензійний обсяг (для вступників на основі ОКР «молодший спеціаліст»)</th>--}}
    {{--</tr>--}}
    {{--<tr>--}}
        {{--<td rowspan="2">171 Електроніка</td>--}}
        {{--<td rowspan="2">Електронні та інформаційні технології кінематографії та аудіовізуальних систем</td>--}}
        {{--<td>денна</td>--}}
        {{--<td>заочна</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
        {{--<td>20</td>--}}
        {{--<td>0</td>--}}
    {{--</tr>--}}
{{--</table>--}}
            {{--<p>*Заплановано набір абітурієнтів за кошти фізичних та юридичних осіб  (в рамках ліцензованого обсягу)</p>--}}
            {{--<p><a href="http://pk.kpi.ua/entry-1-course-ms/">Більше інформації</a> про вступ на 1 курс на базі диплома молодшого спеціаліста.</p>--}}
        </div>
    </div>
    @endsection