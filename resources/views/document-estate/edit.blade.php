@extends('layouts.app')

@section('template_title')
    Update Document Estate
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Document Estate</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('document-estates.update', $documentEstate->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('document-estate.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
