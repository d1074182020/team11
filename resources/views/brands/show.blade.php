@extends('app')

@section('title', '顯示特定廠商')

@section('team11_theme', '您所選取的廠商資料')

@section('team11_contents')
    編號：{{ $brand->id }} <br>
    廠商名字：{{ $brand->name }} <br>
    地址:{{ $brand->home }} <br>
    董事長：{{ $brand->ceo }} <br>
    廠商電話：{{ $brand->phone }} <br>
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        {{ $brand->name }}所有商品
    </div>
    <table>
        <tr>
            <th>編號</th>
            <th>產品名稱</th>
            <th>總類</th>
            <th>價格</th>
            <th>有無線</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->class }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->line }}</td>
            </tr>
        @endforeach
    </table>

@endsection
