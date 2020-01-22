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
                <th>Название курса</th>
                <th>ФИО</th>
                <th colspan="2" width="10%">Email</th>
                <th>Дата подачи</th>
            </tr>
            </thead>

            <tbody>
            @foreach($orders as $order)
                <tr>
                    <form method="post" action="/delcurs">
                        @csrf
                        <input type="hidden" name="id" value="{{$order->id}}">
                        <td>{{$order->name_curs}}</td>
                        <td>{{$order->name}} {{$order->surname}} {{$order->otchestvo}}  </td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->created_at}}</td>
                    </form>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>


</body>
</html>
