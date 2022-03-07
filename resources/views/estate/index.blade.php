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
                                {{ __('Estate') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('estates.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Address</th>
										<th>Realestateregistration</th>
										<th>Typeestate</th>
										<th>Issharedelectricitymeter</th>
										<th>Issharedwatermeter</th>
										<th>Issharedgasmeter</th>
										<th>Isgarage</th>
										<th>Isusefulroom</th>
										<th>Hasadministration</th>
										<th>Paymentinfavorof</th>
										<th>Typedni</th>
										<th>Dni</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Bankingentity</th>
										<th>Accounttype</th>
										<th>Accountnumber</th>
										<th>Paymentdate</th>
										<th>Namesadministrator</th>
										<th>Annotations</th>
										<th>User Id</th>
										<th>Isactive</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estates as $estate)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $estate->address }}</td>
											<td>{{ $estate->realEstateRegistration }}</td>
											<td>{{ $estate->typeEstate }}</td>
											<td>{{ $estate->isSharedElectricityMeter }}</td>
											<td>{{ $estate->isSharedWaterMeter }}</td>
											<td>{{ $estate->isSharedGasMeter }}</td>
											<td>{{ $estate->isGarage }}</td>
											<td>{{ $estate->isUseFulRoom }}</td>
											<td>{{ $estate->hasAdministration }}</td>
											<td>{{ $estate->paymentInFavorOf }}</td>
											<td>{{ $estate->typeDni }}</td>
											<td>{{ $estate->dni }}</td>
											<td>{{ $estate->email }}</td>
											<td>{{ $estate->phone }}</td>
											<td>{{ $estate->bankingEntity }}</td>
											<td>{{ $estate->accountType }}</td>
											<td>{{ $estate->accountNumber }}</td>
											<td>{{ $estate->paymentDate }}</td>
											<td>{{ $estate->namesAdministrator }}</td>
											<td>{{ $estate->annotations }}</td>
											<td>{{ $estate->user_id }}</td>
											<td>{{ $estate->isActive }}</td>

                                            <td>
                                                <form action="{{ route('estates.destroy',$estate->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('estates.show',$estate->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('estates.edit',$estate->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $estates->links() !!}
            </div>
        </div>
    </div>
@endsection
