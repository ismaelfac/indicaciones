<script>
export default {
    name: 'ListPeople',
    props: ['id','numParticipants','typePerson','names', 'bussinessName', 'state'],
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
        <h6 class="my-0">{{ typePerson }}</h6>
        <small class="text-muted">{{ (names) ? names : bussinessName }}</small>
        </div>
        <span class="text-muted"><a href="#" :class="[ state ? active : inactive]">{{ (state) ? 'COMPLETADO': 'COMPLETAR'}}</a></span>
    </li>
</template>