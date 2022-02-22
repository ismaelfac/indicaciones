@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card" id="app">
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
                                    <th>Asegurable</th>
                                    <th>Dirección Inmueble</th>
                                    <th>Arrendatario</th>
                                    <th>Deudores</th>
                                    <th>Propietarios</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contracts as $contract)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $contract->asegurable }}</td>
                                        <td><a href="{{ url('contract-estate',$contract->id) }}" class="{{ $contract->contractEstates ? 'btn btn-sm btn-success' : 'btn btn-sm btn-danger'}}"> @foreach($contract->contractEstates as $estate){{ $estate->address ? $estate->address : 'Asignar'  }}@endforeach</a> </td>
                                        <td><a href="#" class="{{ $contract->person ? 'btn btn-sm btn-success' : 'btn btn-sm btn-danger'}}"> @foreach($contract->contractPerson as $person) {{ $person->pivot->typeParticipant <> 'ARRENDATARIO' ?: $person->names  }}@endforeach </a> </td>
                                        <td><a href="#" class="{{ $contract->person ? 'btn btn-sm btn-success' : 'btn btn-sm btn-danger'}}">@foreach($contract->contractPerson as $person) {{ $person->pivot->typeParticipant <> 'DEUDORES' ?: $person->names  }}@endforeach</a></td>
                                        <td><a href="#" class="{{ $contract->person ? 'btn btn-sm btn-success' : 'btn btn-sm btn-danger'}}">@foreach($contract->contractPerson as $person) {{ $person->pivot->typeParticipant <> 'PROPIETARIO' ?: $person->names}}@endforeach</a></td>											
                                        
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
