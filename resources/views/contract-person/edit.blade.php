@extends('layouts.app')

@section('template_title')
    Update Contract Person
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                Editar Persona
                            </span>

                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('people.index') }}"> Cancelar</a>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
