@extends('admin.adminka.adminka')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <button type="button" class="btn btn-info btnsave"><a href="{{ url('admin/adminka/news/news_add') }}">
                    Додати</a></button>
        </div>

    </div>


    <div class="row">
        <div class="col-sm-12">

            <div class="container-fluid">
                <table border="1" id="aduser">
                    <th>Title</th>
                    <th>Edit</th>
                    @foreach($news as $newss)
                        <tr>
                            <td>{!! $newss->title !!}</td>
                            <td><a href='{{route('newssShow',['id'=>$newss->id])}}' class='btn btn-info' role='button' >
                                    <span class="glyphicon glyphicon-pencil"></span></a></td>
                        </tr>
                    @endforeach
                </table>
            </div>


        </div>
    </div>






@endsection