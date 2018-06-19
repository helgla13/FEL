<div class="panel panel-default">
    <div class="panel-body">
        <div class="col-sm-10">
        <h3>Національний Технічний Університет України "Київський Політехнічий Інститут імені Ігоря Сікорського"</h3>
        <h2>Кафедра звукотехніки та реєстрації інформації</h2>
        </div>
        <div class="col-sm-2 lang">
            <a href="#"><img src="/img/ukraine.jpg" class="flag"> Українська</a>
            <br>
            <a href="#"><img src="/img/United_States.png" class="flag"> English</a>
        </div>

    </div>


</div>


<nav class="navbar navbar-default">
    <div class="container-fluid">


        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>



        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="/">Головна</a></li>
            <li><a href="{{ url('/news') }}">Новини</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Кафедра
                    <span class="caret"></span></a>
                <ul class="dropdown-menu dbfirst">
                    <li><a  href="{{ url('/about') }}">Про нас</a></li>
                    <li><a  href="{{ url('/teachers') }}">Викладачі</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Абітурієнтам
                    <span class="caret"></span></a>
                <ul class="dropdown-menu dbfirst">
                    <li><a  href="{{ url('/specialization') }}">Про спеціалізацію</a></li>
                    <li class="dropdown-submenu">
                        <a class="test" href="#">Вступ на 1 курс</a>
                        <ul class="dropdown-menu dbsecond">
                            <li><a href="{{ url('/firstzno') }}">ЗНО</a></li>
                            <li><a href="{{ url('/firstms') }}">Молодший спеціаліст</a></li>
                        </ul>
                    </li>
                    <li><a  href="{{ url('/fifthyear') }}">Вступ на 5 курс</a></li>
                    <li><a  href="#">Основні дисципліни</a></li>
                    <li><a  href="#">Офіційні документи</a></li>
                    <li><a  href="{{ url('/opendays') }}">Дні відкритих дверей</a></li>
                    <li><a  href="#">Відео про кафедру</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Студентам
                    <span class="caret"></span></a>
                <ul class="dropdown-menu dbfirst">
                    <li><a  href="#">Навчальні дисципліни</a></li>
                    <li><a  href="#">Відео про навчальні дисципліни</a></li>
                    <li><a  href="{{ url('/navchalni_plany') }}">Навчальні плани</a></li>
                    <li><a  href="{{ url('/rozklad') }}">Розклад</a></li>
                    <li><a  href="{{ url('/kuratory') }}">Куратори</a></li>
                    <li><a  href="#">Практика</a></li>
                    <li><a  href="{{ url('/file_archive') }}">Файловий архів</a></li>
                    <li><a  href="{{ url('/student_life') }}">Студенське життя</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Наука
                    <span class="caret"></span></a>
                <ul class="dropdown-menu dbfirst">
                    <li><a  href="{{ url('/scientific_school') }}">Наукова школа</a></li>
                    <li><a  href="{{ url('/scientific_groups') }}">Наукові групи</a></li>
                    <li><a  href="#">Теми магістерських дисертацій</a></li>
                    <li><a  href="#">Теми PhD дисертацій</a></li>
                    <li class="dropdown-submenu">
                        <a class="test" href="#">Наукова конференція</a>
                        <ul class="dropdown-menu dbsecond">
                            <li><a href="#">2016</a></li>
                            <li><a href="#">2017</a></li>
                            <li><a href="#">2018</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <button id="poisk">Пошук</button>
        </ul>






        <ul class="nav navbar-nav navbar-right">

            @if (Auth::check ()&& Auth::user()->is_admin)
                <li><a class="nav-link ml-auto" href="/admin/adminka">{{Auth::user()->name}}{{'@'}}ADMIN</a></li>
                <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            @elseif (Auth::check ())
                <li><a href="/profile">Кабінет</a></li>
                <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            @else
                <li><a href="/register"><span class="glyphicon glyphicon-user"></span>Register</a></li>
                <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            @endif

        </ul>
        </div>


    </div>
</nav>


<div class="poshuk" style="display: none">
    <form class="form-search" method="get" action="search">
        <input type="text" name="search" class="input-medium search-query">
        <button type="submit" class="btn poiskbtn">Знайти</button>
    </form>
</div>
