<script>
//v-if="this.participant[0].pivot.typeParticipant === 'USUFRUCTUARIO' || this.participant[0].pivot.typeParticipant === 'PROPIETARIO' || this.participant[0].pivot.typeParticipant === 'COMODATARIO'"
export default {
    name: 'contractPersonParameters',
    props: [''],
    data() {
        return {
            isJuridica: true,
            isRentDivision: true,
            namesPerson: 'ISMAEL ENRIQUE LASTRE ALVAREZ',

        }
    }
}
</script>
<template>
    <div>        
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span id="card_title">INMOBILIARIA</span>
                <div class="float-right">
                    <a class="btn btn-success btn-sm" href="#"> Grabar</a>
                </div>
            </div>
        </div>
        <div class="card-body">
                <div class="row g-3">
                    <div class="col-4">
                        <div class="input-group has-validation input-group mb-3"> 
                            <span class="input-group-text">Porcentaje de Comisión</span>
                            <input type="text" class="form-control" id="username">
                        <div class="invalid-feedback">
                            Your username is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group has-validation input-group mb-3"> 
                            <span class="input-group-text">Porcentaje de Mercadeo</span>
                            <input type="text" class="form-control" id="username">
                        <div class="invalid-feedback">
                            Your username is required.
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
    </div>
</template>