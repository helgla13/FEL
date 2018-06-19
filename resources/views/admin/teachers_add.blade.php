@extends('admin.adminka.adminka')

@section('content')
    <form method="POST" action="/admin/adminka/teachers/teachers_add">
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-sm-9">
            <div>
            <div class="form-group">
                <label for="pip">ПІП</label>
                <input type="text"  size="40" class="form-control"  id="pip" name="pip">
            </div>
            <div class="form-group">
                <label for="science_degree">Наукова ступінь</label>
                <input type="text"  size="40" class="form-control"  id="science_degree" name="science">
            </div>
                <div class="form-group">
                <label for="education">Освіта</label>
                <input type="text"  size="40" class="form-control"  id="education" name="education">
                </div>
                <div class="form-group">
                    <label for="position">Посада</label>
                    <input type="text"  size="40" class="form-control"  id="education" name="position">
                </div>
                <div class="form-group">
                <label for="course">Лекційні курси</label>
                <input type="text"  size="40" class="form-control"  id="course" name="course">
                </div>
                <div class="form-group">
                <label for="publications">Публікації</label>
                <input type="text"  size="40" class="form-control"  id="publications" name="publications">
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email"  size="40" class="form-control"  id="email" name="email">
            </div>
                <div class="form-group">
                    <label for="phone">Телефон</label>
                    <input type="text"  size="40" class="form-control bfh-phone" data-format="+38 (ddd) ddd-dddd"
                           id="phone" name="tel">
                </div>
                <div class="form-group">
                    <label for="intelect">В системі Intellect</label>
                    <input type="text"  size="40" class="form-control"  id="intelect" name="intelect">
                </div>
                <div class="form-group">
                    <label for="googlescholar">Сторінка в Google Scholar</label>
                    <input type="text"  size="40" class="form-control"  id="googlescholar" name="googlescholar">
                </div>
                <div class="form-group">
                    <label for="photo">Фото</label>
                    <p><input type="file" name="photo" multiple accept="image/*,image/jpeg" id="photo">
                </div>
            <textarea name="about"></textarea>
                <button type="submit" class="btn btn-info btnsave">Зберігти</button>

    </div>
    </div>
    </div>
    </form>
@endsection