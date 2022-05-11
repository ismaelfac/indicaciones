@extends('layouts.app')

@section('template_title')
    Document Person
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Document Person') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('document-people.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Person Id</th>
										<th>Document Id</th>
										<th>Filename</th>
										<th>Route</th>
										<th>User Id</th>
										<th>Isactive</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($documentPeople as $documentPerson)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $documentPerson->person_id }}</td>
											<td>{{ $documentPerson->document_id }}</td>
											<td>{{ $documentPerson->fileName }}</td>
											<td>{{ $documentPerson->route }}</td>
											<td>{{ $documentPerson->user_id }}</td>
											<td>{{ $documentPerson->isActive }}</td>

                                            <td>
                                                <form action="{{ route('document-people.destroy',$documentPerson->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('document-people.show',$documentPerson->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('document-people.edit',$documentPerson->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $documentPeople->links() !!}
            </div>
        </div>
    </div>
@endsection
