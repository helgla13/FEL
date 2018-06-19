@extends('admin.adminka.adminka')

@section('content')

    <div class="row">
        <div class="col-sm-12">

            <div class="container-fluid">
                <table border="1" id="aduser">
                    <th>Title</th>
                    <th>Edit</th>
                    @foreach($pg as $peg)
                        <tr>
                            <td>{!! $peg->name !!}</td>
                            <td><a href='{{route('pegShow',['id'=>$peg->id])}}' class='btn btn-info' role='button' >
                                    <span class="glyphicon glyphicon-pencil"></span></a></td>
                        </tr>
                    @endforeach
                </table>
            </div>


        </div>
    </div>



@endsection










{{--@section('content')--}}

    {{--<form method="POST" action="/admin/adminka/pages">--}}
        {{--{{ csrf_field() }}--}}
    {{--<div class="row">--}}
        {{--<div class="col-sm-12">--}}

            {{--<div class="form-group forma">--}}
                {{--<label class="control-label col-sm-offset-2 col-sm-2" for="company">Оберіть сторінку</label>--}}
                {{--<div class="col-sm-6 col-md-4">--}}
                    {{--<select  name="company" class="form-control target" id="vybor">--}}
                        {{--@foreach($pg as $peg)--}}
                        {{--<option value="{!!$peg->name!!}" name="{!! $peg->id !!}">{!!$peg->name!!}</option>--}}
                            {{--<option value="{!!$peg->id!!}" name="{!! $peg->id !!}">{!!$peg->name!!}</option>--}}

                        {{--@endforeach--}}
                    {{--</select>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="row">--}}
        {{--<div class="col-sm-12">--}}
{{--<textarea name="txt" id="txt">{!! $page->description !!}</textarea>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<button type="submit" class="btn btn-info btnsave">Зберігти</button>--}}
    {{--</form>--}}
    {{--@endsection--}}