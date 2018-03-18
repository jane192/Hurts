<?php
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="{{config('app.description')}}">
    <meta name ="keywords" content="{{config('app.keywords')}}">
    <title>{{ config('app.name', 'app.title') }}</title>
    @section('styles')
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">
    @show
</head>

<body>
<header class="header">
    <div class="logo col-lg-10">
        <a href="#">
            <h1>Hurts</h1>
        </a>
        <p>The Hottest Heartbreakers in the World</p>
    </div>
    <div class="icons col-lg-2">
        <a href="#"><img class="facebook" src="images/facebook.jpg" alt="facebook"></a>
        <a href="#"><img class="twitter"src="images/twitter.png" alt="twitter"></a>
        <a href="#"><img class="googleplus"src="images/googleplus.jpg" alt="googleplus"></a>
        <a href="#"><img class="youtube" src="images/youtube.jpg" alt="youtube"></a>
        <a href="#"><img class="vk" src="images/vk.jpg" alt="vk"></a>
    </div>
    <nav>
        <a href="{{asset('/')}}" class="active">Главная</a>
        <a href="#">Видео</a>
        <a href="#">Песни</a>
        <a href="#">Тексты песен</a>
        <a href="{{asset('about')}}">О группе</a>
    </nav>
</header>

<main>

    <div class="center col-lg-10 ">
        @yield('content')
    </div>

</main>
<div class="widgets col-lg-2 ">
    <div class="search">
        <h2>Поиск</h2>
        <form action=""><input type="text" placeholder="Поиск по сайту">
            <a href="#"><i class=" glyphicon glyphicon-search "></i></a>
        </form>
    </div>

<div class="mini_news">
    <h2>Новости</h2>
    <ul>
        <li>
            <figure class="mini_new">

                <img src="images/photo11.jpg" alt="hurts">
                <ficaption>
                    <p class="text">Группа Hurts представила клип на песню Chaperone</p>
                    <a href="#"><i class=" glyphicon glyphicon-circle-arrow-right"></i></a>

                </ficaption>
            </figure>
        </li>
        <li>
            <figure class="mini_new"><img src="images/photo12.jpg" alt="hurts">
                <ficaption>
                    <p class="text">Hurts выпустили концертное видео “Nothing Will Be Bigger Than Us”</p>

                    <a href="#"><i class=" glyphicon glyphicon-circle-arrow-right"></i></a></ficaption>
            </figure>
        </li>
        <li>
            <figure class="mini_new"><img src="images/photo13.jpg" alt="hurts">
                <ficaption>
                    <p class="text">Hurts - Ready to Go</p>
                    <a href="#"><i class=" glyphicon glyphicon-circle-arrow-right"></i></a></ficaption>
            </figure>
        </li>
        <li>
            <figure class="mini_new"><img src="images/photo14.jpg" alt="hurts">
                <ficaption>
                    <p class="text">Hurts выпустили клип на песню Beautiful Ones</p>
                    <a href="#"><i class=" glyphicon glyphicon-circle-arrow-right"></i></a></ficaption>
            </figure>
        </li>
    </ul>
</div>
<!--pogoda.by-->
<!--Информер распространяется свободно и на безвозмездной основе. Однако, в случае изменения кода информера (в частности, удаления ссылок), POGODA.BY снимает с себя ответственность за конечный результат.-->

<table width="100%" height="180" style="background-color:#f2f2f2; border: #cccccc 1px solid; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="2" cellspacing="0">
    <tr>
        <td><a href="http://6.pogoda.by/26850" style="font-family:Tahoma; font-size:12px; color:#003399;" title="Погода Минск на 6 дней - Гидрометцентр РБ" target="_blank">Погода Минск</a>
        </td>
    </tr>
    <tr>
        <td>

            <table width=100% height=100% style="background-color:#f2f2f2; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <script type="text/javascript" charset="windows-1251" src="http://pogoda.by/meteoinformer/js/26850_3.js"></script>
                    </td>
                </tr>
            </table>

        </td>
    </tr>

    <tr>
        <td align="right">Информация сайта <a href="http://www.pogoda.by" target="_blank" style="font-family:Tahoma; font-size:12px; color:#003399;">pogoda.by</a>
        </td>
    </tr>
</table>
</div>
<footer class="footer col-lg-12">
    <div class="menu">
        <a href="#">Главная</a>
        <a href="#">Видео</a>
        <a href="#">Песни</a>
        <a href="#">Тексты песен</a>
        <a href="#">О группе</a>
        <small>&copy; Copyright</small>
    </div>

</footer>
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
@show
</body>

</html>