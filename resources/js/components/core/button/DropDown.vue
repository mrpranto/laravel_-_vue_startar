<template>
    <button type="button" :class="buttonClass" data-toggle="dropdown">
        {{ title }}
        <app-icon :icon-class="'btn-icon-append'" name="chevron-down"/>
    </button>
</template>

<script>
export default {
    name: "DropDown",
    props:{
        title:{
          type:String,
          default: "Action"
        },
        buttonClass:{
            type:String,
            default:"btn btn-outline-dark btn-icon-text mb-2 mb-md-0"
        }
    },
}
</script>

<style scoped>

</style>
