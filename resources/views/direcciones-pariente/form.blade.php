<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('calle_primaria') }}
            {{ Form::text('calle_primaria', $direccionesPariente->calle_primaria, ['class' => 'form-control' . ($errors->has('calle_primaria') ? ' is-invalid' : ''), 'placeholder' => 'Calle Primaria']) }}
            {!! $errors->first('calle_primaria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('calle_secundaria') }}
            {{ Form::text('calle_secundaria', $direccionesPariente->calle_secundaria, ['class' => 'form-control' . ($errors->has('calle_secundaria') ? ' is-invalid' : ''), 'placeholder' => 'Calle Secundaria']) }}
            {!! $errors->first('calle_secundaria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_casa') }}
            {{ Form::text('numero_casa', $direccionesPariente->numero_casa, ['class' => 'form-control' . ($errors->has('numero_casa') ? ' is-invalid' : ''), 'placeholder' => 'Numero Casa']) }}
            {!! $errors->first('numero_casa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('provincia') }}
            {{ Form::text('provincia', $direccionesPariente->provincia, ['class' => 'form-control' . ($errors->has('provincia') ? ' is-invalid' : ''), 'placeholder' => 'Provincia']) }}
            {!! $errors->first('provincia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('canton') }}
            {{ Form::text('canton', $direccionesPariente->canton, ['class' => 'form-control' . ($errors->has('canton') ? ' is-invalid' : ''), 'placeholder' => 'Canton']) }}
            {!! $errors->first('canton', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('parroquia') }}
            {{ Form::text('parroquia', $direccionesPariente->parroquia, ['class' => 'form-control' . ($errors->has('parroquia') ? ' is-invalid' : ''), 'placeholder' => 'Parroquia']) }}
            {!! $errors->first('parroquia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('referencia') }}
            {{ Form::text('referencia', $direccionesPariente->referencia, ['class' => 'form-control' . ($errors->has('referencia') ? ' is-invalid' : ''), 'placeholder' => 'Referencia']) }}
            {!! $errors->first('referencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_parientes') }}
            {{ Form::text('id_parientes', $direccionesPariente->id_parientes, ['class' => 'form-control' . ($errors->has('id_parientes') ? ' is-invalid' : ''), 'placeholder' => 'Id Parientes']) }}
            {!! $errors->first('id_parientes', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>