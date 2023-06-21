<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('pago') }}
            {{ Form::text('payment', $pay->payment, ['class' => 'form-control' . ($errors->has('payment') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('payment', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tarjeta de crédito') }}
            {{ Form::text('credit_card_number', $pay->credit_card_number, ['class' => 'form-control' . ($errors->has('credit_card_number') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('credit_card_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo pago') }}
            {{ Form::text('type_pay', $pay->type_pay, ['class' => 'form-control' . ($errors->has('type_pay') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('type_pay', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>