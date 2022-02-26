@extends('layouts.app')

@section('template_title')
    {{ $contractEstateDocument->name ?? 'Show Contract Estate Document' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contract Estate Document</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contract-estate-documents.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Document Id:</strong>
                            {{ $contractEstateDocument->document_id }}
                        </div>
                        <div class="form-group">
                            <strong>Contract Estate Id:</strong>
                            {{ $contractEstateDocument->contract_estate_id }}
                        </div>
                        <div class="form-group">
                            <strong>Filename:</strong>
                            {{ $contractEstateDocument->fileName }}
                        </div>
                        <div class="form-group">
                            <strong>Route:</strong>
                            {{ $contractEstateDocument->route }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $contractEstateDocument->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Isactive:</strong>
                            {{ $contractEstateDocument->isActive }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
