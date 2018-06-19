

<div class="row">

    <div class="col-sm-12">

        <div class="container-fluid newsbok">
        <h3>Новини</h3>
        @foreach($news1 as $newss)
            <div>
                <p>{{ $newss->created_at  }}</p>
                <a href='{{route('newsShow',['id'=>$newss->id])}}'>{!! $newss->title !!}</a>
            </div>
            <hr>
        @endforeach
        <a href="{{ url('/news') }}">Більше новин</a>
</div>




    </div>
</div>
