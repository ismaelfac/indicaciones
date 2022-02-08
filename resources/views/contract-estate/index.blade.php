@extends('layouts.app')

@section('template_title')
    Contract Estate
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Relacion Contracto Inmueble ') }}
                            </span>

                             <div class="float-right">
                             <a href="{{ route('contracts.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Volver a Contratos') }}
                                </a>
                                <a href="{{ route('contract-estate.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva relacion Contrato - Inmueble') }}
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
                                        
										<th>No Contrato</th>
										<th>Inmueble</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contractEstates as $contractEstate)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $contractEstate->contract->asegurable }}</td>
											<td>{{ $contractEstate->estate->address }}</td>
											<td><a class="{{ $contractEstate->isActive ? 'btn btn-sm btn-success' : 'btn btn-sm btn-danger'}}" href="">{{ ($contractEstate->isActive ? 'Activo' : 'Inactivo')}}</a></td>

                                            <td>
                                                <form action="{{ route('contract-estate.destroy',$contractEstate->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contract-estate.show',$contractEstate->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contract-estate.edit',$contractEstate->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $contractEstates->links() !!}
            </div>
        </div>
    </div>
@endsection
