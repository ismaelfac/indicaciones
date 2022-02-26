<template>
    <div>        
        <h4 class="mb-1">Documentos del Contrato</h4>
        <div class="row">
            <ul class="row list-group list-group-flush">
                <div v-if="listDocuments">
                    <li class="list-group-item" v-for="document in documentContract" :key="document.id">
                        <div class="card text-center col-12">
                            <div class="card-header">
                                {{ document.title }}
                            </div>
                            <div class="card-body">
                                <div v-for="contractDocument in contractDocuments" :key="contractDocument.id">
                                    <h5 class="card-title" v-if="contractDocument.pivot.fileName">{{ contractDocument.id === document.id ? contractDocument.pivot.fileName : '' }}</h5>
                                    <h5 class="card-title" v-else>NO REGISTRA DOCUMENTO</h5>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3">Titulo del Documento</span>
                                    <input type="text" v-model="fileName" class="form-control" id="fileName">
                                </div>                                
                                <input class="form-control" type="file" id="formFile" @change="changeFiles" ref="documentsFile">                                
                            </div>
                            <div class="card-footer text-muted">
                                <a href="#" class="btn btn-primary">Cargar Documento</a>
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
        props: ['component','listDocuments','contractDocuments'],
        computed: {
            documentContract: function (component) {
                return this.listDocuments.filter(function (document) {
                    return document.category === component.component;
                });
            }        
        },
        mounted () {
            
        },
        data() {
            return{
                linkedDocuments: 'CONTRATO',
                info: null,
                fileName: ''
            }
        },
        methods: {
            changeFiles(e){
                console.log('entro', e.target.files[0]);
            }
        }
    }
</script>