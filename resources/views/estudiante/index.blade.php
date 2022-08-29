@extends('layouts.app')

@section('template_title')
    Estudiante
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado de estudiantes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('estudiantes.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                <i class="fa-solid fa-user-plus"></i>  {{ __('Agregar Estudiante') }}
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
										<th>Fecha Nacimiento</th>
										<th>Edad</th>
										<th>Lugar Nacimiento</th>
										<th>Nacionalidad</th>
										<th>Discapacidad</th>
										<th>N Carnet</th>
										<th>Tipo Discapacidad</th>
										<th>Porcentaje</th>
										<th>Correo</th>
										<th>Definicion Etnica</th>
										<th>Tipo Sangre</th>
										<th>Sexo</th>
										<th>Id Representantes</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estudiantes as $estudiante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $estudiante->type_dni }}</td>
											<td>{{ $estudiante->cedula }}</td>
											<td>{{ $estudiante->apellido }}</td>
											<td>{{ $estudiante->nombre }}</td>
											<td>{{ $estudiante->fecha_nacimiento }}</td>
											<td>{{ $estudiante->edad }}</td>
											<td>{{ $estudiante->lugar_nacimiento }}</td>
											<td>{{ $estudiante->nacionalidad }}</td>
											<td>{{ $estudiante->discapacidad }}</td>
											<td>{{ $estudiante->n_carnet }}</td>
											<td>{{ $estudiante->tipo_discapacidad }}</td>
											<td>{{ $estudiante->porcentaje }}</td>
											<td>{{ $estudiante->correo }}</td>
											<td>{{ $estudiante->definicion_etnica }}</td>
											<td>{{ $estudiante->tipo_sangre }}</td>
											<td>{{ $estudiante->sexo }}</td>
											<td>{{ $estudiante->id_representantes }}</td>

                                            <td>
                                                <form action="{{ route('estudiantes.destroy',$estudiante->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('estudiantes.show',$estudiante->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('estudiantes.edit',$estudiante->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $estudiantes->links() !!}
            </div>
        </div>
    </div>
@endsection
