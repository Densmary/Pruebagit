@extends('layouts.app')

@section('template_title')
    {{ $activity->name ?? "{{ __('Show') Activity" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Actividades</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('activities.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $activity->date }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tests:</strong>
                            {{ $activity->id_tests }}
                        </div>
                        <div class="form-group">
                            <strong>Id Ejercicios:</strong>
                            {{ $activity->id_excersices }}
                        </div>
                        <div class="form-group">
                            <strong>Id Múltimedia:</strong>
                            {{ $activity->id_mediafiles }}
                        </div>
                        <div class="form-group">
                            <strong>Id Calendario:</strong>
                            {{ $activity->id_calendars }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
