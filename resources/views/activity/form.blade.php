<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('date', $activity->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tests') }}
            {{ Form::text('id_tests', $activity->id_tests, ['class' => 'form-control' . ($errors->has('id_tests') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_tests', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_ejercicio') }}
            {{ Form::text('id_excersices', $activity->id_excersices, ['class' => 'form-control' . ($errors->has('id_excersices') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_excersices', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_multimedia') }}
            {{ Form::text('id_mediafiles', $activity->id_mediafiles, ['class' => 'form-control' . ($errors->has('id_mediafiles') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_mediafiles', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_calendario') }}
            {{ Form::text('id_calendars', $activity->id_calendars, ['class' => 'form-control' . ($errors->has('id_calendars') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_calendars', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>