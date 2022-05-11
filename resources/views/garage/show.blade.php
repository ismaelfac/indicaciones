@extends('layouts.app')

@section('template_title')
    {{ $garage->name ?? 'Show Garage' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Garage</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('garages.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estate Id:</strong>
                            {{ $garage->estate_id }}
                        </div>
                        <div class="form-group">
                            <strong>Realestatelicenseplate:</strong>
                            {{ $garage->realEstateLicensePlate }}
                        </div>
                        <div class="form-group">
                            <strong>Typegaraje:</strong>
                            {{ $garage->typeGaraje }}
                        </div>
                        <div class="form-group">
                            <strong>Observations:</strong>
                            {{ $garage->observations }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $garage->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Isactive:</strong>
                            {{ $garage->isActive }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
