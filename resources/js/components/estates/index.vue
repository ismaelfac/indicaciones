<template>
    <form class="needs-validation" novalidate>
        <div class="row g-3">
            <div class="col-6">
                <div class="input-group has-validation" v-if="contractEditing">
                    <span class="input-group-text">ASEGURABLE</span>
                    <input type="text" v-model="asegurable" class="form-control" id="username">
                <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group has-validation" v-if="contractEditing"> 
                    <span class="input-group-text">COD DOMUS</span>
                    <input type="text" class="form-control" id="username" v-model="codDomus">
                <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <h4 class="mb-1">Información de Inmueble</h4>
            <div class="col-4">
                <div class="input-group has-validation">
                    <span class="input-group-text">Dirección</span>
                    <input type="text" class="form-control" id="estateAddress" v-model="estateAddress">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
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
                <input class="form-check-input" v-model="ifAdminValue" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Con Administración</label>
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
        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
    </form>
</template>

<script>
export default {
    name:"estate",
    props: ['estate'],
    data() {
        return {        
            contractEditing: true,
            estateAddress: this.estate ? this.estate[0].address : estateAddress,
            cannon: this.estate ? this.estate[0].address : estateAddress,
            asegurable: '',
            codDomus: '',
            detailEstateDocumentView: true,
            ifAdminValue: false,
            adminValue: 0,
            deliveryDate: '',
            gradePeriod: 0,
            increment: 0,
            clause: ''
        }
    }
}
</script>