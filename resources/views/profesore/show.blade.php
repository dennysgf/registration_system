@extends('layouts.app')

@section('template_title')
    {{ $profesore->name ?? 'Show Profesore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información del tutor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-dark" href="{{ route('profesores.index') }}"><i class="fa-solid fa-caret-left"></i> regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $profesore->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $profesore->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $profesore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $profesore->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $profesore->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Telefono:</strong>
                            {{ $profesore->numero_telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Sex:</strong>
                            {{ $profesore->sex }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
