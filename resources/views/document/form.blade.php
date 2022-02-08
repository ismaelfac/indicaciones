<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Titulo') }}
            {{ Form::text('title', $document->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoria') }}
            {{ Form::select('category', [
                'NO DEFINIDO' => 'NO DEFINIDO',
                'INMUEBLE' => 'INMUEBLE',
                'CONTRATO' => 'CONTRATO',
                'PERSONA_AD' => 'PERSONA_AD',
                'PERSONA_PUC' => 'PERSONA_PUC'
                ], $document->category, ['class' => 'form-control' . ($errors->has('category') ? ' is-invalid' : '') ]) }}
            {!! $errors->first('category', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>