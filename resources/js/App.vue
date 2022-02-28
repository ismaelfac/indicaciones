<template>
Inmuebles {{ this.estates }}
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
            <div v-if="personParametersOn"><RealEstate /></div>
            <div v-if="personPaymentsOn"><PropertyAdministration /></div>
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
            personPaymentsOn: false,
            personParametersOn: true,
            contractEditing: true,
        }
    },
    methods: {
        ContractView(contract){
            this.contractInject = [];
            this.contractOn = true;
            this.personPaymentsOn = false;
            this.personParametersOn = false;
            this.estateOn = false;
            this.personOn = false;
            this.contractInject.push(contract);
        },
        EstateView(estate){
            this.estateInject = [];
            this.estateOn = true;
            this.personPaymentsOn = false;
            this.personParametersOn = false;
            this.contractOn = false;
            this.personOn = false;
            this.estateInject.push(estate);
            console.log(this.estateInject[0])
        },
        PersonView(participant){
            this.participantInject = [];
            this.personOn = true;
            this.personPaymentsOn = false;
            this.personParametersOn = false;
            this.contractOn = false;
            this.estateOn = false;
            this.participantInject.push(participant);
        },
        PersonParamentersView(participant){
            this.participantInject = [];
            this.personParametersOn = true;
            this.personPaymentsOn = false
            this.personOn = false;
            this.contractOn = false;
            this.estateOn = false;
            this.participantInject.push(participant);
        }
        ,
        PersonPaymentsView(participant){
            this.participantInject = [];
            this.personPaymentsOn = true;
            this.personParametersOn = false;
            this.personOn = true;
            this.contractOn = false;
            this.estateOn = false;
            this.participantInject.push(participant);
        }
    }    
}
</script>