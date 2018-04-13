@extends('layouts.base') @section('content')
<section id="albom2">
    <ul class="albom22">
        <li>
            <p><a href="{{asset('songs/'.$music->id)}}">{{$music->name}}</a></p>


            <audio src="{{asset('song/'.$music->musicsong)}}" preload="auto"></audio>
            <a href="{{asset('song/'.$music->musicsong)}}">Скачать</a>
        </li>
    </ul>
</section>
@endsection
