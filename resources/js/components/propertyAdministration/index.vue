<script>
export default {
    name: 'contractPersonPayments',
    props:['participant','contract'],
    data() {
        return {

        }
    }
}
</script>
<template>
    <div class="row">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span id="card_title">ADMINISTRACION</span>
                <div class="float-right">
                    <a class="btn btn-success btn-sm" href="#"> Grabar</a>
                </div>
            </div>
        </div>
        <div class="col-6">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo de Inmueble</label>
                    <select class="form-select" id="inputGroupSelect01" v-model="typeEstate">
                        <option selected>Seleccione un Tipo de Inmueble...</option>
                        <option value="APARTAMENTO">APARTAMENTO</option>
                        <option value="APARTA-STUDIO">APARTA-STUDIO</option>
                        <option value="BODEGA">BODEGA</option>
                        <option value="LOCAL">LOCAL</option>
                        <option value="CASA">CASA</option>
                        <option value="NO DEFINIDO">NO DEFINIDO</option>
                    </select>
                </div>
            </div>
        <div class="col-12">
            <div class="input-group has-validation input-group mb-3">
                <span class="input-group-text">Participante</span>
                <input type="text" class="form-control" id="namesPerson" v-model="namesPerson">
                <div class="invalid-feedback">
                Your username is required.
                </div>
            </div>
            <div class="input-group has-validation input-group mb-3">
                <span class="input-group-text">Porcentaje</span>
                <input type="text" class="form-control" id="namesPerson" v-model="namesPerson">
                <div class="invalid-feedback">
                Your username is required.
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="input-group has-validation input-group mb-3"> 
                <span class="input-group-text">Pago de Admin</span>
                <input type="text" class="form-control" id="username">
            <div class="invalid-feedback">
                Your username is required.
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-check form-switch">
            <input class="form-check-input" v-model="isResponsibleIVA" type="checkbox" role="switch" id="isResponsibleIVA">
            <label class="form-check-label" for="isResponsibleIVA">Responsable de IVA</label>
            </div>
        </div>
        <div class="col-4">
            <div class="form-check form-switch">
            <input class="form-check-input" v-model="isIntegralProtection" type="checkbox" role="switch" id="isIntegralProtection">
            <label class="form-check-label" for="isIntegralProtection">Amparo Integral</label>
            </div>
        </div>
        <div class="col-4">
            <div class="form-check form-switch">
            <input class="form-check-input" v-model="isResponsibleIVA" type="checkbox" role="switch" id="isResponsibleIVA">
            <label class="form-check-label" for="isResponsibleIVA">Número de Cuenta</label>
            </div>
        </div>
        <div class="col-4">
            <div class="form-check form-switch">
            <input class="form-check-input" v-model="isIntegralProtection" type="checkbox" role="switch" id="isIntegralProtection">
            <label class="form-check-label" for="isIntegralProtection">Banco a Consignar</label>
            </div>
        </div>
    </div>
</template>