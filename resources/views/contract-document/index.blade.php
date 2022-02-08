@extends('layouts.app')

@section('template_title')
    Contract Document
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contract Document') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contract-documents.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Contract Id</th>
										<th>Filename</th>
										<th>Route</th>
										<th>User Id</th>
										<th>Isactive</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contractDocuments as $contractDocument)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $contractDocument->contract_id }}</td>
											<td>{{ $contractDocument->fileName }}</td>
											<td>{{ $contractDocument->route }}</td>
											<td>{{ $contractDocument->user_id }}</td>
											<td>{{ $contractDocument->isActive }}</td>

                                            <td>
                                                <form action="{{ route('contract-documents.destroy',$contractDocument->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contract-documents.show',$contractDocument->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contract-documents.edit',$contractDocument->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $contractDocuments->links() !!}
            </div>
        </div>
    </div>
@endsection
