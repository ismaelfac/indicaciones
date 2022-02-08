@extends('layouts.app')

@section('template_title')
    Create Contract Estate
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Crear relacion Contrato / Inmueble</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contract-estate.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('contract-estate.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('contract-estate.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
