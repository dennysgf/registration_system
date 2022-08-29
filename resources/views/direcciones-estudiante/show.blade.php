@extends('layouts.app')

@section('template_title')
    {{ $direccionesEstudiante->name ?? 'Show Direcciones Estudiante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Direcciones Estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('direcciones-estudiante.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Calle Primaria:</strong>
                            {{ $direccionesEstudiante->calle_primaria }}
                        </div>
                        <div class="form-group">
                            <strong>Calle Secundaria:</strong>
                            {{ $direccionesEstudiante->calle_secundaria }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Casa:</strong>
                            {{ $direccionesEstudiante->numero_casa }}
                        </div>
                        <div class="form-group">
                            <strong>Provincia:</strong>
                            {{ $direccionesEstudiante->provincia }}
                        </div>
                        <div class="form-group">
                            <strong>Canton:</strong>
                            {{ $direccionesEstudiante->canton }}
                        </div>
                        <div class="form-group">
                            <strong>Parroquia:</strong>
                            {{ $direccionesEstudiante->parroquia }}
                        </div>
                        <div class="form-group">
                            <strong>Referencia:</strong>
                            {{ $direccionesEstudiante->referencia }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estudiantes:</strong>
                            {{ $direccionesEstudiante->id_estudiantes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
