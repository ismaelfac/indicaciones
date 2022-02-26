@extends('layouts.app')

@section('template_title')
    Update Contract Person Document
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Contract Person Document</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('contract-person-documents.update', $contractPersonDocument->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('contract-person-document.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection