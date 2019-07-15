<template>
    <md-card md-with-hover>
        <md-ripple>

            <md-card-header>
                <div class="md-title">
                    {{title}}
                </div>
            </md-card-header>

            <md-card-content>

            </md-card-content>

<!--            <md-card-actions>-->
<!--                <md-button>-->
<!--                    -->
<!--                </md-button>-->
<!--            </md-card-actions>-->
        </md-ripple>
    </md-card>
</template>

<script>
    export default {
        name: 'FoodCard',
        props: ['title'],

        mounted()
        {

        }
    }
</script>

<style lang="scss">

</style>
