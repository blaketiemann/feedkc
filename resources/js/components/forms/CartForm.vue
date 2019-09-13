<template>
    <md-dialog :md-active.sync="$store.state.showCart">

        <md-progress-bar md-mode="indeterminate" v-if="form.sending" />

        <md-dialog-title>Confirm Request</md-dialog-title>

        <form novalidate @submit.prevent="addFood">

            <md-dialog-content>
                <md-table v-model="$store.state.cart" md-card @md-selected="onSelect">

<!--                    <md-table-toolbar slot="md-table-alternate-header" slot-scope="{ count }">-->
<!--                        <div class="md-toolbar-section-start">{{ getAlternateLabel(count) }}</div>-->

<!--                        <div class="md-toolbar-section-end">-->
<!--                            <md-button class="md-icon-button">-->
<!--                                <md-icon>delete</md-icon>-->
<!--                            </md-button>-->
<!--                        </div>-->
<!--                    </md-table-toolbar>-->

                    <md-table-row slot="md-table-row" slot-scope="{ item }" :md-disabled="item.name.includes('Stave')" md-selectable="multiple" md-auto-select>
                        <md-table-cell md-label="Name" >{{ item.name }}</md-table-cell>
                        <md-table-cell md-label="Quantity" >{{ item.quantity_amount }}</md-table-cell>
                        <md-table-cell md-label="Requested">{{ item.quantity_requested }}</md-table-cell>
                    </md-table-row>
                </md-table>

<!--                <div class="md-layout md-gutter" v-if="!emptyCart">-->
<!--                        <md-table>-->
<!--                            <md-table-row>-->
<!--                                <md-table-head>Delete</md-table-head>-->
<!--                                <md-table-head>Name</md-table-head>-->
<!--                                <md-table-head>Total Amount</md-table-head>-->
<!--                                <md-table-head>Requested Amount</md-table-head>-->
<!--                            </md-table-row>-->

<!--                            <md-table-row-->
<!--                                v-for="food in $store.state.cart"-->
<!--                                :key="food.id"-->
<!--                                slot="md-table-row"-->
<!--                                md-selectable="multiple"-->
<!--                                md-auto-select-->
<!--                            >-->
<!--                                <md-table-cell @click="$store.commit('removeFromCart', food.id)"></md-table-cell>-->
<!--                                <md-table-cell>{{food.name}}</md-table-cell>-->
<!--                                <md-table-cell>{{food.quantity_amount}} {{food.quantityUnits}}</md-table-cell>-->
<!--                                <md-table-cell>-->
<!--                                </md-table-cell>-->
<!--                            </md-table-row>-->
<!--                        </md-table>-->
<!--                </div>-->
<!--                <h6 v-if="emptyCart" class="text-center">No items in cart</h6>-->
            </md-dialog-content>

            <md-dialog-actions>
                <md-button @click="close()" class="md-primary" :disabled="form.sending">
                    Close
                </md-button>
                <md-button v-if="!emptyCart" @click="requestSelected" type="submit" class="md-primary" :disabled="form.sending">
                    Request
                </md-button>
            </md-dialog-actions>

        </form>
    </md-dialog>
</template>

<script>
    import Form from '../../mixins/Form'

    export default {
        props: [],

        data()
        {
            return {
                message: '',

                request: (food_id, request_amount) => {
                    return {
                        food_id,
                        request_amount
                    }
                },

                form: new Form({
                    requests: [],
                }),

                selected: []
            }
        },

        methods:
        {
            close()
            {
                this.$store.dispatch('toggleCart')
                this.form.reset()
            },
            go($e)
            {
                console.log($e)
            },
            addFood()
            {
                this.form.post('/donate')
            },
            onSelect (items) {
                this.selected = items
            },
            requestSelected()
            {
                alert('request complete')
            }
        },

        computed:
        {
            emptyCart() {
                return this.$store.state.cart.length === 0
            }
        }
    }
</script>
