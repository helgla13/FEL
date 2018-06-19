@extends('main')

@section('content')
    <div class="container-fluid">
        <div class="row spec">
            {!! $scgroups->description!!}

{{--<h3>Наукові групи</h3>--}}
            {{--<p>Наукові напрями і групи:</p>--}}
            {{--<ol class="naukg">--}}
                {{--<li><i>Запис-відтворення сигналів кіно і телебачення (твердотільний, оптичний, магнітний),  системи їх--}}
                        {{--захисту від несанкціонованого доступу та методи перетворення аудіо- і відеосигналів.</i>--}}
                    {{--Науковий керівник – д.т.н., проф.<b>Розорінов Г.М.</b> В групі <b>8</b> студентів.--}}
                    {{--Група виконує <b>3</b> ініціативні НДР:</li>--}}
                {{--<ul>--}}
                    {{--<li>“Захист конфіденційної інформації на твердотільних носіях”. Держ. реєстр. № 0117U002167.--}}
                        {{--Термін виконання 02.2017 – 12.2019.</li>--}}
                    {{--<li>“Методи і засоби керування водовідливними установками”. Держ. реєстр. № 0117U002168. Термін--}}
                        {{--виконання 02.2017 – 12.2019.</li>--}}
                    {{--<li>“Моделювання активних елементів ультразвукового обладнання на основі методу симетрій”. Держ.--}}
                        {{--реєстр. № 0117U000202. Термін виконання 02.2017 – 02.2020.</li>--}}
                {{--</ul>--}}
                {{--<li><i>Створення звукових і відео програм, організація інформаційно-розважальних заходів, технічне--}}
                        {{--забезпечення кіно і телебачення, включаючи оптику і світлотехніку.</i> Науковий керівник –--}}
                    {{--к.т.н., доц. <b>Швайченко В.Б.</b> В групі <b>5</b> студентів.</li>--}}
                {{--<li><i>Вдосконалення проводових і безпроводових інформаційно-комунікаційних систем і мереж для--}}
                        {{--передавання аудіовізуального контенту, забезпечення їх безпеки, технічний зір.</i>--}}
                    {{--Науковий керівник – к.т.н., доц. <b>Лазебний В.С.</b> В групі <b>13</b> студентів. Група виконує--}}
                    {{--<b>1</b> ініціативну НДР:</li>--}}
                {{--<ul>--}}
                    {{--<li>“Удосконалення процесу передавання аудіовізуальної інформації засобами безпроводових мереж”.--}}
                        {{--Держ. реєстр. № 0117U001676. Термін виконання 07.2017 – 12.2018.</li>--}}
                {{--</ul>--}}
                {{--<li><i>Застосування комп’ютерної багатовимірної графіки для створення спецефектів у кіно і телебаченні,--}}
                        {{--нелінійний монтаж аудіо- і відеоматеріалів, вимірювання параметрів сигналів і устаткування.</i>--}}
                    {{--Науковий керівник – д.т.н., проф. <b>Власюк Г.Г.</b> В групі <b>5</b> студентів. Група виконує--}}
                    {{--<b>1</b> ініціативну НДР:</li>--}}
                {{--<ul>--}}
                    {{--<li>“Автоматизовані технології оптимізації процесів життєдіяльності студентів”. Держ. реєстр.--}}
                        {{--№ 0117U000457. Термін виконання 02.2017 – 12.2019.</li>--}}
                {{--</ul>--}}
                {{--<li><i>Електромагнітна сумісність, електроживлення, надійність, електромагнітна екологія систем кіно--}}
                        {{--і телебачення.</i> Науковий керівник – к.т.н., проф. <b>Пілінський В.В.</b> В групі <b>7</b>--}}
                    {{--студентів. Група виконує <b>1</b> НДР:</li>--}}
                {{--<ul>--}}
                    {{--<li>Госпдоговірна НДР “Гармонізація Європейських стандартів в Україні (8 стандартів у галузі ЕМС)--}}
                        {{--для різної електронної апаратури”.</li>--}}
                {{--</ul>--}}
            {{--</ol>--}}
        </div>
    </div>
    @endsection