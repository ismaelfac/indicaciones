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
        <h6 class="my-0">COD DOMUS: {{ domus }}</h6>
        </div>
        <span class="text-muted">
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="#" :class="[ isActive ? active : inactive]" class="btn-sm">{{ (isActive) ? 'EDITAR': 'INACTIVO'}}</a>
            </div>
        </span>
    </li>
</template>