<template>
    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <PanelContract 
                    :contract="contract" 
                    :participants="participants" 
                    :estate="estate" 
                    @ContractView="ContractView" 
                    @EstateView="EstateView" />
        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3"></h4>
            <div v-if="contractOn"><ContractForm :contract="this.contract" :documents="documents.data"></ContractForm></div>
            <div v-if="estateOn"><EstateForm :contract="this.contract" :estate="this.estateInject" :documents="documents.data"></EstateForm></div>
            <div v-if="personOn"><PersonForm :participant="this.participantInject" :documents="documents.data"></PersonForm></div>
            <div v-if="inmobiliariaOn"><RealEstate /></div>
            <div v-if="administrationOn"><PropertyAdministration /></div>
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
export default {
    name: 'App',
    props: ['documents', 'contractDocuments','contract', 'estate', 'participants'],
    components: {
        PanelContract,
        ContractForm,
        EstateForm,
        PersonForm,
        RealEstate,
        PropertyAdministration
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
            contractOn: false,
            estateOn: false,
            personOn: false,
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
            this.contractInject.push(contract);
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
            console.log(this.estateInject[0])
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
            this.participantInject.push(participant);
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
        }
        ,
        AdministrationView(){
            this.participantInject = [];
            this.estateInject = [];
            this.contractInject = [];
            this.administrationOn = true;
            this.inmobiliariaOn = false;
            this.personOn = true;
            this.contractOn = false;
            this.estateOn = false;
        }
    }    
}
</script>