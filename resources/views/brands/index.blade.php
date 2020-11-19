@extends('app')

@section('title', '所有廠商')

@section('team11_theme', '目前有的廠商')

@section('team11_contents')
<table>
    <tr>
        <th>編號</th>
        <th>品牌公司</th>
        <th>地址</th>
        <th>服務電話</th>
        <th>董事長</th>
        <th>操作1</th>
        <th>操作2</th>
    </tr>
    @foreach($brands as $brand)
        <tr>
            <td>{{ $brand->id }}</td>
            <td>{{ $brand->name }}</td>
            <td>{{ $brand->home }}</td>
            <td>{{ $brand->phone }}</td>
            <td>{{ $brand->CEO }}</td>
            <td><a href="<?php echo route('brands.show', ['id'=>$brand->id]);?>">顯示</a></td>
            <td><a href="<?php echo route('brands.edit', ['id'=>$brand->id]);?>">修改</a></td>
        </tr>
    @endforeach
</table>
@endsection

