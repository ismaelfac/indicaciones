@extends('layouts.app')

@section('template_title')
    {{ $estate->name ?? 'Show Estate' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Estate</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estates.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $estate->address }}
                        </div>
                        <div class="form-group">
                            <strong>Realestateregistration:</strong>
                            {{ $estate->realEstateRegistration }}
                        </div>
                        <div class="form-group">
                            <strong>Typeestate:</strong>
                            {{ $estate->typeEstate }}
                        </div>
                        <div class="form-group">
                            <strong>Issharedelectricitymeter:</strong>
                            {{ $estate->isSharedElectricityMeter }}
                        </div>
                        <div class="form-group">
                            <strong>Issharedwatermeter:</strong>
                            {{ $estate->isSharedWaterMeter }}
                        </div>
                        <div class="form-group">
                            <strong>Issharedgasmeter:</strong>
                            {{ $estate->isSharedGasMeter }}
                        </div>
                        <div class="form-group">
                            <strong>Isgarage:</strong>
                            {{ $estate->isGarage }}
                        </div>
                        <div class="form-group">
                            <strong>Isusefulroom:</strong>
                            {{ $estate->isUseFulRoom }}
                        </div>
                        <div class="form-group">
                            <strong>Hasadministration:</strong>
                            {{ $estate->hasAdministration }}
                        </div>
                        <div class="form-group">
                            <strong>Paymentinfavorof:</strong>
                            {{ $estate->paymentInFavorOf }}
                        </div>
                        <div class="form-group">
                            <strong>Typedni:</strong>
                            {{ $estate->typeDni }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $estate->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $estate->email }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $estate->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Bankingentity:</strong>
                            {{ $estate->bankingEntity }}
                        </div>
                        <div class="form-group">
                            <strong>Accounttype:</strong>
                            {{ $estate->accountType }}
                        </div>
                        <div class="form-group">
                            <strong>Accountnumber:</strong>
                            {{ $estate->accountNumber }}
                        </div>
                        <div class="form-group">
                            <strong>Paymentdate:</strong>
                            {{ $estate->paymentDate }}
                        </div>
                        <div class="form-group">
                            <strong>Namesadministrator:</strong>
                            {{ $estate->namesAdministrator }}
                        </div>
                        <div class="form-group">
                            <strong>Annotations:</strong>
                            {{ $estate->annotations }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $estate->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Isactive:</strong>
                            {{ $estate->isActive }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
