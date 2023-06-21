<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('duración') }}
            {{ Form::text('duration', $subscription->duration, ['class' => 'form-control' . ($errors->has('duration') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('duration', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('price', $subscription->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('type', $subscription->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_usuario') }}
            {{ Form::text('id_users', $subscription->id_users, ['class' => 'form-control' . ($errors->has('id_users') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_users', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_pago') }}
            {{ Form::text('id_pays', $subscription->id_pays, ['class' => 'form-control' . ($errors->has('id_pays') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_pays', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_actividades') }}
            {{ Form::text('id_activities', $subscription->id_activities, ['class' => 'form-control' . ($errors->has('id_activities') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_activities', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>