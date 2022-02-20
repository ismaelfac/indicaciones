<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombres Completos') }}
            {{ Form::text('names', $person->names, ['class' => 'form-control' . ($errors->has('names') ? ' is-invalid' : ''), 'placeholder' => 'Names']) }}
            {!! $errors->first('names', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion del Contacto') }}
            {{ Form::text('address', $person->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cedula / Nit') }}
            {{ Form::text('dni', $person->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
            {!! $errors->first('dni', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Identificacion') }}
            {{ Form::select('typeDni', [
                'NO DEFINIDO' => 'NO DEFINIDO', 
                'CEDULA DE CIUDADANIA' => 'CEDULA DE CIUDADANIA', 
                'NIT' => 'NIT', 
                'CEDULA DE EXTRANJERIA' => 'CEDULA DE EXTRANJERIA', 
                'PASAPORTE' => 'PASAPORTE'], $person->typeDni, ['class' => 'form-control' . ($errors->has('typeDni') ? ' is-invalid' : '') ]) }}
            {!! $errors->first('typeDni', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('phone', $person->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $person->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            <div class="form-check form-switch"> 
            {{ Form::label('Estado') }}           
            {{ Form::checkbox('isActive', ($person->isActive ? $person->isActive : true), ['class' => 'form-check-input' . ($errors->has('isActive') ? ' is-invalid' : ''), 'role'=>'switch', 'true' ]) }}
            {!! $errors->first('isActive', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Crear / Actualizar</button>
    </div>
</div>