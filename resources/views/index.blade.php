 @extends('layouts.base') @section('styles') @parent
<link href="main_page.css" rel="stylesheet"> @stop @section('content')
<h3> {{$text->name}}</h3>

@foreach($news as $one)
<div class="news">

    <ul>
        <li>
            <figure>

                <img src="{{$one->picture}}" alt="hurts">
                <ficaption> {{$one->name}}
                </ficaption>
                <a class="btn btn-warning" href="{{asset('news/'.$one->id)}}">Читать</a>
            </figure>
        </li>

    </ul>
</div>
@endforeach
<div align="center">
    {!!$news->links();!!}
</div> @endsection
