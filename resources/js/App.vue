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
                    <span class="badge bg-primary rounded-pill">{{ numParticipants }}</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0"><a href="#" @click="PersonView" class="btn btn-default">Nuevo Participante</a></h6>
                        </div>
                    </li>
                        <ListPerson v-for="participant in participants" :key="participant.id" :typePerson="participant.typePerson" :names="participant.names" :bussinessName="participant.bussinessName" :estate="participant.estate" />
                    </ul>
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
import ListPerson from './components/person/List.vue';
export default {
    name: 'App',
    components: {
        EstateForm,
        PersonForm,
        ListPerson
    },
    data() {
        return {
            estateOn: false,
            personOn: false,
            estateAddress: 'CLL 95 # 37-69 PISO 2',
            contractEditing: true,
            asegurable: '',
            numParticipants: 3,
            participants: [
                {
                    id: 1,
                    typePerson: 'ARRENDATARIO',
                    bussinessName: 'COMERCIALIZADORA XYZ',
                    estate: false
                },
                {
                    id: 1,
                    typePerson: 'DEUDOR',
                    names: 'SINFOROSO GUMERSINDO',
                    estate: true
                },
                {
                    id: 1,
                    typePerson: 'PROPIETARIO',
                    names: 'ISMAEL ENRIQUE LASTRE ALVAREZ',
                    estate: true
                }
            ]
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