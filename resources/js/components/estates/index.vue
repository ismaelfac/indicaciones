<template>
    <form class="needs-validation" @submit.prevent="createEstate" novalidate>
        <div class="row g-3">
             <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">INFORMACIÓN DEL INMUEBLE</span>
                        <div class="float-right">
                            <button type="submit" class="btn btn-success btn-sm"> Grabar</button>
                        </div>
                    </div>                        
                </div>
                <div class="card-body row">
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="estateAddress">Dirección del Inmueble</label>
                            <input type="text" class="form-control" id="estateAddress" v-model="estateResult.address">
                            <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ optionBtnEstate }}</button>
                        </div>
                    </div>
                    <div class="col-6">
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
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="realEstateRegistration">Matricula Inmobiliaria</label>
                            <input type="text" class="form-control" id="realEstateRegistration" v-model="estateResult.realEstateRegistration">
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="form-check form-switch">
                        <input class="form-check-input" v-model="estateResult.isSharedElectricityMeter" type="checkbox" role="switch" id="isSharedElectricityMeter">
                        <label class="form-check-label" for="isSharedElectricityMeter">Contador de Luz Compartido</label>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="form-check form-switch">
                        <input class="form-check-input" v-model="estateResult.isSharedWaterMeter" type="checkbox" role="switch" id="isSharedWaterMeter">
                        <label class="form-check-label" for="isSharedWaterMeter">Contador de Agua Compartido</label>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="form-check form-switch">
                        <input class="form-check-input" v-model="estateResult.isSharedGasMeter" type="checkbox" role="switch" id="isSharedGasMeter">
                        <label class="form-check-label" for="isSharedGasMeter">Contador de Gas Compartido</label>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="input-group has-validation">
                            <span class="input-group-text">Poliza Agua</span>
                            <input type="text" class="form-control" id="policyElectricity" v-model="estateResult.policyElectricity">
                            <div class="invalid-feedback">
                            Your username is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="input-group has-validation">
                            <span class="input-group-text">Poliza Luz</span>
                            <input type="text" class="form-control" id="policyWater" v-model="estateResult.policyWater">
                            <div class="invalid-feedback">
                            Your username is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="input-group has-validation">
                            <span class="input-group-text">Poliza Gas</span>
                            <input type="text" class="form-control" id="policyGas" v-model="estateResult.policyGas">
                            <div class="invalid-feedback">
                            Your username is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
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
                        <input class="form-check-input" v-model="estateResult.hasAdministration" type="checkbox" role="switch" id="hasAdministration">
                        <label class="form-check-label" for="hasAdministration">Tiene Administración</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-check form-switch">
                        <input class="form-check-input" v-model="estateResult.itIsGaraje" type="checkbox" role="switch" id="itIsGaraje">
                        <label class="form-check-label" for="itIsGaraje">Tiene Garaje</label>
                        </div>
                    </div>
                </div>
             </div>                     
            <template v-if="estateResult.itIsGaraje">
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand">Garajes / Cuarto Util</a>
                        <div class="d-flex">
                            <button type="button" class="btn btn-success btn-sm" @click="addGarajes()"> Agregar Garaje / Cuarto Util Externo</button>
                        </div>                        
                    </div>
                </nav>
                <div class="card" v-for="garaje in estateResult.garajes" :key="garaje.id">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">INFORMACIÓN DEL {{ garaje.typeGaraje }} No {{ garaje.id }}</span>
                            <div class="float-right">
                                <button type="button" class="btn btn-danger btn-sm" @click="removeGarajes(this.iteratorEstate ,garaje.id)"> Eliminar</button>
                            </div>
                        </div>                        
                    </div>
                    <div class="card-body row">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="garage_id" v-model="garaje.id" disabled hidden>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                                <select class="form-select" id="inputGroupSelect01" v-model="garaje.typeGaraje">
                                    <option value="CUARTO UTIL">CUARTO UTIL</option>
                                    <option value="GARAJE">GARAJE</option>
                                    <option value="NO DEFINIDO">NO DEFINIDO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="realEstateRegistration">Matricula Inmobiliaria</label>
                                <input type="text" class="form-control" id="realEstateRegistration" v-model="garaje.realEstateRegistrationGarajes">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="input-group has-validation">
                                <span class="input-group-text">Observaciones</span>
                                <textarea v-model="garaje.observations" class="form-control" id="observations"></textarea>
                                <div class="invalid-feedback">
                                Your username is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </template>
            <template class="card" v-if="estateResult.hasAdministration">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">INFORMACIÓN DE ADMINISTRACION</span>
                        <div class="float-right">
                            <button type="submit" class="btn btn-success btn-sm"> Grabar</button>
                        </div>
                    </div>                        
                </div>              
                <div class="card-body row">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Tipo de Identificación</label>
                            <select class="form-select" id="inputGroupSelect01" v-model="estateResult.typeDni">
                                <option selected>Eliga una opción...</option>
                                <option value="CEDULA DE CIUDADANIA">CEDULA DE CIUDADANIA</option>
                                <option value="NIT">NIT</option>
                            </select>
                        </div>
                    </div>
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
import swal from 'sweetalert';
export default {
    name:"estate",
    props: ['contract','estate','documents'],
    data() {
        return {        
            estateResult: {
                address: '',
                typeEstate: '',
                realEstateRegistration: '',
                isSharedElectricityMeter: false,
                policyElectricity: '',
                isSharedWaterMeter: false,
                policyWater: '',
                isSharedGasMeter: false,
                policyGas: '',
                observations: '',
                hasAdministration: false,
                typeDni: '',
                dni: '',
                email: '',
                phone: '',
                bankingEntity: '',
                accountType: '',
                accountNumber: '',
                namesAdministrator: '',
                annotations: '',
                itIsGaraje: false,
                garajes: []
            },
            optionBtnEstate: this.estateResult ? 'CAMBIAR DE INMUEBLE' : 'CREAR / BUSCAR INMUEBLE',
            active: 'btn btn-success btn-sm',
            inactive: 'btn btn-danger btn-sm',
            contractEditing: true,
            iteratorEstate: 0
        }
    },
    mounted() {
        const urlId = `/estates/${this.estate[0]}`;
        console.log('link',urlId)
        axios.get(urlId).then(response => ([
            this.estateResult.address = response.data.estate.address,
            this.estateResult.typeEstate = response.data.estate.typeEstate,
            this.estateResult.realEstateRegistration = response.data.estate.realEstateRegistration,
            this.estateResult.isSharedElectricityMeter = (response.data.estate.isSharedElectricityMeter ? true : false),
            this.estateResult.policyElectricity = response.data.estate.policyElectricity,
            this.estateResult.isSharedWaterMeter = (response.data.estate.isSharedWaterMeter ? true : false),
            this.estateResult.policyWater = response.data.estate.policyWater,
            this.estateResult.isSharedGasMeter = (response.data.estate.isSharedGasMeter ? true : false),
            this.estateResult.policyGas = response.data.estate.policyGas,
            this.estateResult.observations = response.data.estate.observations,
            this.estateResult.hasAdministration = (response.data.estate.hasAdministration ? true : false),
            this.estateResult.typeDni = response.data.estate.typeDni,
            this.estateResult.dni = response.data.estate.dni,
            this.estateResult.email = response.data.estate.email,
            this.estateResult.phone = response.data.estate.phone,
            this.estateResult.bankingEntity = response.data.estate.bankingEntity,
            this.estateResult.accountType = response.data.estate.accountType,
            this.estateResult.accountNumber = response.data.estate.accountNumber,
            this.estateResult.namesAdministrator = response.data.estate.namesAdministrator,
            this.estateResult.annotations = response.data.estate.annotations,
            this.estateResult.itIsGaraje = (response.data.estate.isGarage === 1 ? true : false),
            (response.data.garages ? this.loadGarajes(response.data.garages) : this.estateResult.itIsGaraje = false)
        ])).catch(error => console.log(error));
    },
    methods: {
        changeFiles(e){
            console.log('entro', e.target.files[0]);
        },
        createEstate(){
            axios.post('/estates/', this.estateResult).then(response => (
                                                                console.log('Respuesta del envio', response)))
                                                           .catch(err => console.log(err))
                                                           .finally(() => this.loading = false)
            swal("Are you sure you want to do this?", {
            buttons: ["Oh noez!", true],
            });
        },
        loadGarajes(garages){
            garages.map((garage) => {
                this.iteratorEstate = this.estateResult.garajes.length
                this.estateResult.garajes.push({
                    'id' : garage.id,
                    'realEstateRegistrationGarajes' : garage.realEstateLicensePlate,
                    'typeGaraje' : garage.typeGaraje,
                    'observations' : garage.observations
                });
                console.log('iteratorEstate', this.iteratorEstate)
            });            
        },
        addGarajes(){
            this.estateResult.garajes.push({
                'id' : this.iteratorEstate,
                'realEstateRegistrationGarajes' : '',
                'typeGaraje' : '',
                'observations' : ''
            });
            this.iteratorEstate++;
        },
        removeGarajes(iterator, id){
            console.log('id: '+id);
            console.log('iteratorEstate', iterator);
            this.estateResult.garajes.splice(iterator, id);
            this.iteratorEstate = this.estateResult.garajes.length;
        }
    }
}
</script>