@extends('layouts.app')

@section('template_title')
    {{ $estate->name ?? 'Show Estate' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                            Datos de {{ $estate->address }}
                            </span>

                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('estates.index') }}"> Cancelar</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $estate->address }}
                        </div>
                        <div class="form-group">
                            <strong>Garajes:</strong>
                            {{ $estate->garajes }}
                        </div>
                        <div class="form-group">
                            <strong>Usefulroom:</strong>
                            {{ $estate->usefulRoom }}
                        </div>
                        <div class="form-group">
                            <strong>Typeestate:</strong>
                            {{ $estate->typeEstate }}
                        </div>
                        <div class="form-group">
                            <strong>Isactive:</strong>
                            {{ $estate->isActive }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
