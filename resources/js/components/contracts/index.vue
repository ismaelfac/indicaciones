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
                    <input type="text" v-model="gradePeriod" class="form-control" id="username">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="input-group has-validation">
                    <span class="input-group-text">Clausulas</span>
                    <input type="textarea" v-model="clause" class="form-control" id="username">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4">
            <div class="row" v-if="detailEstateDocumentView">
                <h4 class="mb-1">Documentos del Inmueble</h4>
                <div v-if="typePerson === 'Juridica'" class="col-12">
                    <small class="text-muted">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">RUT</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </small>
                </div>
                <div v-if="typePerson === 'Juridica'" class="col-12">
                    <small class="text-muted">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">CAMARA DE COMERCIO</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </small>
                </div>
                <div class="col-12">
                    <small class="text-muted">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">SOLICITUD DE ARENDAMIENTO</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </small>
                </div>
                <div class="col-12">
                    <small class="text-muted">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">INSPECCION E INVENTARIO</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </small>
                </div>     
                <div class="col-12">
                    <small class="text-muted">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">ASEGURABLE O APROVADO</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </small>
                </div>
                <div class="col-12">
                    <small class="text-muted">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">INVENTARIO DE ENTREGA</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </small>
                </div>            
            </div>
            contract: {{ this.contract[0] }}
        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
    </form>
</template>

<script>
export default {
    name:"contract",
    props: ['contract'],
    data() {
        return {        
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
            gradePeriod: this.contract ? this.contract[0].gradePeriod : gradePeriod,
            clause: this.contract ? this.contract[0].clause : clause
        }
    }
}
</script>