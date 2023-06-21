@extends('layouts.app')

@section('template_title')
    {{ $pay->name ?? "{{ __('Mostrar') Pago" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pays.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong> Pago:</strong>
                            {{ $pay->payment }}
                        </div>
                        <div class="form-group">
                            <strong>Tárjeta de crédito:</strong>
                            {{ $pay->credit_card_number }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo pago:</strong>
                            {{ $pay->type_pay }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
