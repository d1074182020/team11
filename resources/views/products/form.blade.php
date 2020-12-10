<div class="form-group">
    {!! Form::label('name', '商品名字：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('brand_id', '廠商類別：') !!}
    {!! Form::text('brand_id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('class', '總類：') !!}
    {!! Form::text('class', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('price', '價格：') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('line', '有無線：') !!}
    {!! Form::text('line', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
