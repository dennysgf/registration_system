@extends('layouts.app')

@section('template_title')
    {{ $parientesEstudiante->name ?? 'Show Parientes Estudiante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Parientes Estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('parientes-estudiante.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Parentezco:</strong>
                            {{ $parientesEstudiante->parentezco }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estudiantes:</strong>
                            {{ $parientesEstudiante->id_estudiantes }}
                        </div>
                        <div class="form-group">
                            <strong>Id Parientes:</strong>
                            {{ $parientesEstudiante->id_parientes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
