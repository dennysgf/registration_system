@extends('layouts.app')

@section('template_title')
    Representante
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Representante') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('representantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Type Dni</th>
										<th>Cedula</th>
										<th>Apellido</th>
										<th>Nombre</th>
										<th>Nacionalidad</th>
										<th>Correo</th>
										<th>Instruccion</th>
										<th>Sexo</th>
										<th>Ocupacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($representantes as $representante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $representante->type_dni }}</td>
											<td>{{ $representante->cedula }}</td>
											<td>{{ $representante->apellido }}</td>
											<td>{{ $representante->nombre }}</td>
											<td>{{ $representante->nacionalidad }}</td>
											<td>{{ $representante->correo }}</td>
											<td>{{ $representante->instruccion }}</td>
											<td>{{ $representante->sexo }}</td>
											<td>{{ $representante->ocupacion }}</td>

                                            <td>
                                                <form action="{{ route('representantes.destroy',$representante->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('representantes.show',$representante->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('representantes.edit',$representante->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $representantes->links() !!}
            </div>
        </div>
    </div>
@endsection
