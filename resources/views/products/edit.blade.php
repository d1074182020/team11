@extends('app')

@section('title', '編輯特定商品')

@section('team11_theme', '編輯中的商品')

@section('team11_contents')
    廠商編號：{{ $id }}<br/>
    {!! Form::open(['url' => 'products/update/' . $id, 'method' => 'patch']) !!}
    <div class="form-group">
        {!! Form::label('name', '商品名字：') !!}
        {!! Form::text('name', $name, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('brand_id', '廠商類別：') !!}
        {!! Form::text('brand_id', $brand_id, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('class','總類：') !!}
        {!! Form::text('class', $class, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('price', '價格：') !!}
        {!! Form::text('price', $price, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('line', '有無線：') !!}
        {!! Form::text('line', $line, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('更新商品', ['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@endsection

