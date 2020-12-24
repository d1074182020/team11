@extends('app')

@section('title', '編輯特定廠商')

@section('team11_theme', '編輯中的廠商')

@section('team11_contents')
    @include('message.list')
    {!! Form::model($brand, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\BrandsController@update', $brand->id]]) !!}
    @include('brands.form', ['submitButtonText'=>'更新廠商資料'])
    {!! Form::close() !!}
@endsection
