import axios from 'axios'

export default {

    mounted() {
        if(typeof this.food === 'undefined')
            error('FoodMixin requires food variable to be defined')
    },

    methods:
    {
        requestFood(amount) {
            this.food.quantity_requested = amount
            $store.commit('addToCart', this.food)
        },
        deleteFood() {
            this.show = false
            axios.delete(`/donation/${this.food.id}`)
        }
    }

}
