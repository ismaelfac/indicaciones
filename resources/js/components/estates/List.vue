<script>
    export default {
        name: 'ListEstate',
        props: [ 'id','isActive','typeEstate', 'address'],
        data() {
            return{
                active: 'btn btn-success btn-sm',
                inactive: 'btn btn-danger btn-sm'
            }
        }

    }
</script>
<template> 
    <li class="list-group-item d-flex justify-content-between lh-sm">
        <div>
        <a href="#" hidden>{{id}}</a>
        <h6 class="my-0">{{ typeEstate }}</h6>
        <small class="text-muted">{{ address }}</small>
        </div>
        <span class="text-muted"><a href="#" :class="[ isActive ? active : inactive]">{{ (isActive) ? 'COMPLETADO': 'COMPLETAR'}}</a></span>
    </li>
</template>