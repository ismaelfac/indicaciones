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
            {{ Form::label('typePerson') }}
            {{ Form::text('typePerson', $contractPerson->typePerson, ['class' => 'form-control' . ($errors->has('typePerson') ? ' is-invalid' : ''), 'placeholder' => 'Typeperson']) }}
            {!! $errors->first('typePerson', '<div class="invalid-feedback">:message</p>') !!}
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