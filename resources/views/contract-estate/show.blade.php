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
                            <span class="card-title">Ver relacion Contrato / Inmueble</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contract-estate.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Asegurable:</strong>
                            {{ $contractEstate->contract->asegurable }}
                        </div>
                        <div class="form-group">
                            <strong>Inmueble: </strong>
                            {{ $contractEstate->estate->address }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
