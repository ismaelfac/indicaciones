<script>
import ListContract from '../contracts/List.vue';
import ListPerson from '../person/List.vue';
import ListEstate from '../estates/List.vue';
export default {
    name: 'panelContract',
    props: ['participants', 'estate', 'contract'],
    emits: ['ContractView','EstateView','PersonView'],
    inject: ['contractInject','estateInject', 'participantInject'],
    components: {
        ListContract,
        ListPerson,
        ListEstate
    },
    data() {
        return{
            numParticipants: this.participants.length ? this.participants.length : '',
        }
    },
    methods: {

    }
}
</script>
<template>
    <div>
        <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Contrato No</span>
        <span class="badge bg-primary rounded-pill">{{ contract ? contract.id : '' }}</span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm" v-if="!estate">
                <h6 class="my-0"><a href="#" @click="ContractView" class="btn btn-link">Contracto</a></h6>

            </li>
            
            <div v-if="contract">
                <ListContract 
                    :id="contract.id" 
                    :asegurable="contract.asegurable" 
                    :domus="contract.domus" 
                    @click="$emit('ContractView', contract)"/>
            </div>
        </ul>
        <hr class="my-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Inmueble</span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm" v-if="!estate">
                <h6 class="my-0"><a href="#" @click="EstateView" class="btn btn-link">Inmueble</a></h6>

            </li>
            
            <div v-if="estate">
                <ListEstate 
                    :id="estate.id" 
                    :typeEstate="estate.typeEstate" 
                    :address="estate.address" 
                    :isActive="estate.isActive" 
                    @click="$emit('EstateView', estate)"/>
            </div>
        </ul>
        <hr class="my-4">
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
            <div v-if="participants">
                <ListPerson v-for="participant in participants" 
                            :key="participant.id" 
                            :typePerson="participant.typePerson" 
                            :names="participant.names" 
                            :bussinessName="participant.bussinessName" 
                            :state="participant.state" 
                            @click="$emit('PersonView', participant)"/>
            </div>
        </ul>
    </div>
</template>