@extends('layouts.app')

@section('template_title')
    {{ $telefonosEstudiante->name ?? 'Show Telefonos Estudiante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Telefonos Estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('telefonos-estudiante.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $telefonosEstudiante->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $telefonosEstudiante->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estudiantes:</strong>
                            {{ $telefonosEstudiante->id_estudiantes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
