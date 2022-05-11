@extends('layouts.app')

@section('template_title')
    {{ $contractPerson->name ?? 'Show Contract Person' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contract Person</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contract-people.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Contract Id:</strong>
                            {{ $contractPerson->contract_id }}
                        </div>
                        <div class="form-group">
                            <strong>Person Id:</strong>
                            {{ $contractPerson->person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Typeparticipant:</strong>
                            {{ $contractPerson->typeParticipant }}
                        </div>
                        <div class="form-group">
                            <strong>Typeperson:</strong>
                            {{ $contractPerson->typePerson }}
                        </div>
                        <div class="form-group">
                            <strong>Legalpersonofcontractid:</strong>
                            {{ $contractPerson->legalPersonOfContractId }}
                        </div>
                        <div class="form-group">
                            <strong>Legalpersonofpersonid:</strong>
                            {{ $contractPerson->legalPersonOfPersonId }}
                        </div>
                        <div class="form-group">
                            <strong>Rentsplitpercentage:</strong>
                            {{ $contractPerson->rentSplitPercentage }}
                        </div>
                        <div class="form-group">
                            <strong>Isivaresponsible:</strong>
                            {{ $contractPerson->isIVAResponsible }}
                        </div>
                        <div class="form-group">
                            <strong>Isintegralprotection:</strong>
                            {{ $contractPerson->isIntegralProtection }}
                        </div>
                        <div class="form-group">
                            <strong>Itisguaranteed:</strong>
                            {{ $contractPerson->itIsGuaranteed }}
                        </div>
                        <div class="form-group">
                            <strong>Bankingentity:</strong>
                            {{ $contractPerson->bankingEntity }}
                        </div>
                        <div class="form-group">
                            <strong>Accounttype:</strong>
                            {{ $contractPerson->accountType }}
                        </div>
                        <div class="form-group">
                            <strong>Accountnumber:</strong>
                            {{ $contractPerson->accountNumber }}
                        </div>
                        <div class="form-group">
                            <strong>Isconsignmentpayment:</strong>
                            {{ $contractPerson->isConsignmentPayment }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $contractPerson->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Isactive:</strong>
                            {{ $contractPerson->isActive }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
