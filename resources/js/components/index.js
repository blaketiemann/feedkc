import Vue from 'vue'

/**
 * Components
 */
Vue.component('food-card', require('./FoodCard'))
Vue.component('foods', require('./Foods'))

/**
 * Forms
 */
Vue.component('cart-form', require('./forms/CartForm'))
Vue.component('donate-form', require('./forms/DonateForm'))
Vue.component('login-form', require('./forms/LoginForm'))
