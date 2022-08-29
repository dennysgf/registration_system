@extends('layouts.app')

@section('template_title')
    {{ $telefonosPariente->name ?? 'Show Telefonos Pariente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Telefonos Pariente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('telefonos-pariente.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $telefonosPariente->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $telefonosPariente->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Parientes:</strong>
                            {{ $telefonosPariente->id_parientes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
