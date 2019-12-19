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

                Охрана окружающей среды

            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/news">Новости</a></li>
                <li><a href="#home">Главная</a></li>
                <li><a href="#services">Сервисы сайта</a></li>
                <li><a href="#work">Образовательный курс</a></li>
                <li><a href="#grid">О проекте</a></li>
                <li><a href="#contact">Контакты</a></li>
            </ul>
        </div>

    </div>
</div>
<!--MENU SECTION END-->
<!--HOME SECTION START-->
<div id="home" >
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
                <div id="carousel-slider" data-ride="carousel" class="carousel slide  animate-in" data-anim-type="fade-in-up">

                    <div class="carousel-inner">
                        <div class="item active">

                            <h3>
                                Consectetur adipiscing elit felis dolor felis dolor vitae
                            </h3>
                            <p>
                                Lorem ipsumdolor sitamet, consect adipiscing elit
                                Lorem ipsumdolor sitamet, consect adipiscing elit.
                                Lorem ipsumdolor sitamet, consect adipiscing elit
                                Lorem ipsumdolor sitamet, consect adipiscing elit.
                            </p>
                        </div>
                        <div class="item">
                            <h3>
                                Lorem ipsumdolor sitamet, consect adipiscing elit
                            </h3>
                            <p>
                                Lorem ipsumdolor sitamet, consect adipiscing elit
                                Lorem ipsumdolor sitamet, consect adipiscing elit.
                                Lorem ipsumdolor sitamet, consect adipiscing elit
                                Lorem ipsumdolor sitamet, consect adipiscing elit.
                            </p>
                        </div>

                    </div>


                </div>


            </div>
        </div>
        <div class="row animate-in" data-anim-type="fade-in-up">
            <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">


                <p >
                    This line is fixed so you can write anything

                </p>
                <div class="social">
                    <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-facebook "></i></a>
                    <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-twitter"></i></a>
                    <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-google-plus "></i></a>
                    <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-linkedin "></i></a>
                    <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-pinterest "></i></a>
                    <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-github "></i></a>
                </div>
                <a href="#services" class=" btn button-custom btn-custom-two">See Service List </a>
            </div>
        </div>
    </div>

</div>
<!--HOME SECTION END-->
<!--SERVICE SECTION START-->
<section id="services" >
    <div class="container">
        <div class="row text-center header">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
                <h3>Сервисы сайта</h3>
                <hr />
            </div>
            <div class="row text-center animate-in" data-anim-type="fade-in-up" id="work-div">

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 html">
                    <div class="work-wrapper">

                        <a class="fancybox-media" title="Image Title Goes Here" href="/teory">

                            <img src="{{asset('img/portfolio/1.jpg')}}" class="img-responsive img-rounded" alt="" />
                        </a>

                        <h4>Теоритический курс</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 html css">
                    <div class="work-wrapper">

                        <a class="fancybox-media" title="Image Title Goes Here" href="/conspect">

                            <img src="{{asset('img/portfolio/2.jpg')}}" class="img-responsive img-rounded" alt="" />
                        </a>

                        <h4>Конспект для повторения</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 code script">
                    <div class="work-wrapper">

                        <a class="fancybox-media" title="Image Title Goes Here" href="/test">

                            <img src="{{asset('img/portfolio/3.jpg')}}" class="img-responsive img-rounded" alt="" />
                        </a>

                        <h4>Тест "Проверь себя"</h4>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--SERVICE SECTION END-->
<!--PRICING SECTION START-->

<!--PRIICING SECTION END-->
<!--WORK SECTION START-->
<section id="work" >
    <div class="container">
        <div class="row text-center header animate-in" data-anim-type="fade-in-up">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Письмо администрации</h3>
                <hr />
            </div>
        </div>
        <div class="row text-center animate-in" data-anim-type="fade-in-up" id="work-div">
            <div> </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4"> </div>
                    <div class="col-md-4">
                        <h3>Форма обратной связи</h3>
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
                                <label for="message">Текст письма:</label>
                                <textarea  class="form-control" name="message" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">Отправить сообщение</button>
                        </form>
                    </div>
                    <div class="col-md-4"> </div> </div>
            </div>
        </div>
    </div>
