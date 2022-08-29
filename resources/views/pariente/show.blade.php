@extends('layouts.app')

@section('template_title')
    {{ $pariente->name ?? 'Show Pariente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pariente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('parientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Type Dni:</strong>
                            {{ $pariente->type_dni }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $pariente->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $pariente->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pariente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Nacionalidad:</strong>
                            {{ $pariente->nacionalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $pariente->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Instruccion:</strong>
                            {{ $pariente->instruccion }}
                        </div>
                        <div class="form-group">
                            <strong>Ocupacion:</strong>
                            {{ $pariente->ocupacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
