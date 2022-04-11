@extends('layouts.app')

@section('template_title')
    {{ $documentEstate->name ?? 'Show Document Estate' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Document Estate</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('document-estates.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estate Id:</strong>
                            {{ $documentEstate->estate_id }}
                        </div>
                        <div class="form-group">
                            <strong>Document Id:</strong>
                            {{ $documentEstate->document_id }}
                        </div>
                        <div class="form-group">
                            <strong>Filename:</strong>
                            {{ $documentEstate->fileName }}
                        </div>
                        <div class="form-group">
                            <strong>Route:</strong>
                            {{ $documentEstate->route }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $documentEstate->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Isactive:</strong>
                            {{ $documentEstate->isActive }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
