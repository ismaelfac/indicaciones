<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Numero de Contrato') }}
            {{ Form::text('contractNum', $contract->contractNum, ['class' => 'form-control' . ($errors->has('contractNum') ? ' is-invalid' : ''), 'placeholder' => 'Contractnum']) }}
            {!! $errors->first('contractNum', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('asegurable') }}
            {{ Form::text('asegurable', $contract->asegurable, ['class' => 'form-control' . ($errors->has('asegurable') ? ' is-invalid' : ''), 'placeholder' => 'Asegurable']) }}
            {!! $errors->first('asegurable', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('domus') }}
            {{ Form::text('domus', $contract->domus, ['class' => 'form-control' . ($errors->has('domus') ? ' is-invalid' : ''), 'placeholder' => 'Domus']) }}
            {!! $errors->first('domus', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Valor del Cannon') }}
            {{ Form::text('cannonLease', $contract->cannonLease, ['class' => 'form-control' . ($errors->has('cannonLease') ? ' is-invalid' : ''), 'placeholder' => 'Cannonlease']) }}
            {!! $errors->first('cannonLease', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Valor Admin') }}
            {{ Form::text('adminValue', $contract->adminValue, ['class' => 'form-control' . ($errors->has('adminValue') ? ' is-invalid' : ''), 'placeholder' => 'Adminvalue']) }}
            {!! $errors->first('adminValue', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Incremento') }}
            {{ Form::text('increment', $contract->increment, ['class' => 'form-control' . ($errors->has('increment') ? ' is-invalid' : ''), 'placeholder' => 'Increment']) }}
            {!! $errors->first('increment', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Derechos de Contrato') }}
            {{ Form::text('contractRights', $contract->contractRights, ['class' => 'form-control' . ($errors->has('contractRights') ? ' is-invalid' : ''), 'placeholder' => 'Contractrights']) }}
            {!! $errors->first('contractRights', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Entrega') }}
            {{ Form::date('deliveryDate', $contract->deliveryDate, ['class' => 'form-control' . ($errors->has('deliveryDate') ? ' is-invalid' : ''), 'placeholder' => 'Deliverydate']) }}
            {!! $errors->first('deliveryDate', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Periodo de Gracia') }}
            {{ Form::text('gracePeriod', $contract->gracePeriod, ['class' => 'form-control' . ($errors->has('gracePeriod') ? ' is-invalid' : ''), 'placeholder' => 'Graceperiod']) }}
            {!! $errors->first('gracePeriod', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Claudulas') }}
            {{ Form::text('clause', $contract->clause, ['class' => 'form-control' . ($errors->has('clause') ? ' is-invalid' : ''), 'placeholder' => 'Clause']) }}
            {!! $errors->first('clause', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <a class="btn btn-primary" href="{{ route('contracts.index') }}"> Volver al listado de contratos</a>
        <button type="submit" class="btn btn-primary">Crear</button>
    </div>
</div>