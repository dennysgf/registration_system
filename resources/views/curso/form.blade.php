<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('seccion') }}
            {{ Form::text('seccion', $curso->seccion, ['class' => 'form-control' . ($errors->has('seccion') ? ' is-invalid' : ''), 'placeholder' => 'Seccion']) }}
            {!! $errors->first('seccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_periodos_academicos') }}
            {{ Form::text('id_periodos_academicos', $curso->id_periodos_academicos, ['class' => 'form-control' . ($errors->has('id_periodos_academicos') ? ' is-invalid' : ''), 'placeholder' => 'Id Periodos Academicos']) }}
            {!! $errors->first('id_periodos_academicos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_paralelos') }}
            {{ Form::text('id_paralelos', $curso->id_paralelos, ['class' => 'form-control' . ($errors->has('id_paralelos') ? ' is-invalid' : ''), 'placeholder' => 'Id Paralelos']) }}
            {!! $errors->first('id_paralelos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_profesores') }}
            {{ Form::text('id_profesores', $curso->id_profesores, ['class' => 'form-control' . ($errors->has('id_profesores') ? ' is-invalid' : ''), 'placeholder' => 'Id Profesores']) }}
            {!! $errors->first('id_profesores', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_niveles') }}
            {{ Form::text('id_niveles', $curso->id_niveles, ['class' => 'form-control' . ($errors->has('id_niveles') ? ' is-invalid' : ''), 'placeholder' => 'Id Niveles']) }}
            {!! $errors->first('id_niveles', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>