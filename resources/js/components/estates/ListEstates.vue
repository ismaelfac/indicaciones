<template>
    <div>
        <div class="col-12">
            <div class="input-group mb-3">
                <label class="input-group-text" for="estateAddress">Dirección del Inmueble</label>
                <input type="text" class="form-control" id="estateAddress" v-model="estatePanel.address">
                <button class="btn btn-outline-secondary" type="button" @click="loadEstates()">Buscar</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Inmueble</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
  
</template>

<script>
export default {
    name: 'ListEstate',
    data() {
        return {
            estatePanel:
            {
                address: ''
            },
            isEstate: false
        }
    },
    methods: {
        loadEstates(){
            this.isEstate = true;
        }
    }
}
</script>

<style>

</style>