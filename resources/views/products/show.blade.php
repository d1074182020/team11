@extends('app')

@section('title', '顯示特定商品')

@section('team11_theme', '您所選取的商品資料')

@section('team11_contents')
編號:{{ $product->id  }} <br>
商品名稱:{{ $product->name }} <br>
廠商類別:{{ $product->brand_id}} <br>
總類:{{ $product->class }} <br>
價格:{{ $product->price }} <br>
有無線:{{ $product->line }} <br>
@endsection

