<template>
    <md-dialog :md-active.sync="$store.state.showCart">

        <md-progress-bar md-mode="indeterminate" v-if="form.sending" />

        <md-dialog-title>Confirm Request</md-dialog-title>

        <form novalidate @submit.prevent="requestSelected">

            <md-dialog-content>
                <md-table v-model="$store.state.cart" md-card @md-selected="onSelect">
                    <md-table-row slot="md-table-row" slot-scope="{ item }" :md-disabled="item.name.includes('Stave')" md-selectable="multiple" md-auto-select>
                        <md-table-cell md-label="Name" >{{ item.name }}</md-table-cell>
                        <md-table-cell md-label="Quantity" >{{ item.quantity_amount }}</md-table-cell>
                    </md-table-row>
                </md-table>
            </md-dialog-content>

            <md-dialog-actions>
                <md-button @click="close()" class="md-primary" :disabled="form.sending">
                    Close
                </md-button>
                <md-button v-if="!emptyCart" type="submit" class="md-primary" :disabled="form.sending">
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
                form: new Form({
                    foods: [],
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
            requestSelected()
            {
                this.form.foods = this.selected

                this.form.post('/request')
            },
            onSelect (items) {
                this.selected = items
            },
        },

        computed:
        {
            emptyCart() {
                return this.$store.state.cart.length === 0
            }
        }
    }
</script>
