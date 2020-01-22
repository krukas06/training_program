<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Админ панель</title>
    <link rel="stylesheet" href="{{asset('css/960.css')}}" type="text/css" media="screen" charset="utf-8" />
    <!--<link rel="stylesheet" href="css/fluid.css" type="text/css" media="screen" charset="utf-8" />-->
    <link rel="stylesheet" href="{{asset('css/template.css')}}" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="{{asset('css/colour.css')}}" type="text/css" media="screen" charset="utf-8" />
</head>
<body>
<h1 id="head">Админ панель</h1>
<ul id="navigation">
    <li><a href="/">На главную</a></li>
    <li><a href="/add/news">Добавление новостей</a></li>
    <li><a href="/add/lesson">Добавление курсов</a></li>
    <li><a href="/list">Список новостей</a></li>
    <li><a href="/listcurs">Список курсов</a></li>
    <li><a href="/listorder">Заявки</a></li>

</ul>
<div id="content" class="container_16 clearfix">
    <div class="grid_16">
        <h2>Добавление курса</h2>
    </div>


    <form enctype="multipart/form-data" method="post" action="/addcurs">
        {{csrf_field()}}
        <div class="grid_5">
            <p>
                <label for="name">Заголовок </label>
                <input type="text" name="name" />
            </p>
        </div>



        <div class="grid_16">
            <p>
                <label>Краткое описание курса</label>
                <textarea name="discription"></textarea>
            </p>
        </div>

        <div class="grid_16">
            <p>
                <label>Подробное описание курса</label>
                <textarea name="all_text"></textarea>
            </p>
        </div>

        <div class="grid_5">
            <p>
                <label for="teacher">Преподаватель </label>
                <input type="text" name="teacher" />
            </p>
        </div>

        <div class="grid_5">
            <p>
                <label for="zap">Количество записанных</label>
                <input type="text" name="zap" value="0" />
            </p>
        </div>

        <div class="grid_5">
            <p>
                <label for="treb">Количество мест</label>
                <input type="text" name="treb" value="0" />
            </p>
        </div>

        {{--<div class="grid_5">
            <p>
                <label for="treb">Категория</label>
                <label for="it">IT школа</label>
                <input id="it" type="checkbox" name="flag" value="0" />
                <label for="int">Объеденение по интересам</label>
                <input id="int" type="checkbox" name="flag" value="1" />
            </p>
        </div>--}}


        <div class="grid_5">
            <label for="cat">Категория</label>
            <p>
                <select id="cat" name="flag">
                    <option  value="0">IT школа</option>
                    <option value="1">Объеденение по интересам</option>
                </select>
            </p>
        </div>

        <div class="grid_16">
            <p>
                <input type="file" id="img" name="img">
            </p>

            <p class="submit">

                <input type="submit" value="Добавить" />
            </p>
        </div>

    </form>
</div>


</body>
</html>

