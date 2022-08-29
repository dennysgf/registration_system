@extends('layouts.app')

@section('template_title')
    Direcciones Pariente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Direcciones Pariente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('direcciones-pariente.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Id Parientes</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($direccionesParientes as $direccionesPariente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $direccionesPariente->calle_primaria }}</td>
											<td>{{ $direccionesPariente->calle_secundaria }}</td>
											<td>{{ $direccionesPariente->numero_casa }}</td>
											<td>{{ $direccionesPariente->provincia }}</td>
											<td>{{ $direccionesPariente->canton }}</td>
											<td>{{ $direccionesPariente->parroquia }}</td>
											<td>{{ $direccionesPariente->referencia }}</td>
											<td>{{ $direccionesPariente->id_parientes }}</td>

                                            <td>
                                                <form action="{{ route('direcciones-pariente.destroy',$direccionesPariente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('direcciones-pariente.show',$direccionesPariente->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('direcciones-pariente.edit',$direccionesPariente->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $direccionesParientes->links() !!}
            </div>
        </div>
    </div>
@endsection
