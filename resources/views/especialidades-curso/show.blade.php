@extends('layouts.app')

@section('template_title')
    {{ $especialidadesCurso->name ?? 'Show Especialidades Curso' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Especialidades Curso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('especialidades-curso.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $especialidadesCurso->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cursos:</strong>
                            {{ $especialidadesCurso->id_cursos }}
                        </div>
                        <div class="form-group">
                            <strong>Id Especialidades:</strong>
                            {{ $especialidadesCurso->id_especialidades }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
