<template>
    <form class="needs-validation" novalidate>
        <div class="row g-3">
            <div class="col-12">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01"> Inmueble</label>
                    <select class="form-select" id="inputGroupSelect01" v-model="contract.contractEstate">
                        <option v-for="estate in listEstate" :value="estate.address" :key="estate.id">{{estate.address}}</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group has-validation">
                    <span class="input-group-text">ASEGURABLE</span>
                    <input type="text" v-model="contract.asegurable" class="form-control" id="asegurable">
                <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group has-validation"> 
                    <span class="input-group-text">COD DOMUS</span>
                    <input type="text" class="form-control" id="domus" v-model="contract.domus">
                <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <h4 class="mb-1">Información del Contracto</h4>
            <div class="col-4">
                <div class="input-group has-validation">
                    <span class="input-group-text">Valor Cannon</span>
                    <input type="text" class="form-control" id="cannon" v-model="contract.cannon">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-check form-switch">
                <input class="form-check-input" v-model="contract.ifAdminValue" type="checkbox" role="switch" id="ifAdminValue">
                <label class="form-check-label" for="ifAdminValue">Con Administración</label>
                </div>
            </div>
            <div class="col-4" v-if="ifAdminValue">
                <div class="input-group has-validation">
                    <span class="input-group-text">Valor Admin</span>
                    <input type="text" v-model="contract.adminValue" class="form-control" id="adminValue">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo de Contrato</label>
                    <select class="form-select" id="inputGroupSelect01" v-model="contract.typeContract">
                        <option selected>Seleccione un Tipo de Contrato...</option>
                        <option value="VIVIENDA">VIVIENDA</option>
                        <option value="COMERCIAL">COMERCIAL</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group has-validation">
                    <span class="input-group-text">Duración del contrato (EN MESES, SOLO NUMEROS)</span>
                    <input type="text" v-model="contract.contractDuration" class="form-control" id="contractDuration">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group has-validation">
                    <span class="input-group-text">Incremento</span>
                    <input type="text" v-model="contract.increment" class="form-control" id="username">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group has-validation">
                    <span class="input-group-text">Derechos de contrato</span>
                    <input type="text" v-model="contract.contractRights" class="form-control" id="username">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group has-validation">
                    <span class="input-group-text">Fecha de Entrega</span>
                    <input type="date" v-model="contract.deliveryDate" class="form-control" format="dd-mm-yyyy" id="username">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group has-validation">
                    <span class="input-group-text">Periodo de Gracia</span>
                    <input type="text" v-model="contract.gradePeriod" class="form-control" id="gradePeriod">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="input-group has-validation">
                    <span class="input-group-text">Clausulas</span>
                    <textarea v-model="contract.clause" class="form-control" id="username"></textarea>
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4">
        <h4 class="mb-1">Documentos del Contrato</h4>
        
        <Documents component="CONTRATO" :listDocuments="documents"/>
        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
    </form>
</template>

<script>
import Documents from "../documents/index.vue";
export default {
    name:"contract",
    props: ['contractId','documents'],
    components: {
        Documents
    },
    data() {
        return {       
            active: 'btn btn-success btn-sm',
            inactive: 'btn btn-danger btn-sm',
            contractEditing: true,
            listEstate: [],
            contract:{
                contractEstate: '',
                contract_id:  '',
                asegurable: '',
                domus: '',
                ifAdminValue: false,
                cannon: '',
                adminValue: '',
                detailEstateDocumentView: true,
                contractRights: '',
                typeContract: '',
                contractDuration: '',
                increment: '',
                deliveryDate: '',
                gradePeriod: '',
                clause: '',
            },
            fileName: '',
            isEditing: true
        }
    },
    
    mounted() {
        const urlId = `/contracts/${this.contractId}`;
        axios.get('/estates').then(response => (
            this.listEstate = response.data
        ));
        console.log('link',urlId)
        axios.get(urlId).then(response => ([
            this.contract.contractEstate = response.data.contract.contract_estates[0].address,
            this.contract.contract_id = response.data.contract.id,
            this.contract.asegurable = response.data.contract.asegurable,
            this.contract.domus = response.data.contract.domus,
            this.contract.ifAdminValue = (response.data.contract.ifAdminValue ? true : false),
            this.contract.cannon = response.data.contract.cannonLease,
            this.contract.policyWater = response.data.contract.policyWater,
            this.contract.adminValue = response.data.contract.adminValue,
            this.contract.detailEstateDocumentView = (response.data.contract.detailEstateDocumentView ? true : false),
            this.contract.contractRights = response.data.contract.contractRights,
            this.contract.typeContract = response.data.contract.typeContract,
            this.contract.contractDuration = response.data.contract.contractDuration,
            this.contract.increment = response.data.contract.increment,
            this.contract.deliveryDate = response.data.contract.deliveryDate,
            this.contract.gradePeriod = response.data.contract.gracePeriod,
            this.contract.clause = response.data.contract.clause
        ])).catch(error => console.log(error));
        console.log('desde mounted: ',this.contract)     
    },
}
</script>