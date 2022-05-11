@extends('layouts.app')

@section('template_title')
    {{ $person->name ?? 'Show Person' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Person</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('people.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Names:</strong>
                            {{ $person->names }}
                        </div>
                        <div class="form-group">
                            <strong>Slug:</strong>
                            {{ $person->slug }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $person->address }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $person->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Typedni:</strong>
                            {{ $person->typeDni }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $person->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $person->email }}
                        </div>
                        <div class="form-group">
                            <strong>Isactive:</strong>
                            {{ $person->isActive }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $person->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
