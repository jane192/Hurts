@extends('layouts.base')@section('content') @foreach($compnews as $one)
<h2>{{$one->name}}</h2>
<img class="foto" src="{{$one->picture}}" alt="hurts"> @endforeach


<div align="center">
    {!!$compnews->links();!!}
</div>
@endsection
