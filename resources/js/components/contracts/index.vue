<template>
    <form class="needs-validation" novalidate>
        <div class="row g-3">
            <div class="col-6">
                <div class="input-group has-validation" v-if="contractEditing">
                    <span class="input-group-text">ASEGURABLE</span>
                    <input type="text" v-model="asegurable" class="form-control" id="asegurable">
                <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group has-validation" v-if="contractEditing"> 
                    <span class="input-group-text">COD DOMUS</span>
                    <input type="text" class="form-control" id="domus" v-model="domus">
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
                    <input type="text" class="form-control" id="cannon" v-model="cannon">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-check form-switch">
                <input class="form-check-input" v-model="ifAdminValue" type="checkbox" role="switch" id="ifAdminValue">
                <label class="form-check-label" for="ifAdminValue">Con Administración</label>
                </div>
            </div>
            <div class="col-4" v-if="ifAdminValue">
                <div class="input-group has-validation">
                    <span class="input-group-text">Valor Admin</span>
                    <input type="text" v-model="adminValue" class="form-control" id="adminValue">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="input-group has-validation">
                    <span class="input-group-text">Incremento</span>
                    <input type="text" v-model="increment" class="form-control" id="username">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="input-group has-validation">
                    <span class="input-group-text">Derechos de contrato</span>
                    <input type="text" v-model="contractRights" class="form-control" id="username">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="input-group has-validation">
                    <span class="input-group-text">Fecha de Entrega</span>
                    <input type="date" v-model="deliveryDate" class="form-control" format="dd-mm-yyyy" id="username">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="input-group has-validation">
                    <span class="input-group-text">Periodo de Gracia</span>
                    <input type="text" v-model="gradePeriod" class="form-control" id="gradePeriod">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="input-group has-validation">
                    <span class="input-group-text">Clausulas</span>
                    <textarea v-model="clause" class="form-control" id="username"></textarea>
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4">
        <Documents component="CONTRATO" :listDocuments="documents" :contractDocuments="contract.contract_documents"/>
        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
    </form>
</template>

<script>
import Documents from "../documents/index.vue";
export default {
    name:"contract",
    props: ['contract','documents'],
    components: {
        Documents
    },
    data() {
        return {       
             
            active: 'btn btn-success btn-sm',
            inactive: 'btn btn-danger btn-sm',
            contractEditing: true,
            contract_id: this.contract ? this.contract.id : contract_id,
            asegurable: this.contract ? this.contract.asegurable : asegurable,
            domus: this.contract ? this.contract.domus : domus,
            ifAdminValue: this.contract.adminValue ? true : false,
            cannon: this.contract ? this.contract.cannonLease : cannon,
            adminValue: this.contract ? this.contract.adminValue : adminValue,
            detailEstateDocumentView: true,
            contractRights: this.contract ? this.contract.contractRights : contractRights,
            increment: this.contract ? this.contract.increment : increment,
            deliveryDate: this.contract ? this.contract.deliveryDate : deliveryDate,
            gradePeriod: this.contract ? this.contract.gracePeriod : gradePeriod,
            clause: this.contract ? this.contract.clause : clause,
            fileName: '',
            isEditing: true
        }
    }
}
</script>