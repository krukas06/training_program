<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Админ панель</title>
    <link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
    <!--<link rel="stylesheet" href="css/fluid.css" type="text/css" media="screen" charset="utf-8" />-->
    <link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
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
        <table>
            <thead>
            <tr>
                <th>Заголовок</th>
                <th>Текст</th>
                <th colspan="2" width="10%">Действие</th>
            </tr>
            </thead>

            <tbody>
            @foreach($lessons as $lesson)
                <tr>
                    <form method="post" action="/delcurs">
                        @csrf
                        <input type="hidden" name="id" value="{{$lesson->id}}">
                        <td>{{$lesson->name}}</td>
                        <td>{{$lesson->discription}}</td>
                        <td><input type="submit" value="Удалить курс"></td>
                    </form>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>


</body>
</html>
