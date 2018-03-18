@extends('layouts.app')
@section('scripts')
    @parent
    <script src="{{asset('js/delete.js')}}"></script>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><label>Кабинет пользователя</label></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form class="col-lg-9" enctype = "multipart/form-data" method="post" class = "form2" action="{{asset('home/add')}}">
                            {!!csrf_field()!!}


                            <div class="form-group">
                                <label for="name">Название</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="введите название">
                            </div>

                            <div class="form-group">
                                <label for="price">Цена</label>
                                <input  type="text" class="form-control" id="price" name="price" placeholder="введите цену">
                            </div>
                            <textarea id="body" class="form-control" name="body"  rows="3" placeholder="Описание"></textarea>
                            <div class="form-group">
                                
                                <label for="name">Код продукта</label>
                                <input type="text" class="form-control" id="product_code" name="product_code" placeholder="введите код продукта">
                            </div>
                            
                            <div class="form-group">
                                <label for="name">Фото</label>
                                <input type = "file" name="picture">
                            </div>
                            <div class="form-group">
                                <label for="catalog_id">Каталог</label>
                            <select class="form-control" name="catalog_id" id="catalog_id">
                                @foreach($hurts as $one)
                                <option value="{{$one->id}}">{{$one->name}}</option>
                                @endforeach
                            </select>
                            </div>

                            <div class="form-group">
                            <button type="submit" class="btn btn-default" style="margin-bottom: 10px;">Добавить</button><br>
                            </div>
                        </form>
                </div>
                @include('templates.products')
            </div>
        </div>
    </div>
</div>
@endsection

