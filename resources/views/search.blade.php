@extends('layouts.base') @section('content') @foreach($music as $one)
<div>
    <h2>{{$one->name}}</h2>
    <a href="{{asset('onesong/'.$one->$id)}}"></a>
</div>

@endforeach @foreach($song as $one)
<div>
    <h2>{{$one->name}}</h2>
    <a href="{{asset('song/'.$one->id)}}"></a>
</div>
@endforeach @foreach($news as $one)
<div>
    <h2>{{$one->name}}</h2>
    <a href="{{asset('onenews/'.$one->id)}}"></a>
</div>
@endforeach @endsection
