<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('address', $estate->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('garajes') }}
            {{ Form::text('garajes', $estate->garajes, ['class' => 'form-control' . ($errors->has('garajes') ? ' is-invalid' : ''), 'placeholder' => 'Garajes']) }}
            {!! $errors->first('garajes', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cuarto Util') }}
            {{ Form::text('usefulRoom', $estate->usefulRoom, ['class' => 'form-control' . ($errors->has('usefulRoom') ? ' is-invalid' : ''), 'placeholder' => 'Cuarto Util']) }}
            {!! $errors->first('usefulRoom', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Inmueble') }}
            {{ Form::select('typeEstate', [
                'NO DEFINIDO' => 'NO DEFINIDO', 
                'APARTAMENTO' => 'APARTAMENTO', 
                'APARTA-STUDIO' => 'APARTA-STUDIO', 
                'BODEGA' => 'BODEGA', 
                'CASA COMERCIAL' => 'CASA COMERCIAL',
                'CASA VIVIENDA' => 'CASA VIVIENDA'], $estate->typeEstate, ['class' => 'form-control' . ($errors->has('typeEstate') ? ' is-invalid' : '') ]) }}
            {!! $errors->first('typeEstate', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            <div class="form-check form-switch"> 
            {{ Form::label('Estado') }}           
            {{ Form::checkbox('isActive', ($estate->isActive ? $estate->isActive : true), ['class' => 'form-check-input' . ($errors->has('isActive') ? ' is-invalid' : ''), 'role'=>'switch', 'true' ]) }}
            {!! $errors->first('isActive', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>