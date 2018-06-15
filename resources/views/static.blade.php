@extends('layouts.base') @section('content')

<h3 class="name">{{$text->name}}</h3>
{!! $text->body !!} @endsection
