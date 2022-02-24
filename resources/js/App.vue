<template>
Inmuebles {{ this.estates }}
    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <PanelContract 
                    :contract="contract" 
                    :contractDocuments="contractDocuments"
                    :participants="participants" 
                    :estate="estate" 
                    @ContractView="ContractView" 
                    @EstateView="EstateView" />
        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3"></h4>
            <div v-if="contractOn"><ContractForm :contract="this.contractInject" :documents="documents.data"></ContractForm></div>
            <div v-if="estateOn"><EstateForm :estate="this.estateInject" :documents="documents.data"></EstateForm></div>
            <div v-if="personOn"><PersonForm :participant="this.participantInject" :documents="documents.data"></PersonForm></div>
        </div>
    </div>
</template>

<script>
import ContractForm from './components/contracts/index.vue';
import EstateForm from './components/estates/index.vue';
import PersonForm from './components/person/index.vue';
import PanelContract from './components/panelContract/index.vue';
export default {
    name: 'App',
    props: ['documents', 'contractDocuments','contract', 'estate', 'participants'],
    components: {
        PanelContract,
        ContractForm,
        EstateForm,
        PersonForm
    },
    mounted() {
        this.contractDocuments;
        this.emitter.on('Person-View', (participant) =>{
            this.PersonView(participant);
        })
    },
    data() {
        return {
            contractInject: [],
            participantInject: [],
            estateInject: [],
            contractDocumentsInject: [],
            contractOn: false,
            estateOn: false,
            personOn: false,
            contractEditing: true,
        }
    },
    methods: {
        ContractView(contract, contractDocuments){
            this.contractInject = [];
            this.contractOn = true;
            this.estateOn = false;
            this.personOn = false;
            this.contractInject.push(contract);
            this.contractDocumentsInject.push(contractDocuments);
            console.log(this.contractDocumentsInject)
        },
        EstateView(estate){
            this.estateInject = [];
            this.estateOn = true;
            this.contractOn = false;
            this.personOn = false;
            this.estateInject.push(estate);
            console.log(this.estateInject[0])
        },
        PersonView(participant){
            this.participantInject = [];
            this.personOn = true;
            this.contractOn = false;
            this.estateOn = false;
            this.participantInject.push(participant);
        }
    }    
}
</script>