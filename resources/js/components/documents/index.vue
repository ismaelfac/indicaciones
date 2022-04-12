<template>   
    <div class="row">
        <ul class="row list-group list-group-flush">
            <h5>Listado de Documentos</h5>
            <template v-if="documents">
                <li class="list-group-item" v-for="document in documents" :key="document.id">
                    <div class="card text-center col-12">
                        <div class="card-header">
                            {{ document.title }}
                        </div>
                        <div class="card-body">
                            <div v-for="listDocument in listDocumentsEstate" :key="listDocument.id">
                                <h5 class="card-title" v-if="listDocument.pivot.fileName">{{ listDocument.id === document.id ? listDocument.pivot.fileName : '' }}</h5>
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
            </template>
        </ul>
    </div>
</template>
<script>
    export default {
        name: 'document',
        props: ['estateId', 'typeDocuments', 'contractId', 'personId'],
        mounted(){
            this.documents = [];
            this.loadDocuments(this.typeDocuments, this.documentsId)                     
        },
        data() {
            return{
                typeDocuments: this.typeDocuments,
                documentsId: this.documentsId,
                listDocumentsEstate: [],
                documents: [],
            }
        },
        methods: {
            async getDocumentsAction(typeDocuments, id){
                const urlId = `/${typeDocuments}/${id}`;
                console.log('link',urlId)
                return await axios.get(urlId).then(response => ([
                    console.log('response', response.data)
                ]));
            },
            async getDocuments(category){
                console.log('entro a getDocuments', category);
                const url = `/documentsCategoy/${category}`;
                console.log('link',url);
                return await axios.get(url).then(response => ([
                            this.documents = response.data
                        ]))
            },
            async loadDocuments(typeDocuments, estateId, contractId){
                switch (typeDocuments) {
                    case 'estates': {    
                        await this.getDocuments('INMUEBLE');                 
                        this.listDocumentsEstate = await this.getDocumentsAction(typeDocuments, estateId)
                        return this.listDocuments.filter(function () {
                            return (document.category === component.component);
                        });
                    }
                    case 'contracts': { 
                        await this.getDocuments('CONTRATO');                 
                        return this.listDocumentsEstate = await this.getDocumentsAction(typeDocuments, contractId)                        
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