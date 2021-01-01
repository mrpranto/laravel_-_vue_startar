<template>
    <i :class="iconClass" :data-feather="name"></i>
</template>

<script>
export default {
    name: "Icon",
    props:{
        iconClass:{
            type:String,
            default: "icon-sm btn-icon-prepend"
        },
        name:{
            type:String,
            default: ""
        }

    }
}
</script>

<style scoped>

</style>
