@extends('layouts.app')

@section('template_title')
    {{ $paralelo->name ?? 'Show Paralelo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Paralelo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('paralelos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Paralelo:</strong>
                            {{ $paralelo->paralelo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
