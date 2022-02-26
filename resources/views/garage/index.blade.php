@extends('layouts.app')

@section('template_title')
    Garage
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Garage') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('garages.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Estate Id</th>
										<th>Realestatelicenseplate</th>
										<th>Typegaraje</th>
										<th>Observations</th>
										<th>User Id</th>
										<th>Isactive</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($garages as $garage)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $garage->estate_id }}</td>
											<td>{{ $garage->realEstateLicensePlate }}</td>
											<td>{{ $garage->typeGaraje }}</td>
											<td>{{ $garage->observations }}</td>
											<td>{{ $garage->user_id }}</td>
											<td>{{ $garage->isActive }}</td>

                                            <td>
                                                <form action="{{ route('garages.destroy',$garage->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('garages.show',$garage->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('garages.edit',$garage->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $garages->links() !!}
            </div>
        </div>
    </div>
@endsection
