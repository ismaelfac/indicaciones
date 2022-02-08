@extends('layouts.app')

@section('template_title')
    Contract Person
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contracto Persona') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contract-person.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Contracto</th>
										<th>Persona</th>
										<th>Tipo</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contractPeople as $contractPerson)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $contractPerson->contract->asegurable }}</td>
											<td>{{ $contractPerson->person->names }}</td>
											<td>{{ $contractPerson->typePerson }}</td>
											<td><a href="" class="{{ $contractPerson->isActive ? 'btn btn-sm btn-success' : 'btn btn-sm btn-danger'}}">{{ $contractPerson->isActive ? 'Activo': 'Inactivo' }}</a></td>
                                            <td>
                                                <form action="{{ route('contract-person.destroy',$contractPerson->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contract-person.show',$contractPerson->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contract-person.edit',$contractPerson->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $contractPeople->links() !!}
            </div>
        </div>
    </div>
@endsection
