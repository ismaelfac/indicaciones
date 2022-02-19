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
                        <option value="CASA COMERCIAL">CASA COMERCIAL</option>
                        <option value="CASA VIVIENDA">CASA VIVIENDA</option>
                        <option value="NO DEFINIDO">NO DEFINIDO</option>
                    </select>
                </div>
            </div>
        </div>

        <hr class="my-4">
            <h4 class="mb-1">Documentos del Inmueble</h4>
            <ul class="list-group mb-3">
                <div v-if="documents">
                    <li class="list-group-item d-flex justify-content-between lh-sm" v-for="document in documentEstate" :key="document.id">
                        <small class="text-muted">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupFile01">{{ document.title}}</label>
                                <input type="file" class="form-control" id="inputGroupFile01">
                            </div>
                        </small>
                        <span class="text-muted"></span>
                    </li>
                </div>
            </ul>
        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
    </form>
</template>

<script>
export default {
    name:"estate",
    props: ['estate','documents'],
    computed: {
        documentEstate: function () {
            return this.documents.filter(function (document) {
            return document.category === 'INMUEBLE';
            })
        }
    },
    data() {
        return {        
            contractEditing: true,
            estateAddress: this.estate ? this.estate[0].address : estateAddress,
            typeEstate: this.estate ? this.estate[0].typeEstate : typeEstate,
        }
    }
}
</script>