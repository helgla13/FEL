
@extends('main')

@section('content')
    {{--@if($newss)--}}
    <div class="row newsab">
        <div class="col-sm-12">
        <h2>{{$newss->title}}</h2>
        <img src="{{$newss->pics}}"/>
            <div id="newsabb">
        <p>{!! $newss->description !!}</p>
            </div>
    </div>
    </div>
    {{--@endif--}}
@endsection