@extends('layouts.app')

@section('template_title')
    Update Especialidades Curso
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Especialidades Curso</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('especialidades-curso.update', $especialidadesCurso->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('especialidades-curso.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
