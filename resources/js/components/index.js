import Vue from 'vue'

import FoodMixin from '../mixins/Food.js'

/**
 * Components
 */
Vue.component('food-card', require('./FoodCard'))
Vue.component('donating-foods', require('./Foods'))

/**
 * Forms
 */
Vue.component('cart-form', require('./forms/CartForm'))
Vue.component('donate-form', require('./forms/DonateForm'))
Vue.component('login-form', require('./forms/LoginForm'))
