@extends('layouts.app')

@section('template_title')
    Estate
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Inmuebles
                            </span>

                             <div class="float-right">
                                <a href="{{ route('estates.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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
										<th>Dirección</th>
										<th>Garajes</th>
										<th>Cuarto Util</th>
										<th>Tipo de Inmueble</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estates as $estate)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $estate->address }}</td>
											<td>{{ $estate->garajes }}</td>
											<td>{{ $estate->usefulRoom }}</td>
											<td>{{ $estate->typeEstate }}</td>
											<td><a href="" class="{{ $estate->isActive ? 'btn btn-sm btn-success' : 'btn btn-sm btn-danger'}}">{{ $estate->isActive ? 'Activo': 'Inactivo' }}</a></td>

                                            <td>
                                                <form action="{{ route('estates.destroy',$estate->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('estates.show',$estate->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('estates.edit',$estate->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $estates->links() !!}
            </div>
        </div>
    </div>
@endsection
