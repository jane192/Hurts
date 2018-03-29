@extends('layouts.base') @section('content')
<div>
    @foreach($songs as $one)
    <h2>{{$one->name}}</h2>
    <div class="center">

        {!!$one->text_song!!}

    </div>
    <a href="#" class="white">{{$one->albom}}</a> @endforeach
</div>

@endsection
