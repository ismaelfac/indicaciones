@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" id="app">
                <div class="card-header">{{ __('Indicadores de Contratos') }}</div>
                <a href="#" class="btn btn-danger">PDF</a>
                <div class="card-body">            
                    <example-component/>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
