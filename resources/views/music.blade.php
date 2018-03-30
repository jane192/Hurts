@extends('layouts.base') @section('content')


<section id="albom1">
    <ul class="albom11">
        @foreach($music as $one)
        <h2>{{$one->cabinet->name}}</h2>
        <img src="{{asset('uploads/'.$one->picture)}}" class="ones" alt="hurts">

        <li>
            <p><a href="#">{{$one->name}}</a></p>
            <audio controls>   
    <source src="{{asset('public/songs/'.$one->music)}}" type="audio/mpeg">
    Тег audio не поддерживается вашим браузером. 
    <a href="{{asset('public/songs/'.$one->music)}}">Скачайте музыку</a>
  </audio></li>
        @endforeach
    </ul>
</section>
@endsection
