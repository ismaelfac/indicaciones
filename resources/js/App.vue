<template>
    <div>
            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Contrato No</span>
                    <span class="badge bg-primary rounded-pill">{{ asegurable }}</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                            <h6 class="my-0"><a href="#" @click="EstateView" class="btn btn-default">Inmueble</a></h6>
                            <small class="text-muted">{{ estateAddress }}</small>
                            </div>
                            <span class="text-muted">INCOMPLETO</span>
                        </li>
                    </ul>

                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Participantes</span>
                    <span class="badge bg-primary rounded-pill">{{ NumParticipantes }}</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0"><a href="#" @click="PersonView" class="btn btn-default">Nuevo Participante</a></h6>
                        </div>
                        <span class="text-muted">INCOMPLETO</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                        <h6 class="my-0">Arrendatario</h6>
                        <small class="text-muted">Comercizalizadora xyz</small>
                        </div>
                        <span class="text-muted">INCOMPLETO</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                        <h6 class="my-0">Deudor</h6>
                        <small class="text-muted">Francisco Venabides</small>
                        </div>
                        <span class="text-muted">INCOMPLETO</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                        <h6 class="my-0">Propietario</h6>
                        <small class="text-muted">Ismael Lastre Alvarez</small>
                        </div>
                        <span class="text-muted">COMPLETADO</span>
                    </li>
                    </ul>

                    <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                    </form>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3"></h4>
                    <div v-if="estateOn"><EstateForm contractEditing="true"></EstateForm></div>
                    <div v-if="personOn"><PersonForm></PersonForm></div>
                </div>
            </div>
    </div>
</template>

<script>
import EstateForm from './components/estates/index.vue';
import PersonForm from './components/person/index.vue';
export default {
    name: 'App',
    components: {
        EstateForm,
        PersonForm
    },
    data() {
        return {
            estateOn: false,
            personOn: false,
            estateAddress: 'CLL 95 # 37-69 PISO 2',
            contractEditing: true,
            asegurable: '',
            NumParticipantes: 3
        }
    },
    methods: {
        EstateView(){
            this.estateOn = !this.estateOn;
            this.personOn = false;
        },
        PersonView(){
            this.personOn = !this.personOn;
            this.estateOn = false;
        }
    }
}
</script>