@extends('layouts.app')

@section('template_title')
    {{ $direccionesPariente->name ?? 'Show Direcciones Pariente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Direcciones Pariente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('direcciones-pariente.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Calle Primaria:</strong>
                            {{ $direccionesPariente->calle_primaria }}
                        </div>
                        <div class="form-group">
                            <strong>Calle Secundaria:</strong>
                            {{ $direccionesPariente->calle_secundaria }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Casa:</strong>
                            {{ $direccionesPariente->numero_casa }}
                        </div>
                        <div class="form-group">
                            <strong>Provincia:</strong>
                            {{ $direccionesPariente->provincia }}
                        </div>
                        <div class="form-group">
                            <strong>Canton:</strong>
                            {{ $direccionesPariente->canton }}
                        </div>
                        <div class="form-group">
                            <strong>Parroquia:</strong>
                            {{ $direccionesPariente->parroquia }}
                        </div>
                        <div class="form-group">
                            <strong>Referencia:</strong>
                            {{ $direccionesPariente->referencia }}
                        </div>
                        <div class="form-group">
                            <strong>Id Parientes:</strong>
                            {{ $direccionesPariente->id_parientes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
