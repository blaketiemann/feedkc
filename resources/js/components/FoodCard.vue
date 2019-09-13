<template>
    <md-card v-if="show">
        <md-card-media-cover md-text-scrim>
            <md-card-media md-ratio="16:9">
                <img src="/images/chicken.jpg" alt="Skyscraper">
            </md-card-media>

            <md-card-area>
                <md-card-header>
                    <span class="md-title">{{food.name}}</span>
                    <span class="md-subhead">{{food.quantity_amount}} {{food.quantity_unit}}</span>
                    <span class="md-subhead">Expires: {{ expiresOn() }}</span>
                </md-card-header>
            </md-card-area>
        </md-card-media-cover>
        <md-card-expand>
            <md-card-actions md-alignment="space-between">
                <div>
                    <md-button v-if="requestable" @click="requestFood(quantity_requested)">
                        To Cart
                    </md-button>
                    <md-button v-if="deleteable" @click="deleteFood">
                        Delete
                    </md-button>
                </div>

                <md-card-expand-trigger>
                    <md-button class="md-icon-button">
                        <md-icon>keyboard_arrow_down</md-icon>
                    </md-button>
                </md-card-expand-trigger>
            </md-card-actions>

            <md-card-expand-content>
                <md-card-content>
                    {{food.message}}
                </md-card-content>
            </md-card-expand-content>
        </md-card-expand>
    </md-card>
</template>

<script>
    import FoodMixin from '../mixins/Food.js'

    export default {
        name: 'FoodCard',
        mixins: [FoodMixin],

        props: {
            food: {required: true},
            requestable: {default: false},
            deleteable: {default: false}
        },

        data() {
            return {
                quantity_requested: 0,
                show: true
            }
        },

        methods: {
            expiresOn()
            {
                return moment(this.food.expires_on).format('MM/DD/YYYY')
            }
        }
    }
</script>

<style lang="scss">

</style>
