@extends('layouts.app')

@section('template_title')
    Telefonos Pariente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Telefonos Pariente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('telefonos-pariente.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Numero</th>
										<th>Tipo</th>
										<th>Id Parientes</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($telefonosParientes as $telefonosPariente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $telefonosPariente->numero }}</td>
											<td>{{ $telefonosPariente->tipo }}</td>
											<td>{{ $telefonosPariente->id_parientes }}</td>

                                            <td>
                                                <form action="{{ route('telefonos-pariente.destroy',$telefonosPariente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('telefonos-pariente.show',$telefonosPariente->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('telefonos-pariente.edit',$telefonosPariente->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $telefonosParientes->links() !!}
            </div>
        </div>
    </div>
@endsection
