@extends('layouts.app')

@section('template_title')
    {{ $document->name ?? 'Show Document' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                Ver Documento
                            </span>

                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('documents.index') }}"> Regresar</a>
                            </div>
                        </div>                        
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $document->title }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $document->category }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $document->isActive ? 'Activo' : 'Inactivo'}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
