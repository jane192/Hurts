@extends('layouts.base') @section('content')


<h2>Песни</h2>


<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <? $i=1;?>

        @foreach($songs as $one)

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading{{$i}}">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}" aria-controls="collapse{{$i}}">
         {{$one->name}}
        </a>
                </h4>
            </div>
            <div id="collapse{{$i}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$i}}">
                <div class="panel-body">
                    <div><a class="collapsed" href="{{asset('doc/songs/'.$one->id)}}">Скачать в формате doc</a></div>
                    {!!$one->text_song!!}
                </div>
            </div>
        </div>
        <?$i++;?>
            @endforeach
</div>
<div align="center">
    {!!$songs->links();!!}</div> @endsection
