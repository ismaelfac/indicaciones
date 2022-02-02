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

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estates as $estate)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $estate->address }}</td>

                                            <td>
                                                
                                                <form action="{{ route('estates.destroy',$estate->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('estates.show',$estate->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('estates.edit',$estate->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    <a class="btn btn-sm btn-danger" href="{{ url('estates/pdf',$estate->id) }}" target="_blank"><i class="fa fa-fw fa-pdf"></i> PDF</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
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
