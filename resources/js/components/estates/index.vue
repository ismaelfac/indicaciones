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
                        <option value="LOCAL COMERCIAL">LOCAL COMERCIAL</option>
                        <option value="CASA COMERCIAL">CASA COMERCIAL</option>
                        <option value="CASA VIVIENDA">CASA VIVIENDA</option>
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
                <label class="form-check-label" for="isSharedWaterMeter">Contador de Aguar Compartido</label>
                </div>
            </div>
            <div class="col-4">
                <div class="form-check form-switch">
                <input class="form-check-input" v-model="isSharedGasMeter" type="checkbox" role="switch" id="isSharedGasMeter">
                <label class="form-check-label" for="isSharedGasMeter">Contador de Gas Compartido</label>
                </div>
            </div>
            <div class="col-12">
                <div class="input-group has-validation">
                    <span class="input-group-text">Observaciones</span>
                    <input type="textarea" v-model="observations" class="form-control" id="observations">
                    <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4">
        estates {{ estate }}
            <h4 class="mb-1">Documentos del Inmueble</h4>
            <ul class="list-group mb-3">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div v-if="documents">
                        <li class="list-group-item d-flex justify-content-between lh-sm" v-for="document in documentEstate" :key="document.id">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">{{ document.title }}</label>
                                <input class="form-control" type="file" id="formFile" @change="changeFiles" ref="documentsFile">
                            </div>
                            <span class="text-muted"><a href="#" :class="[document.isActive ? active : inactive]">{{ (document.isActive) ? 'COMPLETADO': 'COMPLETAR'}}</a></span>
                        </li>
                    </div>                    
                </form>
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
            active: 'btn btn-success btn-sm',
            inactive: 'btn btn-danger btn-sm',
            contractEditing: true,
            estateAddress: this.estate ? this.estate[0].address : estateAddress,
            typeEstate: this.estate ? this.estate[0].typeEstate : typeEstate,
            isSharedElectricityMeter: this.estate[0].isSharedElectricityMeter ? true : false,
            isSharedWaterMeter: this.estate[0].isSharedWaterMeter ? true : false,
            isSharedGasMeter: this.estate[0].isSharedGasMeter ? true : false,
            observations: this.estate ? this.estate[0].observations : observations,
        }
    },
    methods: {
        changeFiles(e){
            console.log('entro', e.target.files[0]);
        }
    }
}
</script>