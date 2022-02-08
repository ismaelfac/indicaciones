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
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                            Datos de {{ $person->names }}
                            </span>

                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('people.index') }}"> Cancelar</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $person->address }}
                        </div>
                        <div class="form-group">
                            <strong>Número de Documento:</strong>
                            {{ $person->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Documento:</strong>
                            {{ $person->typeDni }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $person->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $person->email }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $person->isActive }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection