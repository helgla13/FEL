@extends('admin.adminka.adminka')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <button type="button" class="btn btn-info btnsave"><a href="{{ url('admin/adminka/teachers/teachers_add') }}">
                    Додати</a></button>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-12">

            <div class="container-fluid">
                <table border="1">
                    <th>ПІП</th>
                    <th>Edit</th>
                    @foreach($teachers as $tt)
                        <tr>
                            <td>{!! $tt->FIO !!}</td>
                            <td><a href='{{route('teachShow',['id'=>$tt->id])}}' class='btn btn-info edit' role='button' >
                                        <span class="glyphicon glyphicon-pencil"></span></a>
                                  </td>
                        </tr>
                    @endforeach
                </table>
            </div>


        </div>
    </div>


@endsection