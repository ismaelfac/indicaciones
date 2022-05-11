@extends('layouts.app')

@section('template_title')
    Document Estate
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Document Estate') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('document-estates.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Document Id</th>
										<th>Filename</th>
										<th>Route</th>
										<th>User Id</th>
										<th>Isactive</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($documentEstates as $documentEstate)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $documentEstate->estate_id }}</td>
											<td>{{ $documentEstate->document_id }}</td>
											<td>{{ $documentEstate->fileName }}</td>
											<td>{{ $documentEstate->route }}</td>
											<td>{{ $documentEstate->user_id }}</td>
											<td>{{ $documentEstate->isActive }}</td>

                                            <td>
                                                <form action="{{ route('document-estates.destroy',$documentEstate->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('document-estates.show',$documentEstate->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('document-estates.edit',$documentEstate->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $documentEstates->links() !!}
            </div>
        </div>
    </div>
@endsection
