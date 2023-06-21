@extends('layouts.app')

@section('template_title')
    {{ $subscription->name ?? "{{ __('Show') Subscription" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Suscripción</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('subscriptions.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Duración:</strong>
                            {{ $subscription->duration }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $subscription->price }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $subscription->type }}
                        </div>
                        <div class="form-group">
                            <strong>Id Users:</strong>
                            {{ $subscription->id_users }}
                        </div>
                        <div class="form-group">
                            <strong>Id Pago:</strong>
                            {{ $subscription->id_pays }}
                        </div>
                        <div class="form-group">
                            <strong>Id Actividades:</strong>
                            {{ $subscription->id_activities }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
