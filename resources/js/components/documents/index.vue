<template>   
    <div class="row">
        <ul class="row list-group list-group-flush">
            <h5>Listado de Documentos</h5>
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
</template>
<script>
    export default {
        name: 'document',
        props: ['documentsId', 'typeDocuments', 'contractId'],
        mounted(){
            this.loadDocuments(this.typeDocuments, this.documentsId)                     
        },
        data() {
            return{
                typeDocuments: this.typeDocuments,
                documentsId: this.documentsId
            }
        },
        methods: {
            async getDocuments(typeDocuments, documentsId){
                const urlId = `/${typeDocuments}/${documentsId}`;
                console.log('link',urlId)
                return await axios.get(urlId).then(response => ([
                    console.log('response', response.data)
                ]));
            },
            async loadDocuments(typeDocuments, documentsId){
                switch (typeDocuments) {
                    case 'estates': {
                        this.listDocuments = await this.getDocuments(typeDocuments, documentsId)
                        return this.listDocuments.filter(function () {
                            return (document.category === component.component);
                        });
                        break;
                    }
                    case 'contracts': {
                        console.log(typeDocuments);
                        break;
                    }

                    case 'person': {
                        console.log(typeDocuments);
                        break;
                    }

                    default: {
                        console.log('Empty action received.');
                        break;
                    }
                }
            },
            changeFiles(e){
                
                console.log('entro', e.target.files[0]);
            }
        }
    }
</script>