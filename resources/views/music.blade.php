@extends('layouts.base') @section('content')


<section id="albom1">
    @foreach($music as $one)

<h2>{{$one->cabinet->name}}</h2>

    <img src="{{asset('uploads/'.$one->picture)}}" class="two" alt="hurts">

    <ul class="albom11">

        <li>
            <p><a href="#">{{$one->name}}</a></p>
            <audio controls>   
    <source src="{{asset('songs/'.$one->music)}}" type="audio/mpeg">
    Тег audio не поддерживается вашим браузером. 
    <a href="{{asset('public/songs/'.$one->music)}}">Скачайте музыку</a>
  </audio></li>


    </ul>
    @endforeach
</section>
<section id="albom1">
    <h2>Happiness</h2>
    <img src="images/photo1.JPG" class="ones" alt="hurts">
    <ul class="albom11">
        <li>
            <p><a href="#">Silver Lining</a></p>
            <audio controls>   
    <source src="01%20-%20Silver%20Lining.mp3" type="audio/mpeg">
    Тег audio не поддерживается вашим браузером. 
    <a href="01%20-%20Silver%20Lining.mp3">Скачайте музыку</a>
  </audio></li>
        <li>
            <p><a href="#">Wondeful Life</a></p>
            <audio controls>   
    <source src="02%20-%20Wonderful%20Life.mp3" type="audio/mpeg">
    Тег audio не поддерживается вашим браузером. 
    <a href="02%20-%20Wonderful%20Life.mp3">Скачайте музыку</a>
  </audio></li>
        <li>
            <p><a href="#">Blood, Tears & Gold</a></p><audio controls>   
    <source src="03%20-%20Blood,%20Tears%20&%20Gold.mp3" type="audio/mpeg">
    Тег audio не поддерживается вашим браузером. 
    <a href="03%20-%20Blood,%20Tears%20&%20Gold.mp3">Скачайте музыку</a>
  </audio></li>
        <li>
            <p><a href="#">Sunday</a></p> <audio controls>   
    <source src="04%20-%20Sunday.mp3" type="audio/mpeg">
    Тег audio не поддерживается вашим браузером. 
    <a href="04%20-%20Sunday.mp3">Скачайте музыку</a>
  </audio></li>
        <li>
            <p><a href="#">Stay</a></p> <audio controls>   
    <source src="05%20-%20Stay.mp3" type="audio/mpeg">
    Тег audio не поддерживается вашим браузером. 
    <a href="05%20-%20Stay.mp3">Скачайте музыку</a>
  </audio></li>


        <li>
            <p><a href="#">Better Than Love</a></p><audio controls>   
    <source src="08%20-%20Better%20Than%20Love.mp3" type="audio/mpeg">
    Тег audio не поддерживается вашим браузером. 
    <a href="08%20-%20Better%20Than%20Love.mp3">Скачайте музыку</a>
               </audio></li>


    </ul>


</section>
<section id="albom2">
    <h2>Exile</h2>
    <img src="images/photo2.jpg" class="two" alt="hurts">
    <ul class="albom22">
        <li>
            <p><a href="#">Exile</a></p>
            <audio controls>   
    <source src="01%20Exile.mp3" type="audio/mpeg">
    Тег audio не поддерживается вашим браузером. 
    <a href="01%20Exile.mp3">Скачайте музыку</a>
  </audio></li>
        <li>
            <p><a href="#">Miracle</a></p>
            <audio controls>   
    <source src="02%20Miracle.mp3" type="audio/mpeg">
    Тег audio не поддерживается вашим браузером. 
    <a href="02%20Miracle.mp3">Скачайте музыку</a>
  </audio></li>
        <li>
            <p><a href="#">Sandman</a></p><audio controls>   
    <source src="03%20Sandman.mp3" type="audio/mpeg">
    Тег audio не поддерживается вашим браузером. 
    <a href="03%20-%20Blood,%20Tears%20&%20Gold.mp3">Скачайте музыку</a>
  </audio></li>
        <li>
            <p><a href="#">Blind</a></p> <audio controls>   
    <source src="04%20Blind.mp3" type="audio/mpeg">
    Тег audio не поддерживается вашим браузером. 
    <a href="04%20Blind.mp3">Скачайте музыку</a>
  </audio></li>


        <li>
            <p><a href="#">Somebody To Die For</a></p><audio controls>   
    <source src="10%20Somebody%20To%20Die%20For.mp3" type="audio/mpeg">
    Тег audio не поддерживается вашим браузером. 
    <a href="10%20Somebody%20To%20Die%20For.mp3">Скачайте музыку</a>
               </audio></li>

    </ul>
</section>

@endsection
