@extends('app')

@section('title', '編輯特定廠商')

@section('team11_theme', '編輯中的廠商')

@section('team11_contents')
    廠商編號：{{ $id }}<br/>
    {!! Form::open(['url' => 'brands/update/' . $id, 'method' => 'patch']) !!}
    <div class="form-group">
        {!! Form::label('name', '廠商名字：') !!}
        {!! Form::text('name', $name, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('home', '地址：') !!}
        {!! Form::text('home', $home, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('phone', '廠商電話：') !!}
        {!! Form::text('phone', $phone, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ceo', '董事長：') !!}
        {!! Form::text('ceo', $ceo, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('更新廠商', ['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@endsection
