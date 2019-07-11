<template>
    <md-dialog :md-active.sync="showForm">

        <md-dialog-title>Food Donation</md-dialog-title>

        <form novalidate @submit.prevent="form.post('/donate')" class="md-layout">

                <div class="md-layout md-gutter">
                    <div class="md-layout-item md-small-size-100">
                        <md-field>
                            <label for="name">Food Name</label>
                            <md-input name="name" id="name" v-model="form.name" :disabled="sending" />
                        </md-field>
                    </div>

                    <div class="md-layout-item md-small-size-100">
                        <md-field>
                            <label for="category">Category</label>
                            <md-input name="category" id="category" v-model="form.category" :disabled="sending" />
                        </md-field>
                    </div>

                    <div class="md-layout-item md-small-size-100">
                        <md-field>
                            <label for="expires_on">Expires On</label>
                            <md-input name="expires_on" id="expires_on" v-model="form.expires_on" :disabled="sending" />
                        </md-field>
                    </div>

                    <div class="md-layout-item md-small-size-100">
                        <md-field>
                            <label for="quantity_amount">Quantity</label>
                            <md-input name="quantity_amount" id="quantity_amount" v-model="form.quantity_amount" :disabled="sending" />
                        </md-field>
                    </div>

                    <div class="md-layout-item md-small-size-100">
                        <md-field>
                            <label for="quantity_unit">Units</label>
                            <md-input name="quantity_unit" id="quantity_unit" v-model="form.quantity_unit" :disabled="sending" />
                        </md-field>
                    </div>

                    <div class="md-layout-item md-small-size-100">
                        <md-field>
                            <label for="message">Message</label>
                            <md-input name="message" id="message" v-model="form.message" :disabled="sending" />
                        </md-field>
                    </div>
                </div>

                <md-progress-bar md-mode="indeterminate" v-if="sending" />

                <md-dialog-actions>
                    <md-button type="submit" class="md-primary" :disabled="sending">
                        Add Donation
                    </md-button>
                </md-dialog-actions>

        </form>

    </md-dialog>
</template>

<script>
    import Form from '../../mixins/Form'

    export default {
        props: ['showForm'],

        data()
        {
            return {
                sending: false,
                message: '',

                form: new Form({
                    name: 'Chicken',
                    business: 'Plaza',
                    category: 'Protein',
                    expires_on: moment(),
                    quantity_amount: '10',
                    quantity_unit: 'pounds',
                    message: 'Go there'
                })
            }
        }
    }
</script>
