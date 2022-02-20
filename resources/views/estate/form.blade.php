<div class="box box-info padding-1">
    <div class="box-body">        
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('address', $estate->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Matricula Inmobiliaria') }}
            {{ Form::text('realEstateRegistration', $estate->realEstateRegistration, ['class' => 'form-control' . ($errors->has('realEstateRegistration') ? ' is-invalid' : ''), 'placeholder' => 'Realestateregistration']) }}
            {!! $errors->first('realEstateRegistration', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Inmueble') }}
            {{ Form::select('typeEstate', [
                'NO DEFINIDO' => 'NO DEFINIDO', 
                'APARTAMENTO' => 'APARTAMENTO',
                'APARTA-ESTUDIO' => 'APARTA-ESTUDIO',
                'BODEGA' => 'BODEGA', 
                'CASA COMERCIAL' => 'CASA COMERCIAL', 
                'CASA VIVIENDA' => 'CASA VIVIENDA', 
                'CUARTO UTIL' => 'CUARTO UTIL',
                'GARAJE' => 'GARAJE'], $estate->typeEstate, ['class' => 'form-control' . ($errors->has('typeEstate') ? ' is-invalid' : '') ]) }}
            {!! $errors->first('typeEstate', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>