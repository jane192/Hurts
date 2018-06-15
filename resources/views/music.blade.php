@extends('layouts.base') @section('script') @parent
<script type="text/javascript" src="{{asset('/js/jPlayer-2.9.2/lib/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jPlayer-2.9.2/dist/jplayer/jquery.jplayer.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jPlayer-2.9.2/dist/add-on/jplayer.playlist.min.js')}}"></script>
<? $a=0;?>
    @endsection @section('content') @foreach($cabinet as $one)
    <section id="albom4">
        <h2>{{$one->name}}</h2>


        <img src="{{asset('images/'.$one->picture)}}" class="ones" alt="hurts">
        <ul class="albom44">
            <?$arr=[];?>
                @foreach ($one->musics->all() as $music)
                <li>

                    <!-- <p><a href="{{asset('songs/'.$music->id)}}">{{$music->name}}</a></p>-->


                    <!--<audio src="{{asset('song/'.$music->musicsong)}}" preload="auto">Аудио не поддерживается</audio>-->

                    <!--<a href="{{asset('song/'.$music->musicsong)}}">Скачать</a>-->
                </li>
                <li>
                    <?php


$arr[] =  ' {
                        title: "'.$music->name.'",
                        mp3: "'.asset("song/".$music->musicsong).'"
                    }';

        ?>
                        @endforeach
                        <script type="text/javascript">
                            //<![CDATA[
                            $(document).ready(function() {

                                new jPlayerPlaylist({
                                    jPlayer: "#jquery_jplayer_<?=$a?>",
                                    cssSelectorAncestor: "#jp_container_<?=$a?>"
                                }, [<?php
    $total = count($arr);
                                    $counter = 0;
                            foreach($arr as $key => $two) {
                                                                $counter++;
  if($counter == $total){
    $sim= '';
  }
  else{
     $sim= ',';
  }
                            
                                
echo  $two.$sim;
                
                            }
                             ?>], {
                                    swfPath: "/js/jPlayer-2.9.2/dist/jplayer",
                                    supplied: "oga, mp3",
                                    wmode: "window",
                                    useStateClassSkin: true,
                                    autoBlur: false,
                                    smoothPlayBar: true,
                                    keyEnabled: true
                                });
                            });
                            //]]>

                        </script>


                        <div id="jquery_jplayer_<?=$a?>" class="jp-jplayer"></div>
                        <div id="jp_container_<?=$a?>" class="jp-audio" role="application" aria-label="media player">
                            <div class="jp-type-playlist">
                                <div class="jp-gui jp-interface">
                                    <div class="jp-controls">
                                        <button class="jp-previous" role="button" tabindex="0">previous</button>
                                        <button class="jp-play" role="button" tabindex="0">play</button>
                                        <button class="jp-next" role="button" tabindex="0">next</button>
                                        <button class="jp-stop" role="button" tabindex="0">stop</button>
                                    </div>
                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div class="jp-play-bar"></div>
                                        </div>
                                    </div>
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" role="button" tabindex="0">mute</button>
                                        <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value"></div>
                                        </div>
                                    </div>
                                    <div class="jp-time-holder">
                                        <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                                        <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                                    </div>
                                    <div class="jp-toggles">
                                        <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                                        <button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
                                    </div>
                                </div>
                                <div class="jp-playlist">
                                    <ul>
                                        <li>&nbsp;</li>
                                    </ul>
                                </div>
                                <div class="jp-no-solution">
                                    <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                                </div>
                            </div>
                        </div>
                </li>
        </ul>
        <!--<audio id="logo" src=""></audio>
<nav>
    <div id="button">
        <input type="button" id="play" value="Play" />
        <input type="button" id="mute" value="Mute" />
        <div id="bar">
            <div id="progress"></div>
        </div>
        <input type="range" id="volume" min=0 max=1 volume="0.6">
    </div>
</nav>-->

    </section>
    <?                $a++;?>
        @endforeach @endsection
