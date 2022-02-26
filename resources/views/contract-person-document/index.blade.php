@extends('layouts.app')

@section('template_title')
    Contract Person Document
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contract Person Document') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contract-person-documents.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Document Id</th>
										<th>Contract Person Id</th>
										<th>Filename</th>
										<th>Route</th>
										<th>User Id</th>
										<th>Isactive</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contractPersonDocuments as $contractPersonDocument)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $contractPersonDocument->document_id }}</td>
											<td>{{ $contractPersonDocument->contract_person_id }}</td>
											<td>{{ $contractPersonDocument->fileName }}</td>
											<td>{{ $contractPersonDocument->route }}</td>
											<td>{{ $contractPersonDocument->user_id }}</td>
											<td>{{ $contractPersonDocument->isActive }}</td>

                                            <td>
                                                <form action="{{ route('contract-person-documents.destroy',$contractPersonDocument->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contract-person-documents.show',$contractPersonDocument->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contract-person-documents.edit',$contractPersonDocument->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $contractPersonDocuments->links() !!}
            </div>
        </div>
    </div>
@endsection
