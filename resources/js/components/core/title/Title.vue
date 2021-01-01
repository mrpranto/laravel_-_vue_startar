<template>
    <h5 class="card-title">{{ title }}</h5>
</template>

<script>
export default {
    name: "Title",
    props: {
        title:{
            type:String,
            default:""
        }
    }
}
</script>

<style scoped>

</style>
