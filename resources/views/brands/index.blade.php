@extends('app')

@section('title', '所有廠商')

@section('team11_theme', '目前有的廠商')

@section('team11_contents')
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href="{{ route('brands.create') }} ">新增廠商</a>
    </div>

    <table>
    <tr>
        <th>編號</th>
        <th>品牌公司</th>
        <th>地址</th>
        <th>服務電話</th>
        <th>董事長</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($brands as $brand)
        <tr>
            <td>{{ $brand->id }}</td>
            <td>{{ $brand->name }}</td>
            <td>{{ $brand->home }}</td>
            <td>{{ $brand->phone }}</td>
            <td>{{ $brand->CEO }}</td>
            <td><a href="{{ route('brands.show', ['id'=>$brand->id])}}">顯示</a></td>
            <td><a href="{{ route('brands.edit', ['id'=>$brand->id])}}">修改</a></td>
            <td>
                <form action="{{ url('/brands/delete', ['id' => $brand->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
        </tr>
    @endforeach
</table>

@endsection

