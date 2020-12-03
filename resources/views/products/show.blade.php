@extends('app')

@section('title', '顯示特定商品')

@section('team11_theme', '您所選取的商品資料')

@section('team11_contents')
編號:{{ $id }} <br>
商品名稱:{{ $name }} <br>
廠商類別:{{ $brand_id}} <br>
總類:{{ $class }} <br>
價格:{{ $price }} <br>
有無線:{{ $line }} <br>
@endsection

