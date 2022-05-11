<template>
    <Autocomplete
    :source="[{id:1,name:'abc'},{id:2,name:'def'}]">
    </Autocomplete>
</template>
<script>
import Autocomplete from 'vuejs-auto-complete'
export default {
    name: 'autocomplete',
    components: {
        Autocomplete,
    },
}
</script>