<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>LIGHT WAVE</title>
    <!-- BOOTSTRAP CORE CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <!-- ION ICONS STYLES -->
    <link href="{{asset('css/ionicons.css')}}" rel="stylesheet" />
    <!-- FONT AWESOME ICONS STYLES -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" />
    <!-- FANCYBOX POPUP STYLES -->
    <link href="{{asset('js/source/jquery.fancybox.css')}}" rel="stylesheet" />
    <!-- STYLES FOR VIEWPORT ANIMATION -->
    <link href="{{asset('css/animations.min.css')}}" rel="stylesheet" />
    <!-- CUSTOM CSS -->
    <link href="{{asset('css/style-solid-red.css')}}" rel="stylesheet" />
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body data-spy="scroll" data-target="#menu-section" style="/*background-image: url({{asset('img/2.jpg')}}); background-repeat: no-repeat; background-size: 100%;*/">
<!--MENU SECTION START-->
<div class="navbar navbar-inverse navbar-fixed-top scroll-me" id="menu-section" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">

                Ресурсный центр

            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Вернуться на главную страницу</a></li>
            </ul>
        </div>

    </div>
</div>
<img class="card-img-top" style="width: 40%; margin-left: 40px; margin-top: 40px;" src="{{ asset('img')}}/{{$lessons->img}}" alt="Card image cap">
<div class="card-body" style="margin-left: 48%; margin-top: 10px;">
    <h1 class="card-title">{{$lessons->name}}</h1>

</div>

<div style="margin-left: 300px; margin-right: 80px; width: 1300px; margin-bottom: 20px">
    <p style="text-align: justify; line-height: normal ">{{$lessons->all_text}}</p>
</div>


<div style="margin-left: 300px; margin-right: 80px; width: 1300px; margin-bottom: 20px">
    <p style="text-align: justify; line-height: normal "> <h4>Преподаватель: {{$lessons->teacher}}</h4> </p>
</div>

<div style="width: 260px; margin-bottom: 30px; height: 50px; padding-top: 20px; padding-left: 20px; margin-left: 10%; background-color: #f9d6d5; border-radius: 10px ">

    <p>Записано: {{$lessons->zap}} </p>
</div>
<div style="width: 260px; margin-bottom: 30px; height: 50px; padding-top: 20px; padding-left: 20px; margin-left: 10%; background-color: #98e1b7; border-radius: 10px ">
    <p>Свобоные места: {{$lessons->treb}}</p>
</div>

<div style="margin-left: 48%; margin-bottom: 30px">
    <button style="width: 180px; color: #c4e3f3" class="btn-success btn-lg"  data-toggle="modal" data-target="#modalRegisterForm"><a href="#">Записаться</a></button>
</div>

<div class="row text-center animate-in" data-anim-type="fade-in-up" id="work-div">
    <div> </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4"> </div>
            <div class="col-md-4">
                <h3>Задать вопрос</h3>
                <form action="/mail" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Ваше имя:</label>
                        <input type="name" name="name" class="form-control" id="name" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <label for="email1">E-mail:</label>
                        <input type="email" name="email" class="form-control" id="email1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Заголовок</label>
                        <input type="phone" name="title" class="form-control" id="phone" placeholder="Заголовок">
                    </div>
                    <div class="form-group">
                        <label for="message">Текст вопроса:</label>
                        <textarea  class="form-control" name="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-info">Отправить вопрос</button>
                </form>
            </div>
            <div class="col-md-4"> </div> </div>
    </div>
</div>


<section id="contact" >
    <div class="container">
        <div class="row text-center header animate-in" data-anim-type="fade-in-up">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <h3>Контактная информация </h3>
                <hr />

            </div>
        </div>

        <div class="row animate-in" data-anim-type="fade-in-up">

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="contact-wrapper">
                    <h3>We Are Social</h3>
                    <p>
                        Aliquam tempus ante placerat,
                        consectetur tellus nec, porttitor nulla.
                    </p>
                    <div class="social-below">
                        <a href="#" class="btn button-custom btn-custom-two" > Facebook</a>
                        <a href="#" class="btn button-custom btn-custom-two" > Twitter</a>
                        <a href="#" class="btn button-custom btn-custom-two" > Google +</a>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="contact-wrapper">
                    <h3>Quick Contact</h3>
                    <h4><strong>Email : </strong> info@yuordomain.com </h4>
                    <h4><strong>Call : </strong> +09-88-99-77-55 </h4>
                    <h4><strong>Skype : </strong> Yujhaeu78 </h4>
                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="contact-wrapper">
                    <h3>Address : </h3>
                    <h4>230/45 , New way Lane , </h4>
                    <h4>United States</h4>
                    <div class="footer-div" >
                        &copy; 2015 YourDomain | <a href="http://www.designbootstrap.com/" target="_blank" >by DesignBootstrp</a>
                    </div>
                </div>

            </div>

        </div>


    </div>
</section>

</body>
</html>
