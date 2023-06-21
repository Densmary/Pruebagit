@extends('layouts.app')

@section('template_title')
    {{ $test->name ?? "{{ __('Mostrar') Test" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Test </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tests.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Pregunta1:</strong>
                            {{ $test->task1 }}
                        </div>
                        <div class="form-group">
                            <strong>Pregunta2:</strong>
                            {{ $test->task2 }}
                        </div>
                        <div class="form-group">
                            <strong>Pregunta3:</strong>
                            {{ $test->task3 }}
                        </div>
                        <div class="form-group">
                            <strong>Pregunta4:</strong>
                            {{ $test->task4 }}
                        </div>
                        <div class="form-group">
                            <strong>Pregunta5:</strong>
                            {{ $test->task5 }}
                        </div>
                        <div class="form-group">
                            <strong>Pregunta6:</strong>
                            {{ $test->task6 }}
                        </div>
                        <div class="form-group">
                            <strong>Pregunta7:</strong>
                            {{ $test->task7 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
