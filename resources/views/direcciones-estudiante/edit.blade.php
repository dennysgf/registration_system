@extends('layouts.app')

@section('template_title')
    Update Direcciones Estudiante
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Direcciones Estudiante</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('direcciones-estudiante.update', $direccionesEstudiante->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('direcciones-estudiante.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
