@extends('app')

@section('title', '顯示特定廠商')

@section('team11_theme', '您所選取的廠商資料')

@section('team11_contents')
{{ $id }} <br>
{{ $name }} <br>
{{ $home }} <br>
{{ $ceo }} <br>
{{ $phone }} <br>
@endsection
