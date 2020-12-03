@extends('app')

@section('title', '顯示特定廠商')

@section('team11_theme', '您所選取的廠商資料')

@section('team11_contents')
    編號：{{ $id }} <br>
    廠商名字：{{ $name }} <br>
    地址:{{ $home }} <br>
    董事長：{{ $ceo }} <br>
    廠商電話：{{ $phone }} <br>
@endsection
