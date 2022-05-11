<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('estate_id') }}
            {{ Form::text('estate_id', $documentEstate->estate_id, ['class' => 'form-control' . ($errors->has('estate_id') ? ' is-invalid' : ''), 'placeholder' => 'Estate Id']) }}
            {!! $errors->first('estate_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('document_id') }}
            {{ Form::text('document_id', $documentEstate->document_id, ['class' => 'form-control' . ($errors->has('document_id') ? ' is-invalid' : ''), 'placeholder' => 'Document Id']) }}
            {!! $errors->first('document_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fileName') }}
            {{ Form::text('fileName', $documentEstate->fileName, ['class' => 'form-control' . ($errors->has('fileName') ? ' is-invalid' : ''), 'placeholder' => 'Filename']) }}
            {!! $errors->first('fileName', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('route') }}
            {{ Form::text('route', $documentEstate->route, ['class' => 'form-control' . ($errors->has('route') ? ' is-invalid' : ''), 'placeholder' => 'Route']) }}
            {!! $errors->first('route', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $documentEstate->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isActive') }}
            {{ Form::text('isActive', $documentEstate->isActive, ['class' => 'form-control' . ($errors->has('isActive') ? ' is-invalid' : ''), 'placeholder' => 'Isactive']) }}
            {!! $errors->first('isActive', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>