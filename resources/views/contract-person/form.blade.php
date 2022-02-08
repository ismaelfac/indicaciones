<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Contrato') }}
            {{ Form::select('contract_id', $contracts->pluck('asegurable', 'id'), $contractPerson->contract_id, ['class' => 'form-control' . ($errors->has('contract_id') ? ' is-invalid' : '') ]) }}
            {!! $errors->first('contract_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Persona') }}
            {{ Form::select('person_id', $people->pluck('names', 'id') , $contractPerson->person_id, ['class' => 'form-control' . ($errors->has('person_id') ? ' is-invalid' : '') ]) }}
            {!! $errors->first('person_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Persona') }}
            {{ Form::select('typePerson', [
                'NO DEFINIDO' => 'NO DEFINIDO',
                'ARRENDATARIO' => 'ARRENDATARIO',
                'COMODATARIO' => 'COMODATARIO',
                'DEUDOR' => 'DEUDOR',
                'PROPIETARIO' => 'PROPIETARIO',
                'USUFRUSTUARIO' => 'USUFRUSTUARIO'
                ], $contractPerson->typePerson, ['class' => 'form-control' . ($errors->has('typePerson') ? ' is-invalid' : '') ]) }}
            {!! $errors->first('typePerson', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            <div class="form-check form-switch"> 
            {{ Form::label('Estado') }}           
            {{ Form::checkbox('isActive', ($contractPerson->isActive ? $contractPerson->isActive : true), ['class' => 'form-check-input' . ($errors->has('isActive') ? ' is-invalid' : ''), 'role'=>'switch', 'true' ]) }}
            {!! $errors->first('isActive', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>