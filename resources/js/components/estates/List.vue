<script>
    export default {
        name: 'ListEstate',
        props: [ 'id','isActive','typeEstate', 'address'],
        emits: ['EstateViewChild', 'DocumentsView'],
        data() {
            return{
                active: 'btn btn-success btn-sm',
                inactive: 'btn btn-danger btn-sm'
            }
        },
        methods: {
            loadDocuments() {

            }
        }

    }
</script>
<template> 
    <li class="list-group-item d-flex justify-content-between lh-sm">
        <div>
        <a hidden>{{id}}</a>
        <h6 class="my-0">{{ typeEstate }}</h6>
        <small class="text-muted">{{ address }}</small>
        </div>
        <span class="text-muted">
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a :class="[ isActive ? active : inactive]" class="btn-sm">{{ (isActive) ? 'EDITAR': 'INACTIVO'}}</a>
                <a class="btn btn-danger btn-sm btn-block" @click="loadDocuments(id)">DOCUMENTOS</a>
            </div>
        </span>
    </li>
</template>