<template>
    <div>
        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <PanelContract :participants="participants" :estate="estate" @EstateView="EstateView" @PersonView="PersonView" />
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3"></h4>
                <div v-if="estateOn"><EstateForm :estate="estateInject"></EstateForm></div>
                <div v-if="personOn"><PersonForm :participant="participant"></PersonForm></div>
            </div>
        </div>
    </div>
</template>

<script>
import EstateForm from './components/estates/index.vue';
import PersonForm from './components/person/index.vue';
import PanelContract from './components/panelContract/index.vue';
export default {
    name: 'App',
    props: ['contract', 'estate', 'participants'],
    components: {
        PanelContract,
        EstateForm,
        PersonForm
    },
    data() {
        return {
            participantInject: [],
            estateInject: [],
            estateOn: false,
            personOn: false,
            contractEditing: true,
        }
    },
    methods: {
        EstateView(estate){
            this.estateOn = !this.estateOn;
            this.personOn = false;
            this.estateInject.push(estate);
            console.log(this.estateInject[0])
        },
        PersonView(participant){
            this.personOn = !this.personOn;
            this.estateOn = false;
            this.participantInject.push(participant);
            console.log(this.participantInject)
        }
    }    
}
</script>