@extends('layouts.app')

@section('template_title')
    {{ $direccionesRepresentante->name ?? 'Show Direcciones Representante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Direcciones Representante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('direcciones-representante.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Calle Primaria:</strong>
                            {{ $direccionesRepresentante->calle_primaria }}
                        </div>
                        <div class="form-group">
                            <strong>Calle Secundaria:</strong>
                            {{ $direccionesRepresentante->calle_secundaria }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Casa:</strong>
                            {{ $direccionesRepresentante->numero_casa }}
                        </div>
                        <div class="form-group">
                            <strong>Provincia:</strong>
                            {{ $direccionesRepresentante->provincia }}
                        </div>
                        <div class="form-group">
                            <strong>Canton:</strong>
                            {{ $direccionesRepresentante->canton }}
                        </div>
                        <div class="form-group">
                            <strong>Parroquia:</strong>
                            {{ $direccionesRepresentante->parroquia }}
                        </div>
                        <div class="form-group">
                            <strong>Referencia:</strong>
                            {{ $direccionesRepresentante->referencia }}
                        </div>
                        <div class="form-group">
                            <strong>Id Representantes:</strong>
                            {{ $direccionesRepresentante->id_representantes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
