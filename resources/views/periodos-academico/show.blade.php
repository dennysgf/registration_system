@extends('layouts.app')

@section('template_title')
    {{ $periodosAcademico->name ?? 'Show Periodos Academico' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Periodos Academico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('periodos-academico.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Año:</strong>
                            {{ $periodosAcademico->año }}
                        </div>
                        <div class="form-group">
                            <strong>Periodo:</strong>
                            {{ $periodosAcademico->periodo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
