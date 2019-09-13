<template>
    <md-dialog :md-active.sync="$store.state.showDialog">

        <md-progress-bar md-mode="indeterminate" v-if="form.sending" />

        <md-dialog-title>Food Donation</md-dialog-title>

        <form novalidate @submit.prevent="addFood">

            <md-dialog-content>
                    <div class="md-layout md-gutter">
                        <div class="md-layout-item md-size-50 md-small-size-100">
                            <md-field>
                                <label for="name">
                                    Food Name
                                </label>
                                <md-input name="name" id="name" v-model="form.name" :disabled="form.sending" />
                            </md-field>
                        </div>

                        <div class="md-layout-item md-size-50 md-small-size-100">
                            <md-field>
                                <label for="category">
                                    Category
                                </label>
                                <md-select name='category' id='category' v-model="form.category" :disabled="form.sending" >
                                    <md-option v-for="(category, index) in categories" :key="index" :value="category">{{ category }}</md-option>
                                </md-select>
                            </md-field>
                        </div>

                        <div class="md-layout-item md-size-50 md-small-size-100">
                            <md-field>
                                <label for="quantity_amount">
                                    Quantity
                                </label>
                                <md-input name="quantity_amount" id="quantity_amount" v-model="form.quantity_amount" :disabled="form.sending" />
                            </md-field>
                        </div>

                        <div class="md-layout-item md-size-50 md-small-size-100">
                            <md-field>
                                <label for="quantity_unit">
                                    Units
                                </label>
                                <md-select name='quantity_unit' id='quantity_unit' v-model="form.quantity_unit" :disabled="form.sending" >
                                    <md-option v-for="(quantity_unit, index) in quantityUnits" :key="index" :value="quantity_unit">{{ quantity_unit }}</md-option>
                                </md-select>
                            </md-field>
                        </div>

                        <div class="md-layout-item md-size-50 md-small-size-100">
                            <md-datepicker v-model="form.expires_on" placeholder="0000-00-00">
                                <label for="expires_on">
                                    Expires On
                                </label>
                            </md-datepicker>
                        </div>

                        <div class="md-layout-item md-size-50 md-small-size-100">
                            <md-field>
                                <label for="business">
                                    Business
                                </label>
                                <md-input name="business" id="business" v-model="form.business" :disabled="form.sending" />
                            </md-field>
                        </div>

                        <div class="md-layout-item md-size-100">
                            <md-field>
                                <label for="message">
                                    Pick-up Information
                                </label>
                                <md-textarea name="message" id="message" v-model="form.message" :disabled="form.sending" />
                            </md-field>
                        </div>
                    </div>
            </md-dialog-content>

            <md-dialog-actions>
                <md-button @click="close()" class="md-primary" :disabled="form.sending">
                    Close
                </md-button>
                <md-button type="submit" class="md-primary" :disabled="form.sending">
                    Add
                </md-button>
            </md-dialog-actions>

        </form>
    </md-dialog>
</template>

<script>
    import Form from '../../mixins/Form'

    export default {
        props: [
            'categories',
            'quantityUnits'
        ],

        data()
        {
            return {
                message: '',

                form: new Form({
                    name: '',
                    business: 'Price Chopper',
                    category: 'carbohydrate',
                    expires_on: new Date(),
                    quantity_amount: '',
                    quantity_unit: 'loaves',
                    message: ''
                })
            }
        },

        methods:
        {
            close()
            {
                this.$store.dispatch('toggleDialog')
                this.form.reset()
            },
            addFood()
            {
                this.form.post('/donate')
            }
        }
    }
</script>
