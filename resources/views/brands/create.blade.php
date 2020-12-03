@extends('app')

@section('title', '建立廠商表單')

@section('team11_theme', '建立廠商表單')

@section('team11_contents')
    {!! Form::open(['url' => 'brands/store']) !!}
    <div class="form-group">
        {!! Form::label('name', '廠商名字：') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('home', '地址：') !!}
        {!! Form::text('home', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('phone', '廠商電話：') !!}
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ceo', '董事長：') !!}
        {!! Form::text('ceo', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('新增廠商', ['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@endsection
