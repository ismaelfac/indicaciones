<script>
import ListPerson from '../../components/person/List.vue';
import ListEstate from '../../components/estates/List.vue';
export default {
    name: 'panelContract',
    props: ['participants', 'estate'],
    components: {
        ListPerson,
        ListEstate
    },
    data() {
        return{
            estateOn: false,
            personOn: false,
            numParticipants: this.participants.length ? this.participants.length : ''
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
<template>
    <div>
        <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Contrato No</span>
        <span class="badge bg-primary rounded-pill">{{ asegurable ? asegurable : '' }}</span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm" v-if="!estate">
                <h6 class="my-0"><a href="#" @click="EstateView" class="btn btn-link">Inmueble</a></h6>

            </li>
            
            <ListEstate :id="estate.id" :typeEstate="estate.typeEstate" :address="estate.address" :isActive="estate.isActive"/>
        </ul>
        <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Participantes</span>
        <span class="badge bg-primary rounded-pill">{{ numParticipants }}</span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm" v-if="!participants">
            <div>
                <h6 class="my-0"><a href="#" @click="PersonView" class="btn btn-default">Nuevo Participante</a></h6>
            </div>
        </li>
            <ListPerson v-for="participant in participants" :key="participant.id" :typePerson="participant.typePerson" :names="participant.names" :bussinessName="participant.bussinessName" :state="participant.state" />
        </ul>
    </div>
</template>