<!-- Descricao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Lei Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lei', 'Lei:') !!}
    {!! Form::text('lei', null, ['class' => 'form-control']) !!}
</div>

<!-- Decreto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('decreto', 'Decreto:') !!}
    {!! Form::text('decreto', null, ['class' => 'form-control']) !!}
</div>

<!-- Classificacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('classificacao', 'Classificacao:') !!}
    {!! Form::text('classificacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Multa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('multa', 'Multa:') !!}
    {!! Form::text('multa', null, ['class' => 'form-control']) !!}
</div>

<!-- Detalhamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('detalhamento', 'Detalhamento:') !!}
    {!! Form::text('detalhamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Diurno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('diurno', 'Diurno:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('diurno', false) !!}
        {!! Form::checkbox('diurno', '1', null) !!} 1
    </label>
</div>

<!-- Vespertino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vespertino', 'Vespertino:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('vespertino', false) !!}
        {!! Form::checkbox('vespertino', '1', null) !!} 1
    </label>
</div>

<!-- Noturno1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('noturno1', 'Noturno1:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('noturno1', false) !!}
        {!! Form::checkbox('noturno1', '1', null) !!} 1
    </label>
</div>

<!-- Noturno2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('noturno2', 'Noturno2:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('noturno2', false) !!}
        {!! Form::checkbox('noturno2', '1', null) !!} 1
    </label>
</div>

<!-- Sex Sab Fer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sex_sab_fer', 'Sex Sab Fer:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('sex_sab_fer', false) !!}
        {!! Form::checkbox('sex_sab_fer', '1', null) !!} 1
    </label>
</div>

<!-- Sistemas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sistemas', 'Sistemas:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('sistemas', false) !!}
        {!! Form::checkbox('sistemas', '1', null) !!} 1
    </label>
</div>

<!-- Passeios Field -->
<div class="form-group col-sm-6">
    {!! Form::label('passeios', 'Passeios:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('passeios', false) !!}
        {!! Form::checkbox('passeios', '1', null) !!} 1
    </label>
</div>

<!-- Automotor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('automotor', 'Automotor:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('automotor', false) !!}
        {!! Form::checkbox('automotor', '1', null) !!} 1
    </label>
</div>

<!-- Frequentadores Field -->
<div class="form-group col-sm-6">
    {!! Form::label('frequentadores', 'Frequentadores:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('frequentadores', false) !!}
        {!! Form::checkbox('frequentadores', '1', null) !!} 1
    </label>
</div>

<!-- Dentro Dos Limites Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dentro_dos_limites', 'Dentro Dos Limites:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('dentro_dos_limites', false) !!}
        {!! Form::checkbox('dentro_dos_limites', '1', null) !!} 1
    </label>
</div>

<!-- Escolas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('escolas', 'Escolas:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('escolas', false) !!}
        {!! Form::checkbox('escolas', '1', null) !!} 1
    </label>
</div>

<!-- Tonais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tonais', 'Tonais:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('tonais', false) !!}
        {!! Form::checkbox('tonais', '1', null) !!} 1
    </label>
</div>

<!-- Faixa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('faixa', 'Faixa:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('faixa', false) !!}
        {!! Form::checkbox('faixa', '1', null) !!} 1
    </label>
</div>

<!-- Construcao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('construcao', 'Construcao:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('construcao', false) !!}
        {!! Form::checkbox('construcao', '1', null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('artigos.index') !!}" class="btn btn-default">Cancel</a>
</div>
