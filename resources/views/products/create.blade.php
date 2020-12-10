@extends('app')

@section('title', '建立商品表單')

@section('team11_theme', '建立商品表單')

@section('team11_contents')
    {!! Form::open(['url' => 'products/store']) !!}
    @include('products.form', ['submitButtonText'=>"新增商品資料"])
    {!! Form::close() !!}

@endsection
