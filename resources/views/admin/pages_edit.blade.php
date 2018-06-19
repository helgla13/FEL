@extends('admin.adminka.adminka')

@section('content')

    <form method="POST" action="/admin/adminka/pages/pages_edit/{{$peg->id}}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-12">

                <div class="form-group">
                    <label for="titl">Title</label>
                    <input type="text"  size="40" class="form-control"  id="titl" value="{{$peg->name}}" name="name">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <textarea name="descr">{!! $peg->description !!}</textarea>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-info btnsave">Зберігти</button>
    </form>

@endsection