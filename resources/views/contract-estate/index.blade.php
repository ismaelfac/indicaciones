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
                                {{ __('Contract Estate') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contract-estate.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                            
											<td>{{ $contractEstate->contract_id }}</td>
											<td>{{ $contractEstate->estate_id }}</td>
											<td><a class="{{ $contractEstate->isActive ? 'btn btn-sm btn-success' : 'btn btn-sm btn-danger'}}" href="">{{ ($contractEstate->isActive ? 'Activo' : 'Inactivo')}}</a></td>

                                            <td>
                                                <form action="{{ route('contract-estates.destroy',$contractEstate->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contract-estates.show',$contractEstate->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contract-estates.edit',$contractEstate->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $contractEstates->links() !!}
            </div>
        </div>
    </div>
@endsection
