@extends('main')

@section('content')
    <div class="container-fluid">
        <div class="row spec">

            {!! $navplany->description!!}

            {{--<h3>Навчальні плани</h3>--}}
            {{--<p>Витяг з навчального плану підготовки бакалаврів за спеціальністю 171 Електроніка, спеціалізація--}}
                {{--“Електронні та інформаційні технології кінематографії та аудіовізуальних систем” (набір 2017 р.)<p>--}}
                {{--<ul>--}}
                {{--<li><a href="/docs/2.06_NP_bak_2017_Electronika_ZTRI.pdf">Завантажити у .pdf форматі</a></li>--}}
                {{--<li><a href="/docs/2.06_NP_bak_2017_Electronika_ZTRI.xls"> Завантажити у .xls форматі</a></li>--}}
            {{--</ul>--}}
            {{--<p>Витяг з інтегрованого навчального плану підготовки бакалаврів за спеціальністю 171 Електроніка,--}}
                {{--спеціалізація “Електронні та інформаційні технології кінематографії та аудіовізуальних систем”--}}
                {{--(набір 2017 р.) </p>--}}
            {{--<ul>--}}
                {{--<li><a href="/docs/Integrov_NP_bak_2017_Elektronika_ZTRI.pdf">Завантажити у .pdf форматі</a></li>--}}
                {{--<li><a href="/docs/Integrov_NP_bak_2017_Elektronika_ZTRI.xls"> Завантажити у .xls форматі</a></li>--}}
            {{--</ul>--}}
            {{--<p>Витяг з навчального плану підготовки магістрів за спеціальністю 171 Електроніка, спеціалізація--}}
                {{--“Електронні та інформаційні технології кінематографії та аудіовізуальних систем” за--}}
                {{--<b>освітньо-науковою</b> програмою магістерської підготовки (набір 2017 р.)</p>--}}
            {{--<ul>--}}
                {{--<li><a href="/docs/NP_MAG_2017_nauk_Elektronika_ZTRI.pdf">Завантажити у .pdf форматі</a></li>--}}
                {{--<li><a href="/docs/NP_MAG_2017_nauk_Elektronika_ZTRI.xls"> Завантажити у .xls форматі</a></li>--}}
            {{--</ul>--}}
            {{--<p>Витяг з навчального плану підготовки магістрів за спеціальністю 171 Електроніка, спеціалізація--}}
                {{--“Електронні та інформаційні технології кінематографії та аудіовізуальних систем” за--}}
                {{--<b>освітньо-професійною</b> програмою магістерської підготовки (набір 2017 р.)</p>--}}
            {{--<ul>--}}
                {{--<li><a href="/docs/NP_MAG_2017_prof_Elektronika_ZTRI.pdf">Завантажити у .pdf форматі</a></li>--}}
                {{--<li><a href="/docs/NP_MAG_2017_prof_Elektronika_ZTRI.xls"> Завантажити у .xls форматі</a></li>--}}
            {{--</ul>--}}
        </div>
    </div>
    @endsection