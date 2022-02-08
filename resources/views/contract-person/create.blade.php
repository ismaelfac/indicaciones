@extends('layouts.app')

@section('template_title')
    Create Person
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                Crear Persona
                            </span>

                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('contract-person.index') }}"> Cancelar</a>
                            </div>
                        </div>                        
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('contract-person.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('contract-person.form')

                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection