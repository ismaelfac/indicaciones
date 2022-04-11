<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('person_id') }}
            {{ Form::text('person_id', $documentPerson->person_id, ['class' => 'form-control' . ($errors->has('person_id') ? ' is-invalid' : ''), 'placeholder' => 'Person Id']) }}
            {!! $errors->first('person_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('document_id') }}
            {{ Form::text('document_id', $documentPerson->document_id, ['class' => 'form-control' . ($errors->has('document_id') ? ' is-invalid' : ''), 'placeholder' => 'Document Id']) }}
            {!! $errors->first('document_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fileName') }}
            {{ Form::text('fileName', $documentPerson->fileName, ['class' => 'form-control' . ($errors->has('fileName') ? ' is-invalid' : ''), 'placeholder' => 'Filename']) }}
            {!! $errors->first('fileName', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('route') }}
            {{ Form::text('route', $documentPerson->route, ['class' => 'form-control' . ($errors->has('route') ? ' is-invalid' : ''), 'placeholder' => 'Route']) }}
            {!! $errors->first('route', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $documentPerson->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isActive') }}
            {{ Form::text('isActive', $documentPerson->isActive, ['class' => 'form-control' . ($errors->has('isActive') ? ' is-invalid' : ''), 'placeholder' => 'Isactive']) }}
            {!! $errors->first('isActive', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>