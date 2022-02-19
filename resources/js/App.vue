<template>
    <div>
        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <PanelContract :contract="contract" :participants="participants" :estate="estate" @ContractView="ContractView" @EstateView="EstateView" @PersonView="PersonView" />
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3"></h4>
                <div v-if="contractOn"><ContractForm :contract="contractInject"></ContractForm></div>
                <div v-if="estateOn"><EstateForm :estate="estateInject"></EstateForm></div>
                <div v-if="personOn"><PersonForm :participant="participant"></PersonForm></div>
            </div>
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
    props: ['contract', 'estate', 'participants'],
    components: {
        PanelContract,
        ContractForm,
        EstateForm,
        PersonForm
    },
    data() {
        return {
            contractInject: [],
            participantInject: [],
            estateInject: [],
            contractOn: false,
            estateOn: false,
            personOn: false,
            contractEditing: true,
        }
    },
    methods: {
        ContractView(contract){
            this.contractOn = !this.contractOn;
            this.estateOn = false;
            this.personOn = false;
            this.contractInject.push(contract);
            console.log(this.contractInject)
        },
        EstateView(estate){
            this.estateOn = !this.estateOn;
            this.contractOn = false;
            this.personOn = false;
            this.estateInject.push(estate);
            console.log(this.estateInject[0])
        },
        PersonView(participant){
            this.personOn = !this.personOn;
            this.contractOn = false;
            this.estateOn = false;
            this.participantInject.push(participant);
            console.log(this.participantInject)
        }
    }    
}
</script>