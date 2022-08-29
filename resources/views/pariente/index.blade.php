@extends('layouts.app')

@section('template_title')
    Pariente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pariente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('parientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Ocupacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($parientes as $pariente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pariente->type_dni }}</td>
											<td>{{ $pariente->cedula }}</td>
											<td>{{ $pariente->apellido }}</td>
											<td>{{ $pariente->nombre }}</td>
											<td>{{ $pariente->nacionalidad }}</td>
											<td>{{ $pariente->correo }}</td>
											<td>{{ $pariente->instruccion }}</td>
											<td>{{ $pariente->ocupacion }}</td>

                                            <td>
                                                <form action="{{ route('parientes.destroy',$pariente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('parientes.show',$pariente->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('parientes.edit',$pariente->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $parientes->links() !!}
            </div>
        </div>
    </div>
@endsection
