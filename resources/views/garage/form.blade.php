<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('estate_id') }}
            {{ Form::text('estate_id', $garage->estate_id, ['class' => 'form-control' . ($errors->has('estate_id') ? ' is-invalid' : ''), 'placeholder' => 'Estate Id']) }}
            {!! $errors->first('estate_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('realEstateLicensePlate') }}
            {{ Form::text('realEstateLicensePlate', $garage->realEstateLicensePlate, ['class' => 'form-control' . ($errors->has('realEstateLicensePlate') ? ' is-invalid' : ''), 'placeholder' => 'Realestatelicenseplate']) }}
            {!! $errors->first('realEstateLicensePlate', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('typeGaraje') }}
            {{ Form::text('typeGaraje', $garage->typeGaraje, ['class' => 'form-control' . ($errors->has('typeGaraje') ? ' is-invalid' : ''), 'placeholder' => 'Typegaraje']) }}
            {!! $errors->first('typeGaraje', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observations') }}
            {{ Form::text('observations', $garage->observations, ['class' => 'form-control' . ($errors->has('observations') ? ' is-invalid' : ''), 'placeholder' => 'Observations']) }}
            {!! $errors->first('observations', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $garage->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isActive') }}
            {{ Form::text('isActive', $garage->isActive, ['class' => 'form-control' . ($errors->has('isActive') ? ' is-invalid' : ''), 'placeholder' => 'Isactive']) }}
            {!! $errors->first('isActive', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>