@extends('layouts.app')

@section('template_title')
    Matricula
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Matricula') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('matriculas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Type Assigment</th>
										<th>Type Enrollment</th>
										<th>Date Registration</th>
										<th>Id Estudiantes</th>
										<th>Id Cursos</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matriculas as $matricula)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $matricula->type_assigment }}</td>
											<td>{{ $matricula->type_enrollment }}</td>
											<td>{{ $matricula->date_registration }}</td>
											<td>{{ $matricula->id_estudiantes }}</td>
											<td>{{ $matricula->id_cursos }}</td>

                                            <td>
                                                <form action="{{ route('matriculas.destroy',$matricula->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('matriculas.show',$matricula->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('matriculas.edit',$matricula->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $matriculas->links() !!}
            </div>
        </div>
    </div>
@endsection
