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
        contractDocument {{ this.contractDocument }}
        <hr class="my-4">
        <h4 class="mb-1">Documentos del Contrato</h4>
        <div class="row">
            <ul class="row list-group list-group-flush">
                <div v-if="documents">
                    <li class="list-group-item" v-for="document in documentContract" :key="document.id">
                        <div class="card text-center col-12">
                            <div class="card-header">
                                {{ document.title }}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" v-if="!isEditing">Special title treatment</h5>
                                <input type="text" v-model="fileName" class="form-control" id="fileName" v-else>
                                <input class="form-control" type="file" id="formFile" @change="changeFiles" ref="documentsFile">
                                <a href="#" class="btn btn-primary">Cargar Documento</a>
                            </div>
                            <div class="card-footer text-muted">
                                2 days ago
                            </div>
                        </div>
                    </li>
                </div>
            </ul>
        </div>
        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
    </form>
</template>

<script>
export default {
    name:"contract",
    props: ['contract','contractDocument','documents'],
    computed: {
        documentContract: function () {
            return this.documents.filter(function (document) {
                return document.category === 'CONTRATO';
            });
        }
    },
    data() {
        return {        
            active: 'btn btn-success btn-sm',
            inactive: 'btn btn-danger btn-sm',
            contractEditing: true,
            asegurable: this.contract ? this.contract[0].asegurable : asegurable,
            domus: this.contract ? this.contract[0].domus : domus,
            ifAdminValue: this.contract[0].adminValue ? true : false,
            cannon: this.contract ? this.contract[0].cannonLease : cannon,
            adminValue: this.contract ? this.contract[0].adminValue : adminValue,
            detailEstateDocumentView: true,
            contractRights: this.contract ? this.contract[0].contractRights : contractRights,
            increment: this.contract ? this.contract[0].increment : increment,
            deliveryDate: this.contract ? this.contract[0].deliveryDate : deliveryDate,
            gradePeriod: this.contract ? this.contract[0].gracePeriod : gradePeriod,
            clause: this.contract ? this.contract[0].clause : clause,
            fileName: '',
            isEditing: true
        }
    },
    methods: {
        changeFiles(e){
            console.log('entro', e.target.files[0]);
        }
    }
}
</script>