<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Endereco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco', 'Endereco:') !!}
    {!! Form::text('endereco', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bairro', 'Bairro:') !!}
    {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
</div>

<!-- Complemento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('complemento', 'Complemento:') !!}
    {!! Form::text('complemento', null, ['class' => 'form-control']) !!}
</div>

<!-- Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cep', 'Cep:') !!}
    {!! Form::text('cep', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::number('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipio', 'Municipio:') !!}
    {!! Form::number('municipio', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Telfixo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telfixo', 'Telfixo:') !!}
    {!! Form::text('telfixo', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Registroprof Field -->
<div class="form-group col-sm-6">
    {!! Form::label('registroprof', 'Registroprof:') !!}
    {!! Form::text('registroprof', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulotrab Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulotrab', 'Titulotrab:') !!}
    {!! Form::text('titulotrab', null, ['class' => 'form-control']) !!}
</div>

<!-- Modalidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modalidade', 'Modalidade:') !!}
    {!! Form::text('modalidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Editor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('editor', 'Editor:') !!}
    {!! Form::text('editor', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data', 'Data:') !!}
    {!! Form::date('data', null, ['class' => 'form-control']) !!}
</div>

<!-- Ip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ip', 'Ip:') !!}
    {!! Form::text('ip', null, ['class' => 'form-control']) !!}
</div>

<!-- Host Field -->
<div class="form-group col-sm-6">
    {!! Form::label('host', 'Host:') !!}
    {!! Form::text('host', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('empresas.index') !!}" class="btn btn-default">Cancel</a>
</div>
