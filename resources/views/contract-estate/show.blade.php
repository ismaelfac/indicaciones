@extends('layouts.app')

@section('template_title')
    {{ $contractEstate->name ?? 'Show Contract Estate' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contract Estate</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contract-estates.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Contract Id:</strong>
                            {{ $contractEstate->contract_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estate Id:</strong>
                            {{ $contractEstate->estate_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $contractEstate->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Isactive:</strong>
                            {{ $contractEstate->isActive }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
