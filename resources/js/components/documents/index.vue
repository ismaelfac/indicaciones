<template>
    <div>        
        <h4 class="mb-1">Documentos del Contrato</h4>
        <div class="row">
            <ul class="row list-group list-group-flush">
                <div v-if="documents">
                    <li class="list-group-item" v-for="document in documentContract" :key="document.id">
                        <div class="card text-center col-12">
                            <div class="card-header">
                                {{ document.title }}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" v-if="!linkedDocuments">Special title treatment</h5>
                                <input type="text" v-model="fileName" class="form-control" id="fileName">
                                <input class="form-control" type="file" id="formFile" @change="changeFiles" ref="documentsFile">
                                <a href="#" class="btn btn-primary">Cargar Documento</a>
                            </div>
                            <div class="card-footer text-muted">
                                {{ contract_id }}-{{ info }}
                            </div>
                        </div>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</template>
<script>
export default {
    name: 'document',
    props: ['documents','contract_id'],
    computed: {
        documentContract: function () {
            return this.documents.filter(function (document) {
                return document.category === 'CONTRATO';
            });
        },
        loadContractDocuments(){

        }
    },
    mounted () {
        axios
            .get('/contractsDocument/',this.contract_id)
            .then(response => (this.info = response.data));
        console.log(this.info);
    },
    data() {
        return{
            linkedDocuments: [],
            info: null
        }
    },
    methods: {
        changeFiles(e){
            console.log('entro', e.target.files[0]);
        }
    }
}
</script>