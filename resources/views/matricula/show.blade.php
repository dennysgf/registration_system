@extends('layouts.app')

@section('template_title')
    {{ $matricula->name ?? 'Show Matricula' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Matricula</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('matriculas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Type Assigment:</strong>
                            {{ $matricula->type_assigment }}
                        </div>
                        <div class="form-group">
                            <strong>Type Enrollment:</strong>
                            {{ $matricula->type_enrollment }}
                        </div>
                        <div class="form-group">
                            <strong>Date Registration:</strong>
                            {{ $matricula->date_registration }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estudiantes:</strong>
                            {{ $matricula->id_estudiantes }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cursos:</strong>
                            {{ $matricula->id_cursos }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
