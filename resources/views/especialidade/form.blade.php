<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('specialidad') }}
            {{ Form::text('specialidad', $especialidade->specialidad, ['class' => 'form-control' . ($errors->has('specialidad') ? ' is-invalid' : ''), 'placeholder' => 'Specialidad']) }}
            {!! $errors->first('specialidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>