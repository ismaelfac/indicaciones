<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('contract_id') }}
            {{ Form::text('contract_id', $contractPerson->contract_id, ['class' => 'form-control' . ($errors->has('contract_id') ? ' is-invalid' : ''), 'placeholder' => 'Contract Id']) }}
            {!! $errors->first('contract_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('person_id') }}
            {{ Form::text('person_id', $contractPerson->person_id, ['class' => 'form-control' . ($errors->has('person_id') ? ' is-invalid' : ''), 'placeholder' => 'Person Id']) }}
            {!! $errors->first('person_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('typeParticipant') }}
            {{ Form::text('typeParticipant', $contractPerson->typeParticipant, ['class' => 'form-control' . ($errors->has('typeParticipant') ? ' is-invalid' : ''), 'placeholder' => 'Typeparticipant']) }}
            {!! $errors->first('typeParticipant', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('typePerson') }}
            {{ Form::text('typePerson', $contractPerson->typePerson, ['class' => 'form-control' . ($errors->has('typePerson') ? ' is-invalid' : ''), 'placeholder' => 'Typeperson']) }}
            {!! $errors->first('typePerson', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('legalPersonOfContractId') }}
            {{ Form::text('legalPersonOfContractId', $contractPerson->legalPersonOfContractId, ['class' => 'form-control' . ($errors->has('legalPersonOfContractId') ? ' is-invalid' : ''), 'placeholder' => 'Legalpersonofcontractid']) }}
            {!! $errors->first('legalPersonOfContractId', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('legalPersonOfPersonId') }}
            {{ Form::text('legalPersonOfPersonId', $contractPerson->legalPersonOfPersonId, ['class' => 'form-control' . ($errors->has('legalPersonOfPersonId') ? ' is-invalid' : ''), 'placeholder' => 'Legalpersonofpersonid']) }}
            {!! $errors->first('legalPersonOfPersonId', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rentSplitPercentage') }}
            {{ Form::text('rentSplitPercentage', $contractPerson->rentSplitPercentage, ['class' => 'form-control' . ($errors->has('rentSplitPercentage') ? ' is-invalid' : ''), 'placeholder' => 'Rentsplitpercentage']) }}
            {!! $errors->first('rentSplitPercentage', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isIVAResponsible') }}
            {{ Form::text('isIVAResponsible', $contractPerson->isIVAResponsible, ['class' => 'form-control' . ($errors->has('isIVAResponsible') ? ' is-invalid' : ''), 'placeholder' => 'Isivaresponsible']) }}
            {!! $errors->first('isIVAResponsible', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isIntegralProtection') }}
            {{ Form::text('isIntegralProtection', $contractPerson->isIntegralProtection, ['class' => 'form-control' . ($errors->has('isIntegralProtection') ? ' is-invalid' : ''), 'placeholder' => 'Isintegralprotection']) }}
            {!! $errors->first('isIntegralProtection', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('itIsGuaranteed') }}
            {{ Form::text('itIsGuaranteed', $contractPerson->itIsGuaranteed, ['class' => 'form-control' . ($errors->has('itIsGuaranteed') ? ' is-invalid' : ''), 'placeholder' => 'Itisguaranteed']) }}
            {!! $errors->first('itIsGuaranteed', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bankingEntity') }}
            {{ Form::text('bankingEntity', $contractPerson->bankingEntity, ['class' => 'form-control' . ($errors->has('bankingEntity') ? ' is-invalid' : ''), 'placeholder' => 'Bankingentity']) }}
            {!! $errors->first('bankingEntity', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('accountType') }}
            {{ Form::text('accountType', $contractPerson->accountType, ['class' => 'form-control' . ($errors->has('accountType') ? ' is-invalid' : ''), 'placeholder' => 'Accounttype']) }}
            {!! $errors->first('accountType', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('accountNumber') }}
            {{ Form::text('accountNumber', $contractPerson->accountNumber, ['class' => 'form-control' . ($errors->has('accountNumber') ? ' is-invalid' : ''), 'placeholder' => 'Accountnumber']) }}
            {!! $errors->first('accountNumber', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isConsignmentPayment') }}
            {{ Form::text('isConsignmentPayment', $contractPerson->isConsignmentPayment, ['class' => 'form-control' . ($errors->has('isConsignmentPayment') ? ' is-invalid' : ''), 'placeholder' => 'Isconsignmentpayment']) }}
            {!! $errors->first('isConsignmentPayment', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $contractPerson->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isActive') }}
            {{ Form::text('isActive', $contractPerson->isActive, ['class' => 'form-control' . ($errors->has('isActive') ? ' is-invalid' : ''), 'placeholder' => 'Isactive']) }}
            {!! $errors->first('isActive', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>