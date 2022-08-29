<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('calle_primaria') }}
            {{ Form::text('calle_primaria', $direccionesRepresentante->calle_primaria, ['class' => 'form-control' . ($errors->has('calle_primaria') ? ' is-invalid' : ''), 'placeholder' => 'Calle Primaria']) }}
            {!! $errors->first('calle_primaria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('calle_secundaria') }}
            {{ Form::text('calle_secundaria', $direccionesRepresentante->calle_secundaria, ['class' => 'form-control' . ($errors->has('calle_secundaria') ? ' is-invalid' : ''), 'placeholder' => 'Calle Secundaria']) }}
            {!! $errors->first('calle_secundaria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_casa') }}
            {{ Form::text('numero_casa', $direccionesRepresentante->numero_casa, ['class' => 'form-control' . ($errors->has('numero_casa') ? ' is-invalid' : ''), 'placeholder' => 'Numero Casa']) }}
            {!! $errors->first('numero_casa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('provincia') }}
            {{ Form::text('provincia', $direccionesRepresentante->provincia, ['class' => 'form-control' . ($errors->has('provincia') ? ' is-invalid' : ''), 'placeholder' => 'Provincia']) }}
            {!! $errors->first('provincia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('canton') }}
            {{ Form::text('canton', $direccionesRepresentante->canton, ['class' => 'form-control' . ($errors->has('canton') ? ' is-invalid' : ''), 'placeholder' => 'Canton']) }}
            {!! $errors->first('canton', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('parroquia') }}
            {{ Form::text('parroquia', $direccionesRepresentante->parroquia, ['class' => 'form-control' . ($errors->has('parroquia') ? ' is-invalid' : ''), 'placeholder' => 'Parroquia']) }}
            {!! $errors->first('parroquia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('referencia') }}
            {{ Form::text('referencia', $direccionesRepresentante->referencia, ['class' => 'form-control' . ($errors->has('referencia') ? ' is-invalid' : ''), 'placeholder' => 'Referencia']) }}
            {!! $errors->first('referencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_representantes') }}
            {{ Form::text('id_representantes', $direccionesRepresentante->id_representantes, ['class' => 'form-control' . ($errors->has('id_representantes') ? ' is-invalid' : ''), 'placeholder' => 'Id Representantes']) }}
            {!! $errors->first('id_representantes', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>