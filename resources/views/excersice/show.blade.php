@extends('layouts.app')

@section('template_title')
    {{ $excersice->name ?? "{{ __('Show') Excersice" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Ejercicios</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('excersices.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $excersice->type }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $excersice->quiantity }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
