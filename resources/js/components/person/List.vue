<script>
export default {
    name: 'ListPeople',
    props: ['id','numParticipants','typeParticipant','typePerson','legalPersonOf','names', 'bussinessName', 'isActive'],
    data() {
        return{
            active: 'btn btn-success btn-sm',
            inactive: 'btn btn-danger btn-sm'
        }
    },
    methods: {
        
    }

}
</script>
<template> 
    <li class="list-group-item d-flex justify-content-between lh-sm">
        <div>
            <h6 class="my-0">{{ typeParticipant === 'REPRESENTANTE LEGAL' ? `R LEGAL del ${legalPersonOf}` : typeParticipant }} </h6>
            <small class="text-muted">{{ names }} </small>
        </div>
        <span class="text-muted">
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="#" :class="[ isActive ? active : inactive]" class="btn-sm">{{ (isActive) ? 'EDITAR': 'INACTIVO'}}</a>
            <a href="#" class="btn btn-danger btn-sm">DOCUMENTOS</a>
            </div>
        </span>
    </li>
</template>