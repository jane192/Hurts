@extends('layouts.base') @section('content')


<section id="albom1">
    <ul class="albom11">
        @foreach($cabinet as $one)
        <h2>{{$one->name}}</h2>

        <img src="{{asset('images/'.$one->picture)}}" class="ones" alt="hurts"> @foreach ($one->musics as $music)
        <li>
            <p><a href="#">{{$music->name}}</a></p>
            <audio controls>   
    <source src="{{asset('song/'.$music->musicsong)}}" type="audio/mpeg">
    Тег audio не поддерживается вашим браузером. 
    <a href="{{asset('song/'.$music->musicsong)}}">Скачайте музыку</a>
  </audio></li>
        @endforeach @endforeach
    </ul>
</section>
@endsection
