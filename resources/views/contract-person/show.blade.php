@extends('layouts.app')

@section('template_title')
    {{ $contractPerson->name ?? 'Show Contract Person' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                Ver Persona
                            </span>

                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('contract-person.index') }}"> Cancelar</a>
                            </div>
                        </div>                        
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Contract Id:</strong>
                            {{ $contractPerson->contract_id }}
                        </div>
                        <div class="form-group">
                            <strong>Person Id:</strong>
                            {{ $contractPerson->person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Typeperson:</strong>
                            {{ $contractPerson->typePerson }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $contractPerson->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Isactive:</strong>
                            {{ $contractPerson->isActive }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
