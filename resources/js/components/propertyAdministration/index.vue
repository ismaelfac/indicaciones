<script>
export default {
    name: 'contractPersonPayments',
    props:['estate'],
    data() {
        return {
            paymentInFavorOf: '',
            optionPaymentInFavorOfAdministration: false,
            optionPaymentInFavorOfParticipant: false,
            address: this.estate ? this.estate[0].address : '',
            typeEstate: this.estate ? this.estate[0].typeEstate : '',
            nit : this.estate ? this.estate[0].nit : '',
            email: this.estate ? this.estate[0].email : '',
            phone: this.estate ? this.estate[0].phone : '',
            bankingEntity : this.estate ? this.estate[0].bankingEntity : '',
            accountType: this.estate ? this.estate[0].accountType : '',
            accountNumber: this.estate ? this.estate[0].accountNumber : '',
            namesAdministrator: this.estate ? this.estate[0].namesAdministrator : '',
            isConsignmentPayment: this.estate[0].isConsignmentPayment ? true : false,
            nit: this.estate ? this.estate[0].nit : '',
            annotations: ''
        }
    },
    methods: {
        optionPaymentInFavorOf() {
            if(this.paymentInFavorOf === 'administratation') {
                this.optionPaymentInFavorOfAdministration = true;
                this.optionPaymentInFavorOfParticipant = false;
            }else{
                this.optionPaymentInFavorOfAdministration = false;
                this.optionPaymentInFavorOfParticipant = true;
            }
        }
    }
}
</script>
<template>
    <div class="row">
        <div class="card-header mb-3">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span id="card_title">ADMINISTRACION DEL INMUEBLE</span>
                <div class="float-right">
                    <a class="btn btn-success btn-sm" href="#"> Grabar</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="input-group mb-3">
                <span class="input-group-text">Dirección</span>
                <input type="text" v-model="address" class="form-control" id="address" disabled>
            </div>
        </div>
        <div class="col-6">
            <div class="input-group mb-3">
                <span class="input-group-text">Tipo de Inmueble</span>
                <input type="text" v-model="typeEstate" class="form-control" id="typeEstate" disabled>
            </div>
        </div>
        <div class="col-6">
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Pago a favor de</label>
                <select class="form-select" id="inputGroupSelect01" v-model="paymentInFavorOf" @change="optionPaymentInFavorOf">
                    <option value="administratation">Administración</option>
                    <option value="participant">Propietario / Beneficiario</option>
                </select>
            </div>
        </div>
        <template class="card" v-if="optionPaymentInFavorOfAdministration">
            <div class="card-header">
                Información de la Administración
            </div>
            <div class="card-body row">
                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nit</span>
                        <input type="text" v-model="nit" class="form-control" id="nit" disabled>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Email</span>
                        <input type="text" v-model="email" class="form-control" id="email" disabled>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Phone</span>
                        <input type="text" v-model="phone" class="form-control" id="phone" disabled>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="bankingEntity">Entidad Bancaria</label>
                        <select class="form-select" id="bankingEntity" v-model="bankingEntity">
                            <option value="BANCAMIA S.A.">BANCAMIA S.A.</option>
                            <option value="BANCO AGRARIO">BANCO AGRARIO</option>
                            <option value="BANCO AV VILLAS">BANCO AV VILLAS</option>
                            <option value="BANCO BBVA COLOMBIA S.A.">BANCO BBVA COLOMBIA S.A.</option>
                            <option value="BANCO CAJA SOCIAL">BANCO CAJA SOCIAL</option>
                            <option value="BANCO COOPERATIVO COOPCENTRAL">BANCO COOPERATIVO COOPCENTRAL</option>
                            <option value="BANCO CREDIFINANCIERA">BANCO CREDIFINANCIERA</option>
                            <option value="BANCO DAVIVIENDA">BANCO DAVIVIENDA</option>
                            <option value="BANCO DE BOGOTA">BANCO DE BOGOTA</option>
                            <option value="BANCO DE OCCIDENTE">BANCO DE OCCIDENTE</option>
                            <option value="BANCO FALABELLA">BANCO FALABELLA</option>
                            <option value="BANCO GNB SUDAMERIS">BANCO GNB SUDAMERIS</option>
                            <option value="BANCO ITAU">BANCO ITAU</option>
                            <option value="BANCO PICHINCHA S.A.">BANCO PICHINCHA S.A.</option>
                            <option value="BANCO POPULAR">BANCO POPULAR</option>
                            <option value="BANCO SANTANDER COLOMBIA">BANCO SANTANDER COLOMBIA</option>
                            <option value="BANCO SERFINANZA">BANCO SERFINANZA</option>
                            <option value="BANCOLOMBIA">BANCOLOMBIA</option>
                            <option value="BANCOOMEVA S.A.">BANCOOMEVA S.A.</option>
                            <option value="CFA COOPERATIVA FINANCIERA">CFA COOPERATIVA FINANCIERA</option>
                            <option value="CITIBANK">CITIBANK</option>
                            <option value="COLTEFINANCIERA">COLTEFINANCIERA</option>
                            <option value="CONFIAR COOPERATIVA FINANCIERA">CONFIAR COOPERATIVA FINANCIERA</option>
                            <option value="COOFINEP COOPERATIVA FINANCIERA">COOFINEP COOPERATIVA FINANCIERA</option>
                            <option value="COTRAFA">COTRAFA</option>
                            <option value="SCOTIABANK COLPATRIA">SCOTIABANK COLPATRIA</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="accountType">Tipo de Cuenta</label>
                        <select class="form-select" id="accountType" v-model="accountType">
                            <option value="AHORROS">AHORROS</option>
                            <option value="CORRIENTE">CORRIENTE</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group has-validation input-group mb-3"> 
                        <span class="input-group-text">Numero de Cuenta</span>
                        <input type="text" class="form-control" id="accountNumber" v-model="accountNumber">
                    <div class="invalid-feedback">
                        Your username is required.
                        </div>
                    </div>
                </div>    
                <div class="col-12">
                    <div class="input-group has-validation input-group mb-3"> 
                        <span class="input-group-text">Nombres Completos Administrador(a)</span>
                        <input type="text" class="form-control" id="namesAdministrator" v-model="namesAdministrator">
                    <div class="invalid-feedback">
                        Your username is required.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group has-validation">
                        <span class="input-group-text">Anotaciones</span>
                        <textarea v-model="annotations" class="form-control" id="annotations"></textarea>
                        <div class="invalid-feedback">
                        Your username is required.
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>
    <div class="row" v-if="optionPaymentInFavorOfParticipant">
        <div class="card-header">
            Información del Participante
        </div>
        <div class="card-body row">
            <div class="col-12">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Pago a favor del Participante</label>
                    <select class="form-select" id="inputGroupSelect01" v-model="typeContract">
                        <option selected>Seleccione un Tipo de Contrato...</option>
                        <option value="ISMAEL ENRIQUE LASTRE ALVAREZ">ISMAEL ENRIQUE LASTRE ALVAREZ</option>
                        <option value="VALERIA VASQUEZ CUESTA">VALERIA VASQUEZ CUESTA</option>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="input-group has-validation">
                    <span class="input-group-text">Anotaciones</span>
                    <textarea v-model="annotations" class="form-control" id="annotations"></textarea>
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>