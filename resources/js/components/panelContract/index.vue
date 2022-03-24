<script>
import ListContract from '../contracts/List.vue';
import ListPerson from '../person/List.vue';
import ListEstate from '../estates/List.vue';
export default {
    name: 'panelContract',
    props: ['participants', 'estate', 'contract'],
    emits: ['ContractView','EstateView','InmobiliariaView','AdministrationView', 'PersonView'],
    inject: ['contractInject','estateInject', 'participantInject'],
    components: {
        ListContract,
        ListPerson,
        ListEstate
    },
    data() {
        return{
        }
    },
    methods: {
        loadParticipant(participant){
            this.emitter.emit('Person-View', participant);
        }
    }
}
</script>
<template>
    <div>
        <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Inmueble</span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm" v-if="!estate">
                <h6 class="my-0"><a href="#" @click="$emit('EstateView')" class="btn btn-success">Configurar Inmueble</a></h6>
            </li>            
            <div v-if="estate">
                <ListEstate 
                    :id="estate.id" 
                    :typeEstate="estate.typeEstate" 
                    :address="estate.address" 
                    :isActive="estate.isActive" 
                    @click="$emit('EstateView', estate.id)"/>
                    
            </div>
        </ul>
        <hr class="my-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Contrato No</span>
            <span class="badge bg-primary rounded-pill">{{ contract ? contract.id : '' }}</span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm" v-if="!estate">
                <h6 class="my-0"><a href="#" @click="$emit('ContractView')" class="btn btn-success">Contracto</a></h6>
            </li>            
            <div v-if="contract">
                <ListContract 
                    :id="contract.id" 
                    :asegurable="contract.asegurable" 
                    :domus="contract.domus" 
                    :isActive="contract.isActive"
                    @click="$emit('ContractView', contract.id)"/>
            </div>
        </ul>
        <hr class="my-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Participantes</span>
        <span class="badge bg-primary rounded-pill"></span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <h6 class="my-0"><a @click="$emit('PersonView')" class="btn btn-danger">Asignar Participante</a></h6>
            </li>
            <div v-if="participants">
                <ListPerson v-for="participant in participants" 
                            :key="participant.id" 
                            :typeParticipant="participant.pivot.typeParticipant"
                            :typePerson="participant.pivot.typePerson" 
                            :legalPersonOf="participant.pivot.legalPersonOf"
                            :names="participant.names" 
                            :bussinessName="participant.bussinessName" 
                            :isActive="participant.isActive"
                            @click="loadParticipant(participant.id)"/>
            </div>
        </ul>
    </div>
</template>