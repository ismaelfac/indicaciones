<template>
    <div>
        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <PanelContract :participants="participants" :estate="estate" />
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3"></h4>
                <div v-if="estateOn"><EstateForm contractEditing="true"></EstateForm></div>
                <div v-if="personOn"><PersonForm></PersonForm></div>
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
            contractEditing: true,
        }
    }    
}
</script>