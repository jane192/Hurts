@extends('layouts.base')@section('content')

<h2>{{$onenews->name}}</h2>
<img class="foto" src="{{asset($onenews->picture)}}" alt="hurts">
<p class="texts">{{$onenews->discription}}</p>
@endsection
