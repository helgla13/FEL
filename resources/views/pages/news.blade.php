
@extends('main')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            @foreach($news as $newss)
            <div class="container-fluid">
                <h3>{!! $newss->title !!}</h3>
                    <p>
                        {!! str_limit($newss->description,100) !!}
                    </p>
                <a href='{{route('newsShow',['id'=>$newss->id])}}' class='btn btn-info' role='button' >Детальніше</a>
                <p id="dat">
                    {{ $newss->created_at  }}
                </p>
            </div>
                <hr>
            @endforeach
        </div>
    </div>

@endsection