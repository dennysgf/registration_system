<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numero') }}
            {{ Form::text('numero', $telefonosEstudiante->numero, ['class' => 'form-control' . ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => 'Numero']) }}
            {!! $errors->first('numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $telefonosEstudiante->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estudiantes') }}
            {{ Form::text('id_estudiantes', $telefonosEstudiante->id_estudiantes, ['class' => 'form-control' . ($errors->has('id_estudiantes') ? ' is-invalid' : ''), 'placeholder' => 'Id Estudiantes']) }}
            {!! $errors->first('id_estudiantes', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20"><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>