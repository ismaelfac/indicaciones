<script>
    export default {
        name: 'ListContract',
        props: [ 'id','isActive','asegurable', 'domus'],
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
        <h6 class="my-0">{{ id }}</h6>
        <small class="text-muted">Asegurable{{ asegurable }} | Domus {{ domus }}</small>
        </div>
        <span class="text-muted"><a href="#" :class="[ isActive ? active : inactive]">{{ (isActive) ? 'COMPLETADO': 'COMPLETAR'}}</a></span>
    </li>
</template>