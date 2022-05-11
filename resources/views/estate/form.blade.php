<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $estate->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('realEstateRegistration') }}
            {{ Form::text('realEstateRegistration', $estate->realEstateRegistration, ['class' => 'form-control' . ($errors->has('realEstateRegistration') ? ' is-invalid' : ''), 'placeholder' => 'Realestateregistration']) }}
            {!! $errors->first('realEstateRegistration', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('typeEstate') }}
            {{ Form::text('typeEstate', $estate->typeEstate, ['class' => 'form-control' . ($errors->has('typeEstate') ? ' is-invalid' : ''), 'placeholder' => 'Typeestate']) }}
            {!! $errors->first('typeEstate', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isSharedElectricityMeter') }}
            {{ Form::text('isSharedElectricityMeter', $estate->isSharedElectricityMeter, ['class' => 'form-control' . ($errors->has('isSharedElectricityMeter') ? ' is-invalid' : ''), 'placeholder' => 'Issharedelectricitymeter']) }}
            {!! $errors->first('isSharedElectricityMeter', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('policyElectricity') }}
            {{ Form::text('policyElectricity', $estate->policyElectricity, ['class' => 'form-control' . ($errors->has('policyElectricity') ? ' is-invalid' : ''), 'placeholder' => 'Policyelectricity']) }}
            {!! $errors->first('policyElectricity', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isSharedWaterMeter') }}
            {{ Form::text('isSharedWaterMeter', $estate->isSharedWaterMeter, ['class' => 'form-control' . ($errors->has('isSharedWaterMeter') ? ' is-invalid' : ''), 'placeholder' => 'Issharedwatermeter']) }}
            {!! $errors->first('isSharedWaterMeter', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('policyWater') }}
            {{ Form::text('policyWater', $estate->policyWater, ['class' => 'form-control' . ($errors->has('policyWater') ? ' is-invalid' : ''), 'placeholder' => 'Policywater']) }}
            {!! $errors->first('policyWater', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isSharedGasMeter') }}
            {{ Form::text('isSharedGasMeter', $estate->isSharedGasMeter, ['class' => 'form-control' . ($errors->has('isSharedGasMeter') ? ' is-invalid' : ''), 'placeholder' => 'Issharedgasmeter']) }}
            {!! $errors->first('isSharedGasMeter', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('policyGas') }}
            {{ Form::text('policyGas', $estate->policyGas, ['class' => 'form-control' . ($errors->has('policyGas') ? ' is-invalid' : ''), 'placeholder' => 'Policygas']) }}
            {!! $errors->first('policyGas', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isGarage') }}
            {{ Form::text('isGarage', $estate->isGarage, ['class' => 'form-control' . ($errors->has('isGarage') ? ' is-invalid' : ''), 'placeholder' => 'Isgarage']) }}
            {!! $errors->first('isGarage', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isUseFulRoom') }}
            {{ Form::text('isUseFulRoom', $estate->isUseFulRoom, ['class' => 'form-control' . ($errors->has('isUseFulRoom') ? ' is-invalid' : ''), 'placeholder' => 'Isusefulroom']) }}
            {!! $errors->first('isUseFulRoom', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hasAdministration') }}
            {{ Form::text('hasAdministration', $estate->hasAdministration, ['class' => 'form-control' . ($errors->has('hasAdministration') ? ' is-invalid' : ''), 'placeholder' => 'Hasadministration']) }}
            {!! $errors->first('hasAdministration', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paymentInFavorOf') }}
            {{ Form::text('paymentInFavorOf', $estate->paymentInFavorOf, ['class' => 'form-control' . ($errors->has('paymentInFavorOf') ? ' is-invalid' : ''), 'placeholder' => 'Paymentinfavorof']) }}
            {!! $errors->first('paymentInFavorOf', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('typeDni') }}
            {{ Form::text('typeDni', $estate->typeDni, ['class' => 'form-control' . ($errors->has('typeDni') ? ' is-invalid' : ''), 'placeholder' => 'Typedni']) }}
            {!! $errors->first('typeDni', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dni') }}
            {{ Form::text('dni', $estate->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
            {!! $errors->first('dni', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $estate->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::text('phone', $estate->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bankingEntity') }}
            {{ Form::text('bankingEntity', $estate->bankingEntity, ['class' => 'form-control' . ($errors->has('bankingEntity') ? ' is-invalid' : ''), 'placeholder' => 'Bankingentity']) }}
            {!! $errors->first('bankingEntity', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('accountType') }}
            {{ Form::text('accountType', $estate->accountType, ['class' => 'form-control' . ($errors->has('accountType') ? ' is-invalid' : ''), 'placeholder' => 'Accounttype']) }}
            {!! $errors->first('accountType', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('accountNumber') }}
            {{ Form::text('accountNumber', $estate->accountNumber, ['class' => 'form-control' . ($errors->has('accountNumber') ? ' is-invalid' : ''), 'placeholder' => 'Accountnumber']) }}
            {!! $errors->first('accountNumber', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paymentDate') }}
            {{ Form::text('paymentDate', $estate->paymentDate, ['class' => 'form-control' . ($errors->has('paymentDate') ? ' is-invalid' : ''), 'placeholder' => 'Paymentdate']) }}
            {!! $errors->first('paymentDate', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('namesAdministrator') }}
            {{ Form::text('namesAdministrator', $estate->namesAdministrator, ['class' => 'form-control' . ($errors->has('namesAdministrator') ? ' is-invalid' : ''), 'placeholder' => 'Namesadministrator']) }}
            {!! $errors->first('namesAdministrator', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('annotations') }}
            {{ Form::text('annotations', $estate->annotations, ['class' => 'form-control' . ($errors->has('annotations') ? ' is-invalid' : ''), 'placeholder' => 'Annotations']) }}
            {!! $errors->first('annotations', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $estate->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isActive') }}
            {{ Form::text('isActive', $estate->isActive, ['class' => 'form-control' . ($errors->has('isActive') ? ' is-invalid' : ''), 'placeholder' => 'Isactive']) }}
            {!! $errors->first('isActive', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>