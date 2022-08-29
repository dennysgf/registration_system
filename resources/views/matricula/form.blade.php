<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('type_assigment') }}
            {{ Form::text('type_assigment', $matricula->type_assigment, ['class' => 'form-control' . ($errors->has('type_assigment') ? ' is-invalid' : ''), 'placeholder' => 'Type Assigment']) }}
            {!! $errors->first('type_assigment', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type_enrollment') }}
            {{ Form::text('type_enrollment', $matricula->type_enrollment, ['class' => 'form-control' . ($errors->has('type_enrollment') ? ' is-invalid' : ''), 'placeholder' => 'Type Enrollment']) }}
            {!! $errors->first('type_enrollment', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_registration') }}
            {{ Form::date('date_registration', $matricula->date_registration, ['class' => 'form-control' . ($errors->has('date_registration') ? ' is-invalid' : ''), 'placeholder' => 'Date Registration']) }}
            {!! $errors->first('date_registration', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estudiantes') }}
            {{ Form::text('id_estudiantes', $matricula->id_estudiantes, ['class' => 'form-control' . ($errors->has('id_estudiantes') ? ' is-invalid' : ''), 'placeholder' => 'Id Estudiantes']) }}
            {!! $errors->first('id_estudiantes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_cursos') }}
            {{ Form::text('id_cursos', $matricula->id_cursos, ['class' => 'form-control' . ($errors->has('id_cursos') ? ' is-invalid' : ''), 'placeholder' => 'Id Cursos']) }}
            {!! $errors->first('id_cursos', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>