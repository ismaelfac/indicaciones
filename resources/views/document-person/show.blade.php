@extends('layouts.app')

@section('template_title')
    {{ $documentPerson->name ?? 'Show Document Person' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Document Person</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('document-people.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Person Id:</strong>
                            {{ $documentPerson->person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Document Id:</strong>
                            {{ $documentPerson->document_id }}
                        </div>
                        <div class="form-group">
                            <strong>Filename:</strong>
                            {{ $documentPerson->fileName }}
                        </div>
                        <div class="form-group">
                            <strong>Route:</strong>
                            {{ $documentPerson->route }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $documentPerson->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Isactive:</strong>
                            {{ $documentPerson->isActive }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
