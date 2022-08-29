@extends('layouts.app')

@section('template_title')
    Direcciones Representante
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Direcciones Representante') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('direcciones-representante.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Id Representantes</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($direccionesRepresentantes as $direccionesRepresentante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $direccionesRepresentante->calle_primaria }}</td>
											<td>{{ $direccionesRepresentante->calle_secundaria }}</td>
											<td>{{ $direccionesRepresentante->numero_casa }}</td>
											<td>{{ $direccionesRepresentante->provincia }}</td>
											<td>{{ $direccionesRepresentante->canton }}</td>
											<td>{{ $direccionesRepresentante->parroquia }}</td>
											<td>{{ $direccionesRepresentante->referencia }}</td>
											<td>{{ $direccionesRepresentante->id_representantes }}</td>

                                            <td>
                                                <form action="{{ route('direcciones-representante.destroy',$direccionesRepresentante->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('direcciones-representante.show',$direccionesRepresentante->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('direcciones-representante.edit',$direccionesRepresentante->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $direccionesRepresentantes->links() !!}
            </div>
        </div>
    </div>
@endsection
