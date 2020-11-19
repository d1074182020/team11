@extends('app')
@section('title','商品')

@section('contents')

    <table>
    <tr>
        <th>編號</th>
        <th>產品名稱</th>
        <th>類別</th>
        <th>總類</th>
        <th>價格</th>
        <th>有無線</th>
        <th>操作1</th>
        <th>操作2</th>
    </tr>
    @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->brand_id }}</td>
                <td>{{ $product->class }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->line }}</td>
                <td><a href="<?php echo route('$products.show', ['id' => $product->id]);?>">顯示</a></td>
                <td><a href="<?php echo route('$products.edit', ['id' => $product->id]);?>">修改</a></td>
            </tr>
    @endforeach
</table>

</body>
</html>
