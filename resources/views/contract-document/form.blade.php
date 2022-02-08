<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('contract_id') }}
            {{ Form::text('contract_id', $contractDocument->contract_id, ['class' => 'form-control' . ($errors->has('contract_id') ? ' is-invalid' : ''), 'placeholder' => 'Contract Id']) }}
            {!! $errors->first('contract_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fileName') }}
            {{ Form::text('fileName', $contractDocument->fileName, ['class' => 'form-control' . ($errors->has('fileName') ? ' is-invalid' : ''), 'placeholder' => 'Filename']) }}
            {!! $errors->first('fileName', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('route') }}
            {{ Form::text('route', $contractDocument->route, ['class' => 'form-control' . ($errors->has('route') ? ' is-invalid' : ''), 'placeholder' => 'Route']) }}
            {!! $errors->first('route', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $contractDocument->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isActive') }}
            {{ Form::text('isActive', $contractDocument->isActive, ['class' => 'form-control' . ($errors->has('isActive') ? ' is-invalid' : ''), 'placeholder' => 'Isactive']) }}
            {!! $errors->first('isActive', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>