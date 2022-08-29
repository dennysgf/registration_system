<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('categoria') }}
            {{ Form::text('categoria', $especialidadesCurso->categoria, ['class' => 'form-control' . ($errors->has('categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
            {!! $errors->first('categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_cursos') }}
            {{ Form::text('id_cursos', $especialidadesCurso->id_cursos, ['class' => 'form-control' . ($errors->has('id_cursos') ? ' is-invalid' : ''), 'placeholder' => 'Id Cursos']) }}
            {!! $errors->first('id_cursos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_especialidades') }}
            {{ Form::text('id_especialidades', $especialidadesCurso->id_especialidades, ['class' => 'form-control' . ($errors->has('id_especialidades') ? ' is-invalid' : ''), 'placeholder' => 'Id Especialidades']) }}
            {!! $errors->first('id_especialidades', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>