<div class="form-group">
    {!! Form::label('name', '廠商名字：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('home', '地址：') !!}
    {!! Form::text('home', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone', '廠商電話：') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('ceo', '董事長：') !!}
    {!! Form::text('ceo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
