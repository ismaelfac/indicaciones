<script>
import ListContract from '../contracts/List.vue';
import ListPerson from '../person/List.vue';
import ListEstate from '../estates/List.vue';
export default {
    name: 'panelContract',
    props: ['participants', 'estate', 'contract'],
    emits: ['ContractView','EstateView'],
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
        },
        newParticipant(){
            console.log('new Participant')
        }
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
                    @click="$emit('ContractView', [contract])"/>
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
        <span class="badge bg-primary rounded-pill"></span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <h6 class="my-0"><a href="#" @click="newParticipant" class="btn btn-danger">Nuevo Participante</a></h6>
            </div>
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
                            @click="loadParticipant(participant)"/>
            </div>
        </ul>
        <hr class="my-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Inmobiliaria</span>
        <span class="badge bg-primary rounded-pill"></span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <h6 class="my-0"><a href="#" @click="newParticipant" class="btn btn-danger">Nueva Configuración</a></h6>
            </div>
        </li>
            <div v-if="participants">
                
            </div>
        </ul>
        <hr class="my-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Administración Inmueble</span>
        <span class="badge bg-primary rounded-pill"></span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <h6 class="my-0"><a href="#" @click="newParticipant" class="btn btn-danger">Nueva Configuración</a></h6>
            </div>
        </li>
            <div v-if="participants">
                
            </div>
        </ul>
    </div>
</template>