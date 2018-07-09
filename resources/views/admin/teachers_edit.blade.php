@extends('admin.adminka.adminka')

@section('content')

    <form method="POST" action="/admin/adminka/teachers/teachers_edit/{{$tt->id}}" enctype=multipart/form-data>
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
    {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-9">
                <div>
                    <div class="form-group">
                        <label for="pip">ПІП</label>
                        <input type="text"  size="40" class="form-control"  id="pip" name="pip" value="{{$tt->FIO}}">
                    </div>
                    <div class="form-group">
                        <label for="science_degree">Наукова ступінь</label>
                        <input type="text"  size="40" class="form-control"  id="science_degree" name="science" value="{{$tt->science_degree}}">
                    </div>
                    <div class="form-group">
                        <label for="education">Освіта</label>
                        <input type="text"  size="40" class="form-control"  id="education" name="education" value="{{$tt->education}}">
                    </div>
                    <div class="form-group">
                        <label for="position">Посада</label>
                        <input type="text"  size="40" class="form-control"  id="education" name="position" value="{{$tt->position}}">
                    </div>
                    <div class="form-group">
                        <label for="course">Лекційні курси</label>
                        <input type="text"  size="40" class="form-control"  id="course" name="course" value="{{$tt->course}}">
                    </div>
                    <div class="form-group">
                        <label for="publications">Публікації</label>
                        <input type="text"  size="40" class="form-control"  id="publications" name="publications" value="{{$tt->publications}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email"  size="40" class="form-control"  id="email" name="email" value="{{$tt->email}}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="text"  size="40" class="form-control bfh-phone" data-format="+38 (ddd) ddd-dddd"
                               id="phone" name="tel" value="{{$tt->tel}}">
                    </div>
                    <div class="form-group">
                        <label for="intelect">В системі Intellect</label>
                        <input type="text"  size="40" class="form-control"  id="intelect" name="intelect"
                               value="{{$tt->intelect}}">
                    </div>
                    <div class="form-group">
                        <label for="googlescholar">Сторінка в Google Scholar</label>
                        <input type="text"  size="40" class="form-control"  id="googlescholar" name="googlescholar"
                               value="{{$tt->googlescholar}}">
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label for="photo">Фото</label>--}}
                        {{--<p><input type="file" name="photo" multiple accept="image/*,image/jpeg" id="photo" value="{{$tt->photo}}">--}}
                    {{--</div>--}}
                    <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                    <input type="file" name="input_img">

                    {!!$tt->photo!!}

                    <textarea name="about">{!!$tt->about!!}"</textarea>
                    <button type="submit" class="btn btn-info btnsave">Зберігти</button>

                </div>
            </div>
        </div>






    </form>

@endsection