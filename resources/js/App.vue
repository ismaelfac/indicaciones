<template>
    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <PanelContract 
                :contract="contract" 
                :participants="participants" 
                :estate="estate"
                @ContractView="ContractView" 
                @EstateView="EstateView"
                @PersonView="PersonView"
                @DocumentsView="DocumentsView"/>
        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3"></h4>
            <div v-if="contractOn"><ContractForm :contractId="contractInject"></ContractForm></div>
            <div v-if="estateOn"><EstateForm :contract="contract" :estate="this.estateInject"></EstateForm></div>
            <div v-if="personOn"><PersonForm :contractId="contractInject" :participant="this.participantInject"></PersonForm></div>
            <div v-if="documentsOn"><Documents :typeDocuments="this.typeDocuments" :documentsId="this.documentsId" :contractId="this.contractId"/></div>
        </div>
    </div>
</template>

<script>
import ContractForm from './components/contracts/index.vue';
import EstateForm from './components/estates/index.vue';
import PersonForm from './components/person/index.vue';
import PanelContract from './components/panelContract/index.vue';
import Documents from "./components/documents/index.vue";
export default {
    name: 'App',
    props: ['documents', 'contractDocuments','contract', 'estate', 'participants'],
    components: {
        PanelContract,
        ContractForm,
        EstateForm,
        PersonForm,
        Documents
    },
    mounted() {
        this.contractDocuments;
        this.emitter.on('Person-View', (participant) =>{
            console.log('participant desde app.vue',participant);
            this.PersonView(participant);
        });
        this.emitter.on('DocumentsView',(parameterDocument) => {
            this.typeDocuments = parameterDocument[0];
            this.documentsId = parameterDocument[1];
            this.contractId = parameterDocument[2];
            this.DocumentsView();
        });
    },
    data() {
        return {
            contractInject: '',
            participantInject: [],
            estateInject: [],
            contractOn: false,
            estateOn: false,
            personOn: false,
            documentsOn: false,
            administrationOn: false,
            contractEditing: true,
            typeDocuments: '',
            documentsId: '',
            contractId: ''
        }
    },
    methods: {
        ContractView(contract){
            this.contractInject = [];
            this.participantInject = [];
            this.estateInject = [];
            this.contractOn = true;            
            this.inmobiliariaOn = false;
            this.estateOn = false;
            this.personOn = false;
            this.contractInject=contract;
        },
        EstateView(estate){
            this.participantInject = [];
            this.estateInject = [];
            this.contractInject = [];
            this.estateOn = true;            
            this.inmobiliariaOn = false;
            this.contractOn = false;
            this.personOn = false;
            this.estateInject.push(estate);
            
        },
        PersonView(participant){
            this.participantInject = [];
            this.estateInject = [];
            this.contractInject = [];
            this.personOn = true;            
            this.inmobiliariaOn = false;
            this.contractOn = false;
            this.estateOn = false;
            this.participantInject.push(participant);
            this.contractInject.push(this.contract.id);
        },
        DocumentsView(){
            this.participantInject = [];
            this.estateInject = [];
            this.contractInject = [];
            this.inmobiliariaOn = false;
            this.personOn = false;
            this.contractOn = false;
            this.estateOn = false;
            this.documentsOn = true;
        }
    }    
}
</script>