<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $endereco->id !!}</p>
</div>

<!-- Logradouro Field -->
<div class="form-group">
    {!! Form::label('logradouro', 'Logradouro:') !!}
    <p>{!! $endereco->logradouro !!}</p>
</div>

<!-- Bairro Field -->
<div class="form-group">
    {!! Form::label('bairro', 'Bairro:') !!}
    <p>{!! $endereco->bairro !!}</p>
</div>

<!-- Regional Field -->
<div class="form-group">
    {!! Form::label('regional', 'Regional:') !!}
    <p>{!! $endereco->regional !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $endereco->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $endereco->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $endereco->deleted_at !!}</p>
</div>

