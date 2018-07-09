@extends('main')

@section('content')
    <div class="container-fluid">
        <div class="row spec">

               {{--{!! $farh->description!!}--}}

            <form action="/file_archive" method=post enctype=multipart/form-data>
                {{ csrf_field() }}
                <h2>Выберите файл</h2>
                <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                <input type="file" name="input_img">
                <input type="submit" name="send-request" value="Загрузить"></form>


        </div>
    </div>
    @endsection