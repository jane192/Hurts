@extends('layouts.base') @section('content')
<table class="table table-bordered table-striped" width="100%">

    <tr>
        <td width="200px">Фото</td>
        <td>Название</td>
        <td>Код продукта</td>
        <td>Цена</td>
        <td>Категория</td>
    </tr>
    @foreach($products as $one)
    <tr>
        <td width="200">
            <a href="#" class="link" data_id="{{asset($one['id']) }}"><img
                            src="{{asset('public/load/'.$one->picture)}}" alt=" " width=200px></a>

        </td>
        <td>
            <?=$one['name']; ?>
        </td>
        <td>
            <?=$one['product_code']; ?>
        </td>
        <td>
            <?=$one['price']; ?>
        </td>
        <td>
            <a href="{{asset('/alboms')}}"></a>
            <?=$one->catalogs->name;?>
        </td>


    </tr>
    @endforeach
</table>
<div align="center">
    {!!$products->links();!!}
</div>
@endsection
