@extends('admin.adminka.adminka')

@section('content')

    <div class="row">
        <div class="col-sm-12">

    <h1>Користувачі:</h1>

    <form method="post">
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        {{ csrf_field() }}
        <div class="col-md-4">

            <table border="1" id="aduser" class="table">
                <thead>
                <tr>
                    <th scope="col">Surname</th>
                    <th scope="col">Name</th>
                    <th scope="col">is_admin</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$user->surname}}</th>
                        <td>{{ $user->name }}</td>
                        <td><input type="checkbox" class="custom-control-input" name="{{$user->id}}" id="isactiveuser{{$user->id}}"  @if ($user->is_admin) checked @endif></td>

                    </tr>
                @endforeach


                </tbody>
            </table>
            {{--<input type="submit" value="Submit">--}}

        </div>
    </form>

        </div>
    </div>

    @endsection


