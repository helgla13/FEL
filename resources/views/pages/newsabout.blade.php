
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

    <div>
        <h4>Комментарии:</h4>
        <div class="form-group">
            <form method="post" action="/news/{{$newss->id}}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                {{ csrf_field() }}
                <label for="comment">Добавьте комментарий:</label>
                <textarea name="comment_body" class="form-control" rows="5" id="comment" style="width: 300px"></textarea>
                <button>Добавить</button>
            </form>
        </div>
        <hr>
        <div>

            <div class="comments">
                <ul class="list-group">

                    @foreach ($comments as $comm)

                        <li class="list-group-item">
                            <a href="#"> {{$comm->name}}</a> {{$comm->updated_at}} <br> {{$comm->comment}}<br>

                        </li>
                    @endforeach
                </ul>

            </div>
            </p>

        </div>
        <hr>

    </div>


@endsection