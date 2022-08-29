<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('paralelo') }}
            {{ Form::text('paralelo', $paralelo->paralelo, ['class' => 'form-control' . ($errors->has('paralelo') ? ' is-invalid' : ''), 'placeholder' => 'Paralelo']) }}
            {!! $errors->first('paralelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>