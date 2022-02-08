<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Contrato') }}
            {{ Form::select('contract_id', $contracts->pluck('asegurable', 'id'), $contractEstate->contract_id, ['class' => 'form-control' . ($errors->has('contract_id') ? ' is-invalid' : '') ]) }}
            {!! $errors->first('contract_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Inmueble') }}
            {{ Form::select('estate_id', $estates->pluck('address', 'id'), $contractEstate->estate_id, ['class' => 'form-control' . ($errors->has('estate_id') ? ' is-invalid' : '') ]) }}
            {!! $errors->first('estate_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            <div class="form-check form-switch"> 
            {{ Form::label('Estado') }}           
            {{ Form::checkbox('isActive', ($contractEstate->isActive ? $contractEstate->isActive : true), ['class' => 'form-check-input' . ($errors->has('isActive') ? ' is-invalid' : ''), 'role'=>'switch', 'true' ]) }}
            {!! $errors->first('isActive', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>