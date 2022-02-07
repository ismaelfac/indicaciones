@extends('layouts.app')

@section('template_title')
    Create Contract
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
                                    Crear Contrato
                                </span>

                                <div class="float-right">
                                    <a class="btn btn-primary" href="{{ route('contracts.index') }}"> Cancelar</a>
                                </div>
                            </div>                        
                        </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('contracts.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('contract.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
