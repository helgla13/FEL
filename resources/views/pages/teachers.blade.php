@extends('main')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            @foreach($teachers as $teacher)

                <div class="container-fluid">
                    <a href='{{route('teachersShow',['id'=>$teacher->id])}}'><h3>{!! $teacher->FIO !!}</h3></a>
                    <br>

                    <img class="phototeacher" src="{{$teacher->photo}}"/>

                   <div class="infoteacher">
                       <p><b>Науковий ступінь:</b> {!! $teacher->science_degree !!}</p>
                       <p><b>Посада:</b> {!! $teacher->position !!}</p>
                       <p><b>Освіта:</b> {!! $teacher->education !!}</p>
                       <p><b>Лекційні курси:</b> {!! $teacher->course !!}</p>
                       <p><b>Публікації:</b> {!! $teacher->publications !!}</p>
                   </div>

                </div>
                <hr>
            @endforeach
            {{$teachers->links()}}
        </div>
    </div>

    @endsection