<template>
    <form class="needs-validation" novalidate>
        <div class="col-12">
            <div class="input-group mb-3">
            <input type="text" class="form-control" v-model="estateResult.address">
            <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ optionBtnEstate }}</button>
            </div>
        </div>
        {{ estateResult}}
        <div class="row g-3">
            <h4 class="mb-1">Información de Inmueble</h4>            
            <div class="col-12">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo de Inmueble</label>
                    <select class="form-select" id="inputGroupSelect01" v-model="estateResult.typeEstate">
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
                <input class="form-check-input" v-model="estateResult.isSharedElectricityMeter" type="checkbox" role="switch" id="isSharedElectricityMeter">
                <label class="form-check-label" for="isSharedElectricityMeter">Contador de Luz Compartido</label>
                </div>
            </div>
            <div class="col-4">
                <div class="form-check form-switch">
                <input class="form-check-input" v-model="estateResult.isSharedWaterMeter" type="checkbox" role="switch" id="isSharedWaterMeter">
                <label class="form-check-label" for="isSharedWaterMeter">Contador de Agua Compartido</label>
                </div>
            </div>
            <div class="col-4">
                <div class="form-check form-switch">
                <input class="form-check-input" v-model="estateResult.isSharedGasMeter" type="checkbox" role="switch" id="isSharedGasMeter">
                <label class="form-check-label" for="isSharedGasMeter">Contador de Gas Compartido</label>
                </div>
            </div>
            <div class="col-4">
                <div class="input-group has-validation">
                    <span class="input-group-text">Poliza Agua</span>
                    <input type="text" class="form-control" id="policyElectricity" v-model="estateResult.policyElectricity">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="input-group has-validation">
                    <span class="input-group-text">Poliza Luz</span>
                    <input type="text" class="form-control" id="policyWater" v-model="estateResult.policyWater">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="input-group has-validation">
                    <span class="input-group-text">Poliza Gas</span>
                    <input type="text" class="form-control" id="policyGas" v-model="estateResult.policyGas">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-9 mb-3">
                <div class="input-group has-validation">
                    <span class="input-group-text">Observaciones</span>
                    <textarea v-model="estateResult.observations" class="form-control" id="observations"></textarea>
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-check form-switch">
                <input class="form-check-input" v-model="estateResult.optionPaymentInFavorOfAdministration" type="checkbox" role="switch" id="optionPaymentInFavorOfAdministration">
                <label class="form-check-label" for="optionPaymentInFavorOfAdministration">Tiene Administración</label>
                </div>
            </div>
            <template class="card" v-if="estateResult.optionPaymentInFavorOfAdministration">
                <div class="card-header">
                    Información de la Administración
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Tipo de Identificación</label>
                        <select class="form-select" id="inputGroupSelect01" v-model="estateResult.typeDniPerson">
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
                            <input type="text" v-model="estateResult.dni" class="form-control" id="dni">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Email</span>
                            <input type="text" v-model="estateResult.email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Phone</span>
                            <input type="text" v-model="estateResult.phone" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="bankingEntity">Entidad Bancaria</label>
                            <select class="form-select" id="bankingEntity" v-model="estateResult.bankingEntity">
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
                            <select class="form-select" id="accountType" v-model="estateResult.accountType">
                                <option value="AHORROS">AHORROS</option>
                                <option value="CORRIENTE">CORRIENTE</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group has-validation input-group mb-3"> 
                            <span class="input-group-text">Numero de Cuenta</span>
                            <input type="text" class="form-control" id="accountNumber" v-model="estateResult.accountNumber">
                        <div class="invalid-feedback">
                            Your username is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group has-validation input-group mb-3"> 
                            <span class="input-group-text">Nombres Completos Administrador(a)</span>
                            <input type="text" class="form-control" id="namesAdministrator" v-model="estateResult.namesAdministrator">
                        <div class="invalid-feedback">
                            Your username is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group has-validation">
                            <span class="input-group-text">Anotaciones</span>
                            <textarea v-model="estateResult.annotations" class="form-control" id="annotations"></textarea>
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
        </div>
        

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Listado de Inmuebles</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
    </form>
</template>
<script>
import Documents from "../documents/index.vue";
export default {
    name:"estate",
    props: ['contract','documents'],
    data() {
        return {        
            estateResult: {
                address: '',
                typeEstate: '',
                isSharedElectricityMeter: false,
                isSharedWaterMeter: false,
                isSharedGasMeter: false,
                observations: '',
                optionPaymentInFavorOfAdministration: false,
                typeDniPerson: '',
                dni: '',
                email: '',
                phone: '',
                bankingEntity: '',
                accountType: '',
                accountNumber: '',
                namesAdministrator: '',
                annotations: '' 
            },
            optionBtnEstate: this.estateResult ? 'CAMBIAR DE INMUEBLE' : 'CREAR / BUSCAR INMUEBLE',
            active: 'btn btn-success btn-sm',
            inactive: 'btn btn-danger btn-sm',
            contractEditing: true,
                       
        }
    },
    mounted() {
        axios.get('/estates/1').then(response => ([
            this.estateResult.address = response.data.address,
            this.estateResult.typeEstate = response.data.typeEstate,
            this.estateResult.isSharedElectricityMeter = (response.data.isSharedElectricityMeter ? true : false),
            this.estateResult.isSharedWaterMeter = (response.data.isSharedWaterMeter ? true : false),
            this.estateResult.isSharedGasMeter = (response.data.isSharedGasMeter ? true : false),
            this.estateResult.phone = response.data.phone
        ])).catch(error => console.log(error));
        console.log('desde mounted: ',this.estateResult)
        

    },
    components: {
        Documents
    },
    methods: {
        changeFiles(e){
            console.log('entro', e.target.files[0]);
        }
    }
}
</script>