@extends('layouts.base') @section('content') @foreach($cabinet as $one)
<section id="albom2">
    <h2>{{$one->name}}</h2>


    <img src="{{asset('images/'.$one->picture)}}" class="ones" alt="hurts">
    <ul class="albom22">

        @foreach ($one->musics->all() as $music)
        <li>

            <p><a href="{{asset('songs/'.$music->id)}}">{{$music->name}}</a></p>


            <audio src="{{asset('song/'.$music->musicsong)}}" preload="auto"></audio>
            <a href="{{asset('song/'.$music->musicsong)}}">Скачать</a>
        </li>
        @endforeach
    </ul>

</section>
@endforeach @endsection
