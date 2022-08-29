@extends('layouts.app')

@section('template_title')
Telefonos Estudiante
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Telefonos Estudiante') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('telefonos-estudiante.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                <th>Id Estudiantes</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($telefonosEstudiantes as $telefonosEstudiante)
                            <tr>
                                <td>{{ ++$i }}</td>

                                <td>{{ $telefonosEstudiante->numero }}</td>
                                <td>{{ $telefonosEstudiante->tipo }}</td>
                                <td>{{ $telefonosEstudiante->id_estudiantes }}</td>

                                <td>
                                    <form action="{{ route('telefonos-estudiante.destroy',$telefonosEstudiante->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('telefonos-estudiante.show',$telefonosEstudiante->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('telefonos-estudiante.edit',$telefonosEstudiante->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
        {!! $telefonosEstudiantes->links() !!}
    </div>
</div>
</div>
@endsection
