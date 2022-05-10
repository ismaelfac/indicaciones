<template>
    <div>
        <div class="col-12">
            <div class="input-group mb-3">
                <label class="input-group-text" for="estateAddress">Dirección del Inmueble</label>
                <input type="text" class="form-control" id="estateAddress" v-model="estatePanel.address">
                <button class="btn btn-outline-secondary" type="button" @click="loadEstate(estatePanel.address)">Buscar</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Inmueble</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="estate in ListEstates" :key="estate.id">
                    <th scope="row">{{ estate.id }}</th>
                    <td>{{ estate.address }}</td>
                    <td><button @click="sendEstate(estate.id)" class="btn btn-success btn-sm">Aplicar Inmueble</button></td>
                </tr>
            </tbody>
        </table>
    </div>
  
</template>

<script>
import EstateServiceLocal from '../../services/EstateService';
export default {
    name: 'ListEstate',
    data() {
        return {
            ListEstates: [
            ],
            estatePanel:
            {
                address: ''
            },
            isEstate: false
        }
    },
    methods: {
        loadEstate(){
            this.isEstate = true;
        },
        async loadEstate(estate){
            this.ListEstates = await EstateServiceLocal.findEstate(estate);
        }
    }
}
</script>

<style>

</style>