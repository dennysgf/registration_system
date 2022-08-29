@extends('layouts.app')

@section('template_title')
    {{ $estudiante->name ?? 'Show Estudiante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información del estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estudiantes.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Type Dni:</strong>
                            {{ $estudiante->type_dni }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $estudiante->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $estudiante->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $estudiante->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $estudiante->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $estudiante->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar Nacimiento:</strong>
                            {{ $estudiante->lugar_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Nacionalidad:</strong>
                            {{ $estudiante->nacionalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Discapacidad:</strong>
                            {{ $estudiante->discapacidad }}
                        </div>
                        <div class="form-group">
                            <strong>N Carnet:</strong>
                            {{ $estudiante->n_carnet }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Discapacidad:</strong>
                            {{ $estudiante->tipo_discapacidad }}
                        </div>
                        <div class="form-group">
                            <strong>Porcentaje:</strong>
                            {{ $estudiante->porcentaje }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $estudiante->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Definicion Etnica:</strong>
                            {{ $estudiante->definicion_etnica }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Sangre:</strong>
                            {{ $estudiante->tipo_sangre }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $estudiante->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Representantes:</strong>
                            {{ $estudiante->id_representantes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
