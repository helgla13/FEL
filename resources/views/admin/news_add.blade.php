@extends('admin.adminka.adminka')

@section('content')

    <form method="POST" action="/admin/adminka/news/news_add" enctype=multipart/form-data>
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-sm-9">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text"  size="40" class="form-control"  id="title" name="title">
            </div>

            <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
            <input type="file" name="input_img">

            <textarea name="descr"></textarea>
        </div>

    </div>
    <button type="submit" class="btn btn-info btnsave">Зберігти</button>
    </form>


@endsection