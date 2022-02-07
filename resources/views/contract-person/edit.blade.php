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
                        <span class="card-title">Update Contract Person</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('contract-person.update', $contractPerson->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('contract-person.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
