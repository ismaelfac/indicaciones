@extends('layouts.app')

@section('template_title')
    {{ $contractPersonDocument->name ?? 'Show Contract Person Document' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contract Person Document</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contract-person-documents.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Document Id:</strong>
                            {{ $contractPersonDocument->document_id }}
                        </div>
                        <div class="form-group">
                            <strong>Contract Person Id:</strong>
                            {{ $contractPersonDocument->contract_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Filename:</strong>
                            {{ $contractPersonDocument->fileName }}
                        </div>
                        <div class="form-group">
                            <strong>Route:</strong>
                            {{ $contractPersonDocument->route }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $contractPersonDocument->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Isactive:</strong>
                            {{ $contractPersonDocument->isActive }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
