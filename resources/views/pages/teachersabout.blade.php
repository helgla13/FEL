@extends('main')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
        <h1>{{$teacher->FIO}}</h1>
                <img class="phototeacher" src="{{$teacher->photo}}"/>
                <div id="teachabout">
        <p><b>Науковий ступінь:</b> {!! $teacher->science_degree !!}</p>
        <p><b>Посада:</b> {!! $teacher->position !!}</p>
        <p><b>Освіта:</b> {!! $teacher->education !!}</p>
        <p><b>Лекційні курси:</b> {!! $teacher->course !!}</p>
        <p><b>Публікації:</b> {!! $teacher->publications !!}</p>
        <p><b>Email:</b> {!! $teacher->email !!}</p>
        <p><b>Телефон:</b> {!! $teacher->tel !!}</p>
        <p><b>В сиситемі Intellect:</b><a href="{{$teacher->intelect}}"> {!! $teacher->intelect !!}</a></p>
        <p><b>Сторінка в Google Scholar:</b> <a href="#">{!! $teacher->googlescholar !!}</a></p>
                </div>

    </div>
    </div>
    </div>
    <div class="container-fluid">
        <div class="row tich">
            <div class="col-sm-12">
                <p>{!! $teacher->about !!}</p>
            </div>
        </div>
    </div>

@endsection