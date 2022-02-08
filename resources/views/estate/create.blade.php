@extends('layouts.app')

@section('template_title')
    Create Estate
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
                                Crear Inmueble
                            </span>

                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('estates.index') }}"> Cancelar</a>
                            </div>
                        </div>                        
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('estates.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('estate.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
