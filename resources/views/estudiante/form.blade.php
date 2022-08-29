<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('type_dni') }}
            {{ Form::text('type_dni', $estudiante->type_dni, ['class' => 'form-control' . ($errors->has('type_dni') ? ' is-invalid' : ''), 'placeholder' => 'Type Dni']) }}
            {!! $errors->first('type_dni', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cedula') }}
            {{ Form::text('cedula', $estudiante->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $estudiante->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $estudiante->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_nacimiento') }}
            {{ Form::date('fecha_nacimiento', $estudiante->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edad') }}
            {{ Form::text('edad', $estudiante->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('edad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lugar_nacimiento') }}
            {{ Form::text('lugar_nacimiento', $estudiante->lugar_nacimiento, ['class' => 'form-control' . ($errors->has('lugar_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Lugar Nacimiento']) }}
            {!! $errors->first('lugar_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nacionalidad') }}
            {{ Form::text('nacionalidad', $estudiante->nacionalidad, ['class' => 'form-control' . ($errors->has('nacionalidad') ? ' is-invalid' : ''), 'placeholder' => 'Nacionalidad']) }}
            {!! $errors->first('nacionalidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('discapacidad') }}
            {{ Form::text('discapacidad', $estudiante->discapacidad, ['class' => 'form-control' . ($errors->has('discapacidad') ? ' is-invalid' : ''), 'placeholder' => 'Discapacidad']) }}
            {!! $errors->first('discapacidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('n_carnet') }}
            {{ Form::text('n_carnet', $estudiante->n_carnet, ['class' => 'form-control' . ($errors->has('n_carnet') ? ' is-invalid' : ''), 'placeholder' => 'N Carnet']) }}
            {!! $errors->first('n_carnet', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_discapacidad') }}
            {{ Form::text('tipo_discapacidad', $estudiante->tipo_discapacidad, ['class' => 'form-control' . ($errors->has('tipo_discapacidad') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Discapacidad']) }}
            {!! $errors->first('tipo_discapacidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('porcentaje') }}
            {{ Form::text('porcentaje', $estudiante->porcentaje, ['class' => 'form-control' . ($errors->has('porcentaje') ? ' is-invalid' : ''), 'placeholder' => 'Porcentaje']) }}
            {!! $errors->first('porcentaje', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $estudiante->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('definicion_etnica') }}
            {{ Form::text('definicion_etnica', $estudiante->definicion_etnica, ['class' => 'form-control' . ($errors->has('definicion_etnica') ? ' is-invalid' : ''), 'placeholder' => 'Definicion Etnica']) }}
            {!! $errors->first('definicion_etnica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_sangre') }}
            {{ Form::text('tipo_sangre', $estudiante->tipo_sangre, ['class' => 'form-control' . ($errors->has('tipo_sangre') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Sangre']) }}
            {!! $errors->first('tipo_sangre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sexo') }}
            {{ Form::text('sexo', $estudiante->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('sexo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Representante del estudiante') }}
            {{ Form::select('id_representantes',$representantes,$estudiante->id_representantes, ['class' => 'form-control' . ($errors->has('id_representantes') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_representantes', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20"><br>
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-user-plus"></i> Agregar</button>
    </div>
</div>