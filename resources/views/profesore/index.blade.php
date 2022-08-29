@extends('layouts.app')

@section('template_title')
    Profesore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Profesore') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('profesores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Cedula</th>
										<th>Apellido</th>
										<th>Nombre</th>
										<th>Fecha Nacimiento</th>
										<th>Correo</th>
										<th>Numero Telefono</th>
										<th>Sex</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($profesores as $profesore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $profesore->cedula }}</td>
											<td>{{ $profesore->apellido }}</td>
											<td>{{ $profesore->nombre }}</td>
											<td>{{ $profesore->fecha_nacimiento }}</td>
											<td>{{ $profesore->correo }}</td>
											<td>{{ $profesore->numero_telefono }}</td>
											<td>{{ $profesore->sex }}</td>

                                            <td>
                                                <form action="{{ route('profesores.destroy',$profesore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('profesores.show',$profesore->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('profesores.edit',$profesore->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $profesores->links() !!}
            </div>
        </div>
    </div>
@endsection
