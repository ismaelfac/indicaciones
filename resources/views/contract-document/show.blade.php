@extends('layouts.app')

@section('template_title')
    {{ $contractDocument->name ?? 'Show Contract Document' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contract Document</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contract-documents.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Contract Id:</strong>
                            {{ $contractDocument->contract_id }}
                        </div>
                        <div class="form-group">
                            <strong>Filename:</strong>
                            {{ $contractDocument->fileName }}
                        </div>
                        <div class="form-group">
                            <strong>Route:</strong>
                            {{ $contractDocument->route }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $contractDocument->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Isactive:</strong>
                            {{ $contractDocument->isActive }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
