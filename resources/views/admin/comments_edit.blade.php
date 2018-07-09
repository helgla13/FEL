@extends('admin.adminka.adminka')

@section('content')

    <div class="row">
        <div class="col-sm-12">

            <form method="POST" action="/admin/adminka/comments/comments_edit/{{$comm->id}}">
                {{ csrf_field() }}
                <textarea>{!! $comm->comment !!}</textarea>




            </form>
        </div>
    </div>

@endsection