<template>
    <div class="md-layout md-gutter">
        <food-card
            v-for="food in foods"
            :food="food"
            :key="food.id"
            class="md-layout-item md-xsmall-size-100 md-small-size-33 md-medium-size-25 md-large-size-20 md-xlarge-size-20"
            style="margin: 10px; padding: 0"
            :requestable="requestable"
            :deleteable="deleteable"
        />
    </div>
</template>

<script>
    import FoodCard from './FoodCard'

    export default {
        props: {
            foods: {required: true},
            requestable: {default: false},
            deleteable: {default: false}
        },
        components: {FoodCard}
    }
</script>

<style lang="scss" scoped>

</style>
