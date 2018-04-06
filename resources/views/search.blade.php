@extends('layouts.base') @section('content')
<h2>Песня</h2>
@foreach($music as $one)
<div align="center">
    <p><a href="{{asset('music/'.$one->id)}}">{{$one->name}}</a></p>

</div>

@endforeach
<h2>Текст песни</h2>
@foreach($song as $one)
<div align="center">
    <p><a href="{{asset('songs/'.$one->id)}}">{{$one->name}}</a></p>

</div>

@endforeach
<h2>Новости</h2>
@foreach($news as $one)
<div align="center">
    <p><a href="{{asset('news/'.$one->id)}}">{{$one->name}} </a></p>

</div>
@endforeach @endsection
