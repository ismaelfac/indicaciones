<template>
    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <PanelContract 
                    :contract="contract" 
                    :participants="participants" 
                    :estate="estate"
                    @DocumentsView="DocumentsView" 
                    @ContractView="ContractView" 
                    @EstateView="EstateView"
                    @PersonView="PersonView"
                    @InmobiliariaView="InmobiliariaView"
                    @AdministrationView="AdministrationView" />
        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3"></h4>
            <div v-if="contractOn"><ContractForm :contractId="contractInject" :documents="documents"></ContractForm></div>
            <div v-if="estateOn"><EstateForm :contract="contract" :estate="this.estateInject" :documents="documents"></EstateForm></div>
            <div v-if="personOn"><PersonForm :contractId="contractInject" :participant="this.participantInject" :documents="documents"></PersonForm></div>
            <div v-if="inmobiliariaOn"><RealEstate /></div>
            <div v-if="administrationOn"><PropertyAdministration :estate="this.estateInject" /></div>
            <div v-if="documentsOn"><Documents/></div>
        </div>
    </div>
</template>

<script>
import ContractForm from './components/contracts/index.vue';
import EstateForm from './components/estates/index.vue';
import PersonForm from './components/person/index.vue';
import RealEstate from "./components/realEstate/index.vue";
import PropertyAdministration from "./components/propertyAdministration/index.vue";
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
        RealEstate,
        PropertyAdministration,
        Documents
    },
    mounted() {
        this.contractDocuments;
        this.emitter.on('Person-View', (participant) =>{
            console.log('participant desde app.vue',participant);
            this.PersonView(participant);
        })
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
            inmobiliariaOn: false,
            contractEditing: true,
        }
    },
    methods: {
        ContractView(contract){
            this.contractInject = [];
            this.participantInject = [];
            this.estateInject = [];
            this.contractOn = true;
            this.administrationOn = false;
            this.inmobiliariaOn = false;
            this.estateOn = false;
            this.personOn = false;
            this.contractInject=contract;
            console.log('contractInject',this.contractInject);
        },
        EstateView(estate){
            this.participantInject = [];
            this.estateInject = [];
            this.contractInject = [];
            this.estateOn = true;
            this.administrationOn = false;
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
            this.administrationOn = false;
            this.inmobiliariaOn = false;
            this.contractOn = false;
            this.estateOn = false;
            console.log(participant)
            this.participantInject.push(participant);
            this.contractInject.push(this.contract.id);
        },
        InmobiliariaView(){
            this.participantInject = [];
            this.estateInject = [];
            this.contractInject = [];
            this.inmobiliariaOn = true;
            this.administrationOn = false
            this.personOn = false;
            this.contractOn = false;
            this.estateOn = false;
        },
        AdministrationView(estate){
            console.log('AdministrationView entro')
            this.participantInject = [];
            this.estateInject = [];
            this.contractInject = [];
            this.estateInject.push(estate);
            this.administrationOn = true;
            this.inmobiliariaOn = false;
            this.personOn = false;
            this.contractOn = false;
            this.estateOn = false;
        },
        DocumentsView(id){
            console.log('entro a DocumentsView', id)
            this.participantInject = [];
            this.estateInject = [];
            this.contractInject = [];
            this.inmobiliariaOn = false;
            this.administrationOn = false
            this.personOn = false;
            this.contractOn = false;
            this.estateOn = false;
            this.documentsOn = true;
        }
    }    
}
</script>