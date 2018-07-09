@extends('admin.adminka.adminka')

@section('content')

    <div class="row">
        <div class="col-sm-12">

            <form method="post">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                {{ csrf_field() }}

            <div class="container-fluid">
                <table border="1" id="comments">
                    <th>Користувач</th>
                    <th>Дата</th>
                    <th>Коментарій</th>
                    <th>Активний</th>

                    @foreach($coms as $com)
                        <tr>
                            <td>{!! $com->user_id !!}</td>
                            <td>{!! $com->created_at !!}</td>
                            <td>{!! $com->comment!!}</td>
                            <td><input type="checkbox" class="custom-control-input" name="{{$com->id}}" id="isactivecom{{$com->id}}"  @if ($com->is_active) checked @endif></td>

                        </tr>
                    @endforeach
                </table>
            </div>
            {{$coms->links()}}
            </form>
        </div>
    </div>

@endsection