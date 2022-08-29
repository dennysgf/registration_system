@extends('layouts.app')

@section('template_title')
    Direcciones Estudiante
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Direcciones Estudiante') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('direcciones-estudiante.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Calle Primaria</th>
										<th>Calle Secundaria</th>
										<th>Numero Casa</th>
										<th>Provincia</th>
										<th>Canton</th>
										<th>Parroquia</th>
										<th>Referencia</th>
										<th>Id Estudiantes</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($direccionesEstudiantes as $direccionesEstudiante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $direccionesEstudiante->calle_primaria }}</td>
											<td>{{ $direccionesEstudiante->calle_secundaria }}</td>
											<td>{{ $direccionesEstudiante->numero_casa }}</td>
											<td>{{ $direccionesEstudiante->provincia }}</td>
											<td>{{ $direccionesEstudiante->canton }}</td>
											<td>{{ $direccionesEstudiante->parroquia }}</td>
											<td>{{ $direccionesEstudiante->referencia }}</td>
											<td>{{ $direccionesEstudiante->id_estudiantes }}</td>

                                            <td>
                                                <form action="{{ route('direcciones-estudiante.destroy',$direccionesEstudiante->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('direcciones-estudiante.show',$direccionesEstudiante->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('direcciones-estudiante.edit',$direccionesEstudiante->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $direccionesEstudiantes->links() !!}
            </div>
        </div>
    </div>
@endsection
