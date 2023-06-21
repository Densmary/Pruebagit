@extends('layouts.app')

@section('template_title')
    {{ $mediafile->name ?? "{{ __('Mostrar') Mediafile" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Múltimedia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mediafiles.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre
                                :</strong>
                            {{ $mediafile->name }}
                        </div>
                        <div class="form-group">
                            <strong>Género:</strong>
                            {{ $mediafile->genre }}
                        </div>
                        <div class="form-group">
                            <strong>Archivo:</strong>
                            {{ $mediafile->archive }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $mediafile->type }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
