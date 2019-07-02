<template>
    <div>
        <div class="food" v-for="food in foods">
            {{food}}
        </div>
    </div>
</template>

<script>
    export default {
        name: 'FoodDrawer',
        props: {
            foods: {
                default: []
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>
