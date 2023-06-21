<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('pregunta1') }}
            {{ Form::text('task1', $test->task1, ['class' => 'form-control' . ($errors->has('task1') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('task1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pregunta2') }}
            {{ Form::text('task2', $test->task2, ['class' => 'form-control' . ($errors->has('task2') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('task2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pregunta3') }}
            {{ Form::text('task3', $test->task3, ['class' => 'form-control' . ($errors->has('task3') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('task3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pregunta4') }}
            {{ Form::text('task4', $test->task4, ['class' => 'form-control' . ($errors->has('task4') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('task4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pregunta5') }}
            {{ Form::text('task5', $test->task5, ['class' => 'form-control' . ($errors->has('task5') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('task5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pregunta6') }}
            {{ Form::text('task6', $test->task6, ['class' => 'form-control' . ($errors->has('task6') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('task6', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pregunta7') }}
            {{ Form::text('task7', $test->task7, ['class' => 'form-control' . ($errors->has('task7') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('task7', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Aceptar') }}</button>
    </div>
</div>