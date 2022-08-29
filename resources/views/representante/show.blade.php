@extends('layouts.app')

@section('template_title')
    {{ $representante->name ?? 'Show Representante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Representante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('representantes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Type Dni:</strong>
                            {{ $representante->type_dni }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $representante->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $representante->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $representante->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Nacionalidad:</strong>
                            {{ $representante->nacionalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $representante->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Instruccion:</strong>
                            {{ $representante->instruccion }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $representante->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Ocupacion:</strong>
                            {{ $representante->ocupacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
