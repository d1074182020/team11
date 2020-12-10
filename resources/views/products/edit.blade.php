@extends('app')

@section('title', '編輯特定商品')

@section('team11_theme', '編輯中的商品')

@section('team11_contents')

    {!! Form::model($product, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\ProductsController@update', $product->id]]) !!}
    @include('products.form', ['submitButtonText'=>"更新商品資料"])
    {!! Form::close() !!}
@endsection

