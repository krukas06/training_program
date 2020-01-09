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

    </ul>
			<div id="content" class="container_16 clearfix">
				<div class="grid_16">
					<h2>Добавление новой новости</h2>
				</div>


                <form enctype="multipart/form-data" method="post" action="/add">
                    {{csrf_field()}}
				<div class="grid_5">
					<p>
						<label for="title">Заголовок </label>
						<input type="text" name="title" />
					</p>
				</div>



				<div class="grid_16">
					<p>
						<label>Текст новости</label>
						<textarea name="text"></textarea>
					</p>
				</div>

				<div class="grid_16">
					<p>
                        <input type="file" id="img" name="img">
					</p>
					<p class="submit">

						<input type="submit" value="Опубликовать" />
					</p>
				</div>
                </form>
			</div>


	</body>
</html>