</section>
<!--WORK SECTION END-->
<!--TEAM SECTION START-->
<section id="team" >
    <div class="container">
        <div class="row text-center header animate-in" data-anim-type="fade-in-up">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Team Members </h3>
                <hr />
            </div>
        </div>
        <div class="row animate-in" data-anim-type="fade-in-up">

            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="team-wrapper">
                    <div class="team-inner" style="background-image: url('{{asset('img/team/1.jpg')}}')" >
                        <a href="#" target="_blank" > <i class="fa fa-twitter" ></i></a>
                    </div>
                    <div class="description">
                        <h3> Leomarid Jona</h3>
                        <h5> <strong> Developer & Designer </strong></h5>
                        <p>
                            Pellentesque elementum dapibus convallis.
                            Vivamus eget finibus massa.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="team-wrapper">
                    <div class="team-inner" style="background-image: url('{{asset('img/team/2.jpg')}}')" >
                        <a href="#" target="_blank" > <i class="fa fa-twitter" ></i></a>
                    </div>
                    <div class="description">
                        <h3> Leomarid Jona</h3>
                        <h5> <strong> Developer & Designer </strong></h5>
                        <p>
                            Pellentesque elementum dapibus convallis.
                            Vivamus eget finibus massa.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="team-wrapper">
                    <div class="team-inner" style="background-image: url('{{asset('img/team/3.jpg')}}')" >
                        <a href="#" target="_blank" > <i class="fa fa-twitter" ></i></a>
                    </div>
                    <div class="description">
                        <h3> Leomarid Jona</h3>
                        <h5> <strong> Developer & Designer </strong></h5>
                        <p>
                            Pellentesque elementum dapibus convallis.
                            Vivamus eget finibus massa.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="team-wrapper">
                    <div class="team-inner" style="background-image: url('{{asset('img/team/4.jpg')}}')" >
                        <a href="#" target="_blank" > <i class="fa fa-twitter" ></i></a>
                    </div>
                    <div class="description">
                        <h3> Leomarid Jona</h3>
                        <h5> <strong> Developer & Designer </strong></h5>
                        <p>
                            Pellentesque elementum dapibus convallis.
                            Vivamus eget finibus massa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--TEAM SECTION END-->
<!--GRID SECTION START-->
<section id="grid" >
    <div class="container">
        <div class="row text-center header animate-in" data-anim-type="fade-in-up">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <h3>Grid Overview </h3>
                <hr />

            </div>
        </div>
        <div class="row pad-bottom animate-in" data-anim-type="fade-in-up">

            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <h2>1/4 Section</h2>
                <p>
                    Morbi mollis lectus et ipsum sollicitudin varius.
                    Aliquam tempus ante placerat,
                    consectetur tellus nec, porttitor nulla.
                </p>

            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <h2>1/4 Section</h2>
                <p>
                    Morbi mollis lectus et ipsum sollicitudin varius.
                    Aliquam tempus ante placerat,
                    consectetur tellus nec, porttitor nulla.
                </p>

            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <h2>1/4 Section</h2>
                <p>
                    Morbi mollis lectus et ipsum sollicitudin varius.
                    Aliquam tempus ante placerat,
                    consectetur tellus nec, porttitor nulla.
                </p>

            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <h2>1/4 Section</h2>
                <p>
                    Morbi mollis lectus et ipsum sollicitudin varius.
                    Aliquam tempus ante placerat,
                    consectetur tellus nec, porttitor nulla.
                </p>

            </div>
        </div>
        <div class="row pad-bottom animate-in" data-anim-type="fade-in-up">

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h2>1/3 Section</h2>
                <p>
                    Morbi mollis lectus et ipsum sollicitudin varius.
                    Aliquam tempus ante placerat,
                    consectetur tellus nec, porttitor nulla.
                </p>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h2>1/3 Section</h2>
                <p>
                    Morbi mollis lectus et ipsum sollicitudin varius.
                    Aliquam tempus ante placerat,
                    consectetur tellus nec, porttitor nulla.
                </p>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h2>1/3 Section</h2>
                <p>
                    Morbi mollis lectus et ipsum sollicitudin varius.
                    Aliquam tempus ante placerat,
                    consectetur tellus nec, porttitor nulla.
                </p>

            </div>

        </div>
        <div class="row pad-bottom animate-in" data-anim-type="fade-in-up">

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <h2>1/2 Section</h2>
                <p>
                    Morbi mollis lectus et ipsum sollicitudin varius.
                    Aliquam tempus ante placerat,
                    consectetur tellus nec, porttitor nulla.
                </p>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <h2>1/2 Section</h2>
                <p>
                    Morbi mollis lectus et ipsum sollicitudin varius.
                    Aliquam tempus ante placerat,
                    consectetur tellus nec, porttitor nulla.
                </p>

            </div>


        </div>
        <div class="row animate-in" data-anim-type="fade-in-up">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2>Full Section</h2>
                <p>
                    Morbi mollis lectus et ipsum sollicitudin varius.
                    Aliquam tempus ante placerat,
                    consectetur tellus nec, porttitor nulla.
                </p>

            </div>



        </div>
    </div>
</section>
<!--GRID SECTION END-->
<!--CONTACT SECTION START-->
<section id="contact" >
    <div class="container">
        <div class="row text-center header animate-in" data-anim-type="fade-in-up">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <h3>Contact Details </h3>
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
<!--CONTACT SECTION END-->

<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME -->
<!-- CORE JQUERY -->
<script src="{{asset('js/jquery-1.11.1.js')}}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{asset('js/bootstrap.js')}}"></script>
<!-- EASING SCROLL SCRIPTS PLUGIN -->
<script src="{{asset('js/vegas/jquery.vegas.min.js')}}"></script>
<!-- VEGAS SLIDESHOW SCRIPTS -->
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<!-- FANCYBOX PLUGIN -->
<script src="{{asset('js/source/jquery.fancybox.js')}}"></script>
<!-- ISOTOPE SCRIPTS -->
<script src="{{asset('js/jquery.isotope.js')}}"></script>
<!-- VIEWPORT ANIMATION SCRIPTS   -->
<script src="{{asset('js/appear.min.js')}}"></script>
<script src="{{asset('js/animations.min.js')}}"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{asset('js/custom-solid.js')}}"></script>
</body>

</html>
