@extends('layouts.app')

@section('template_title')
    Contract
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contratos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contracts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Contrato') }}
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
                                        
										<th>Contractnum</th>
										<th>Asegurable</th>
										<th>Domus</th>
										<th>Cannonlease</th>
										<th>Adminvalue</th>
										<th>Increment</th>
										<th>Contractrights</th>
										<th>Deliverydate</th>
										<th>Graceperiod</th>
										<th>Clause</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contracts as $contract)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $contract->contractNum }}</td>
											<td>{{ $contract->asegurable }}</td>
											<td>{{ $contract->domus }}</td>
											<td>{{ $contract->cannonLease }}</td>
											<td>{{ $contract->adminValue }}</td>
											<td>{{ $contract->increment }}</td>
											<td>{{ $contract->contractRights }}</td>
											<td>{{ $contract->deliveryDate }}</td>
											<td>{{ $contract->gracePeriod }}</td>
											<td>{{ $contract->clause }}</td>

                                            <td>
                                                <form action="{{ route('contracts.destroy',$contract->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contracts.show',$contract->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contracts.edit',$contract->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    <a class="btn btn-sm btn-danger" href="{{ url('contracts/pdf',$contract->id) }}" target="_blank"><i class="fa fa-fw fa-pdf"></i> PDF</a>
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
                {!! $contracts->links() !!}
            </div>
        </div>
    </div>
@endsection
