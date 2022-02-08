@extends('layouts.app')

@section('template_title')
    Create Contract Document
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Contract Document</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('contract-documents.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('contract-document.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
