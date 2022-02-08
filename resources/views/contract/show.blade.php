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
                                <a class="btn btn-primary" href="{{ route('contracts.index') }}"> Cancelar</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Asegurable:</strong>
                            {{ $contract->asegurable }}
                        </div>
                        <div class="form-group">
                            <strong>Domus:</strong>
                            {{ $contract->domus }}
                        </div>
                        <div class="form-group">
                            <strong>Cannonlease:</strong>
                            {{ $contract->cannonLease }}
                        </div>
                        <div class="form-group">
                            <strong>Adminvalue:</strong>
                            {{ $contract->adminValue }}
                        </div>
                        <div class="form-group">
                            <strong>Increment:</strong>
                            {{ $contract->increment }}
                        </div>
                        <div class="form-group">
                            <strong>Contractrights:</strong>
                            {{ $contract->contractRights }}
                        </div>
                        <div class="form-group">
                            <strong>Deliverydate:</strong>
                            {{ $contract->deliveryDate }}
                        </div>
                        <div class="form-group">
                            <strong>Graceperiod:</strong>
                            {{ $contract->gracePeriod }}
                        </div>
                        <div class="form-group">
                            <strong>Clause:</strong>
                            {{ $contract->clause }}
                        </div>
                        <div class="form-group">
                            <strong>Isactive:</strong>
                            {{ $contract->isActive }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
