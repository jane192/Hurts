<?php
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="{{config('app.description')}}">
    <meta name="keywords" content="{{config('app.keywords')}}">
    <title>{{ config('app.name', 'app.title') }}</title>
    @section('styles')
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/style.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">
<<<<<<< HEAD
    <link href="{{asset('/audioplayer/audioplayer.css')}}" rel="stylesheet" />
    <link href="{{asset('player.css')}}" rel="stylesheet">
=======

    <link href="{{asset('audioplayer/audioplayer.css')}}" rel="stylesheet">
>>>>>>> a64a7df5dfdae7ba40d3a267ff28f6a76d3e0e9e
    <link href="{{asset('/js/jPlayer-2.9.2/dist/skin/blue.monday/css/jplayer.blue.monday.min.css')}}" rel="stylesheet" type="text/css" /> @show @section('script')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<<<<<<< HEAD
    <script src="{{asset('/audioplayer/audioplayer.js')}}"></script>

=======
    <script src="{{asset('public/audioplayer/jquery.js')}}"></script>
    <script src="{{asset('public/audioplayer/audioplayer.js')}}"></script>
    <script>
        $(function() {
            $('audio').audioPlayer();
        });

    </script>
>>>>>>> a64a7df5dfdae7ba40d3a267ff28f6a76d3e0e9e

    <script>
        $(function() {
            $('#google').click(function() {

                $.ajax({
                    url: 'parse/google',
                    type: 'Post',
                    data: 'id=0', //если есть данные
                    beforeSend: function() {
<<<<<<< HEAD
                        $('#empty').html('<img src="public/loader.gif ">');
=======
                        $('#empty').html('<img src="/loader.gif ">');
>>>>>>> a64a7df5dfdae7ba40d3a267ff28f6a76d3e0e9e

                    },
                    success: function(data) {
                        $("#empty").html(data);
                    }
                })
            })
        });

    </script>
<<<<<<< HEAD
=======

>>>>>>> a64a7df5dfdae7ba40d3a267ff28f6a76d3e0e9e
    <script>
        $(function() {
            $('audio').audioPlayer();
        });

    </script>
    <script>
        $('#ex20a').on('click', function(e) {
            $('#ex20a')
                .parent()
                .find(' >.well')
                .toggle()
                .find('input')
                .slider('relayout');
            e.preventDefault();
        });

    </script>
<<<<<<< HEAD
=======

>>>>>>> a64a7df5dfdae7ba40d3a267ff28f6a76d3e0e9e

    @show
</head>

<body>

    <header class="header ">
        <div class="logo col-lg-10 ">

            <a href="{{asset( '/')}} ">
                <h1 class="head ">Hurts</h1>
            </a>

            <p>The Hottest Heartbreakers in the World</p>
        </div>
        <!--<div class="icons col-lg-2 ">
    <a href="# "><img class="facebook " src="images/facebook.jpg " alt="facebook "></a>
    <a href="# "><img class="twitter "src="images/twitter.png " alt="twitter "></a>
    <a href="# "><img class="googleplus "src="images/googleplus.jpg " alt="googleplus "></a>
    <a href="# "><img class="youtube " src="images/youtube.jpg " alt="youtube "></a>
    <a href="# "><img class="vk " src="images/vk.jpg " alt="vk "></a>
</div>-->
        <nav>
            <a href="{{asset( '/')}} " class="active ">Главная</a>
            <a href="{{asset( 'video')}} ">Видео</a>
            <a href="{{asset( 'music')}} ">Песни</a>
            <a href="{{asset( 'songs')}} ">Тексты песен</a>
            <a href="{{asset( 'about')}} ">О группе</a>
            <a href="{{asset( 'products')}} ">Продукты</a>
<<<<<<< HEAD
            <a href="#" id="google">Новости с Google </a>
=======
            <a href="# " id="google">Новости с Google </a>
>>>>>>> a64a7df5dfdae7ba40d3a267ff28f6a76d3e0e9e




        </nav>
        <!--<audio volume="0.0 " src="{{asset( 'song/03 Sandman.mp3')}} " autoplay> </audio>-->
    </header>
    <div id="empty ">

    </div>

    <!--    @include ('templates.bread')-->
    <main>

        <div class="center col-lg-10 ">
            @yield('content')
        </div>


    </main>
    <div class="widgets col-lg-2 ">

        <div class="search ">
            <h2>Поиск</h2>
            <form action="{{asset( 'search/')}} " method="get ">
                <input type="seach " name='str' placeholder="Поиск по сайту ">
                <button type="submit " class="btn btn-default button "><i class=" glyphicon glyphicon-search "></i></button>
            </form>
        </div>

        <div class="mini_news ">
            <h2>Новости</h2>

            <ul>
                <li>
                    @foreach($compnews as $one)
                    <figure class="mini_new ">


                        <img src="{{asset($one[ 'picture'])}} " alt="hurts ">
                        <ficaption>
                            <p class="text ">
                                {{$one->name}}
                            </p>

                            <a href="{{asset( 'news/'.$one->id)}}"><i class=" glyphicon glyphicon-circle-arrow-right"></i></a>

                        </ficaption>
                    </figure>
                    @endforeach

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
            <a href="{{asset('/')}}">Главная</a>
            <a href="{{asset('video')}}">Видео</a>
            <a href="{{asset('music')}}">Песни</a>
            <a href="{{asset('songs')}}">Тексты песен</a>
            <a href="{{asset('about')}}">О группе</a>
            <small>&copy; Copyright</small>
        </div>

    </footer>

</body>

</html>
