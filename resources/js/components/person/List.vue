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
        <h6 class="my-0">{{ typeParticipant }} del {{ legalPersonOf }} </h6>
        <small class="text-muted">{{ names }} </small>
        </div>
        <span class="text-muted"><a href="#" :class="[ isActive ? active : inactive]">{{ (isActive) ? 'COMPLETADO': 'COMPLETAR'}}</a></span>
    </li>
</template>