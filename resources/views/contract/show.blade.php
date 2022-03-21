@extends('layouts.app')

@section('template_title')
    {{ $contract->name ?? 'Show Contract' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                            Datos de {{ $contract->asegurable }}
                            </span>
                            <div class="float-right">
                                <a class="btn btn-primary btn-sm" href="{{ route('indicators.index') }}"> Cancelar</a>
                                <a class="btn btn-sm btn-danger" href="{{ url('indicators/pdf',$contract->id) }}" target="_blank"><i class="fa fa-fw fa-pdf"></i> PDF</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">   
                        <example-component 
                            :contract="{{ json_encode($contract) }}" 
                            :estate="{{ json_encode($contract->contractEstates[0]) }}" 
                            :participants="{{json_encode($contract->contractPerson) }}"
                            >
                        </example-component>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection