<template>
    <div class="md-layout md-gutter">
<!--        <food-card-->
<!--            v-for="food in foods"-->
<!--            :title="food.name"-->
<!--            class="md-layout-item md-size-100"-->
<!--        />-->
        <!--            class="md-size-30 md-medium-size-45 md-small-size-100"-->

    </div>
</template>

<script>
    import FoodCart from './FoodCard'

    export default {
        props: [foods],
        components: {FoodCart}
    }
</script>

<style lang="scss" scoped>

</style>
