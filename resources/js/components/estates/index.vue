<template>
    <form class="needs-validation" novalidate>
        <div class="row g-3">
            <h4 class="mb-1">Información de Inmueble</h4>
            <div class="col-6">
                <div class="input-group has-validation">
                    <span class="input-group-text">Dirección</span>
                    <input type="text" class="form-control" id="estateAddress" v-model="estateAddress">
                    <div class="invalid-feedback">
                    Your username is required.
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
            <div class="col-4">
                <div class="form-check form-switch">
                <input class="form-check-input" v-model="isSharedElectricityMeter" type="checkbox" role="switch" id="isSharedElectricityMeter">
                <label class="form-check-label" for="isSharedElectricityMeter">Contador de Luz Compartido</label>
                </div>
            </div>
            <div class="col-4">
                <div class="form-check form-switch">
                <input class="form-check-input" v-model="isSharedWaterMeter" type="checkbox" role="switch" id="isSharedWaterMeter">
                <label class="form-check-label" for="isSharedWaterMeter">Contador de Agua Compartido</label>
                </div>
            </div>
            <div class="col-4">
                <div class="form-check form-switch">
                <input class="form-check-input" v-model="isSharedGasMeter" type="checkbox" role="switch" id="isSharedGasMeter">
                <label class="form-check-label" for="isSharedGasMeter">Contador de Gas Compartido</label>
                </div>
            </div>
            <div class="col-4">
                <div class="input-group has-validation">
                    <span class="input-group-text">Poliza Agua</span>
                    <input type="text" class="form-control" id="policyElectricity" v-model="policyElectricity">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="input-group has-validation">
                    <span class="input-group-text">Poliza Luz</span>
                    <input type="text" class="form-control" id="policyWater" v-model="policyWater">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="input-group has-validation">
                    <span class="input-group-text">Poliza Gas</span>
                    <input type="text" class="form-control" id="policyGas" v-model="policyGas">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-9 mb-3">
                <div class="input-group has-validation">
                    <span class="input-group-text">Observaciones</span>
                    <textarea v-model="observations" class="form-control" id="observations"></textarea>
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-check form-switch">
                <input class="form-check-input" v-model="optionPaymentInFavorOfAdministration" type="checkbox" role="switch" id="optionPaymentInFavorOfAdministration">
                <label class="form-check-label" for="optionPaymentInFavorOfAdministration">Tiene Administración</label>
                </div>
            </div>
        </div>
        <template class="card" v-if="optionPaymentInFavorOfAdministration">
            <div class="card-header">
                Información de la Administración
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo de Identificación</label>
                    <select class="form-select" id="inputGroupSelect01" v-model="typeDniPerson">
                        <option selected>Eliga una opción...</option>
                        <option value="CEDULA DE CIUDADANIA">CEDULA DE CIUDADANIA</option>
                        <option value="NIT">NIT</option>
                    </select>
                </div>
            </div>
            <div class="card-body row">
                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Número</span>
                        <input type="text" v-model="dni" class="form-control" id="dni">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Email</span>
                        <input type="text" v-model="email" class="form-control" id="email">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Phone</span>
                        <input type="text" v-model="phone" class="form-control" id="phone">
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

        <hr class="my-4">
        <h4 class="mb-1">Documentos del Inmueble</h4>
        <Documents component="INMUEBLE" :listDocuments="documents" :contractDocuments="contract.contract_documents"/>
    </form>
</template>
<script>
import Documents from "../documents/index.vue";
export default {
    name:"estate",
    props: ['contract','estate','documents'],
    components: {
        Documents
    },
    data() {
        return {        
            active: 'btn btn-success btn-sm',
            inactive: 'btn btn-danger btn-sm',
            contractEditing: true,
            estateAddress: this.estate ? this.estate[0].address : '',
            typeEstate: this.estate ? this.estate[0].typeEstate : '',
            isSharedElectricityMeter: this.estate[0].isSharedElectricityMeter ? true : false,
            isSharedWaterMeter: this.estate[0].isSharedWaterMeter ? true : false,
            isSharedGasMeter: this.estate[0].isSharedGasMeter ? true : false,
            observations: this.estate ? this.estate[0].observations : '',
            optionPaymentInFavorOfAdministration: this.estate[0].hasAdministration ? true : false,
            typeDniPerson: this.estate ? this.estate[0].typeDni : '',
            dni: this.estate ? this.estate[0].dni : '',
            email: this.estate ? this.estate[0].email : '',
            phone: this.estate ? this.estate[0].phone : '',
            bankingEntity: this.estate ? this.estate[0].bankingEntity : '',
            accountType: this.estate ? this.estate[0].accountType : '',
            accountNumber: this.estate ? this.estate[0].accountNumber : '',
            namesAdministrator: this.estate ? this.estate[0].namesAdministrator : '',
            annotations: this.estate ? this.estate[0].annotations : ''
        }
    },
    methods: {
        changeFiles(e){
            console.log('entro', e.target.files[0]);
        }
    }
}
</script>