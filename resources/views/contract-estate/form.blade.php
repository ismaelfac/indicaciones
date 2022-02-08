<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group">
            {{ Form::label('Contrato') }}
            {{ Form::select('contract_id', $contracts->pluck('asegurable', 'id'), $contractEstate->contract_id, ['class' => 'form-control' . ($errors->has('contract_id') ? ' is-invalid' : '') ]) }}
            {!! $errors->first('contract_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estate_id') }}
            {{ Form::text('estate_id', $contractEstate->estate_id, ['class' => 'form-control' . ($errors->has('estate_id') ? ' is-invalid' : ''), 'placeholder' => 'Estate Id']) }}
            {!! $errors->first('estate_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $contractEstate->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isActive') }}
            {{ Form::text('isActive', $contractEstate->isActive, ['class' => 'form-control' . ($errors->has('isActive') ? ' is-invalid' : ''), 'placeholder' => 'Isactive']) }}
            {!! $errors->first('isActive', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>