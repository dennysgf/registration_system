<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('parentezco') }}
            {{ Form::text('parentezco', $parientesEstudiante->parentezco, ['class' => 'form-control' . ($errors->has('parentezco') ? ' is-invalid' : ''), 'placeholder' => 'Parentezco']) }}
            {!! $errors->first('parentezco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estudiantes') }}
            {{ Form::text('id_estudiantes', $parientesEstudiante->id_estudiantes, ['class' => 'form-control' . ($errors->has('id_estudiantes') ? ' is-invalid' : ''), 'placeholder' => 'Id Estudiantes']) }}
            {!! $errors->first('id_estudiantes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_parientes') }}
            {{ Form::text('id_parientes', $parientesEstudiante->id_parientes, ['class' => 'form-control' . ($errors->has('id_parientes') ? ' is-invalid' : ''), 'placeholder' => 'Id Parientes']) }}
            {!! $errors->first('id_parientes', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>