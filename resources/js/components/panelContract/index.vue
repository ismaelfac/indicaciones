<script>
import ListContract from '../contracts/List.vue';
import ListPerson from '../person/List.vue';
import ListEstate from '../estates/List.vue';
import ListEstatesNew from '../estates/ListEstates.vue'
export default {
    name: 'panelContract',
    props: ['participants', 'estate', 'contract'],
    emits: ['ContractView','EstateView', 'PersonView','DocumentsView'],
    inject: ['contractInject','estateInject', 'participantInject'],
    components: {
        ListContract,
        ListPerson,
        ListEstate,
        ListEstatesNew
    },
    data() {
        return {
        }
    },
    methods: {
        loadParticipant(participant){
            this.emitter.emit('Person-View', participant);
        },
        loadDocuments(typeDocument,id, contractId){
            console.log('accion disparada', typeDocument)
            this.emitter.emit('DocumentsView', [typeDocument,id, contractId])
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
                <h6 class="my-0"><a href="#" type="button" @click="$emit('EstateView')" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Configurar Inmueble</a></h6>
            </li>            
            <div v-if="estate">
                <ListEstate 
                    :id="estate.id" 
                    :typeEstate="estate.typeEstate" 
                    :address="estate.address" 
                    :isActive="estate.isActive" 
                    @click="$emit('EstateView', estate.id)"/>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <a class="btn btn-danger btn-sm btn-block" type="button" id="btnEstateDocuments" @click="loadDocuments('estates',estate.id, contract.id)">DOCUMENTOS</a>
                </li>
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
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <a class="btn btn-danger btn-sm btn-block" type="button" id="btnContractDocuments" @click="loadDocuments('contracts',contract.id, 0)">DOCUMENTOS</a>
                </li>
            </div>
        </ul>
        <hr class="my-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Participantes</span>
        <span class="badge bg-primary rounded-pill"></span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <h6 class="my-0"><a @click="$emit('PersonView', 0)" class="btn btn-danger">Asignar Participante</a></h6>
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

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Listado de Inmuebles</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ListEstatesNew></ListEstatesNew>    
                </div>
                <div class="modal-footer">
                    <p>Consulte aqui el Inmueble a crear y presione click en aplicar Inmueble</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>