@extends('app')

@section('title', '所有商品')

@section('team11_theme', '目前有的商品')

@section('team11_contents')
    <div class="p-10 border-t border-gray-200 dark:border-gray-700 md:border-t-10 md:border-10">
        <a href="{{ route('products.create') }} ">新增商品</a>
        <a href="{{ route('products.index') }} ">所有商品</a>
        <a href="{{ route('products.senior') }}">破萬商品</a>

        <form action="{{url('products/class')}}" method="post">
            @csrf
            {!! Form::label('class','選取總類') !!}
            {!! Form::select('ca',$classs,['class'=>'form-control']) !!}
            <input class = "btn btn-default" type ="submit" value="查詢"/>
        </form>
    </div>

    <table>
    <tr>
        <th>編號</th>
        <th>產品名稱</th>
        <th>廠商類別</th>
        <th>總類</th>
        <th>價格</th>
        <th>有無線</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->brand->name }}</td>
                <td>{{ $product->class }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->line }}</td>
                <td><a href="{{ route('products.show', ['id'=>$product->id])}}">顯示</a></td>
                <td><a href="{{ route('products.edit', ['id'=>$product->id])}}">修改</a></td>
                <td>
                    <form action="{{ url('/products/delete', ['id' => $product->id]) }}" method="post">
                        <input class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
            </tr>

    @endforeach
</table>
@endsection
