@extends('layouts.app')

@section('template_title')
    {{ $curso->name ?? 'Show Curso' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Curso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cursos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Seccion:</strong>
                            {{ $curso->seccion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Periodos Academicos:</strong>
                            {{ $curso->id_periodos_academicos }}
                        </div>
                        <div class="form-group">
                            <strong>Id Paralelos:</strong>
                            {{ $curso->id_paralelos }}
                        </div>
                        <div class="form-group">
                            <strong>Id Profesores:</strong>
                            {{ $curso->id_profesores }}
                        </div>
                        <div class="form-group">
                            <strong>Id Niveles:</strong>
                            {{ $curso->id_niveles }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
