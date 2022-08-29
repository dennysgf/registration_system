@extends('layouts.app')

@section('template_title')
    Update Periodos Academico
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Periodos Academico</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('periodos-academico.update', $periodosAcademico->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('periodos-academico.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
