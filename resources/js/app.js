
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



/**
 * Vue Setup
 */


window.Vue = require('vue');

// Vue Material
import VueMaterial from 'vue-material'
Vue.use(VueMaterial)
import 'vue-material/dist/vue-material.min.css'
import 'vue-material/dist/theme/default.css'


/**
 * Custom Vue Components
 */
import './components'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    data: {
        showDrawer: false,
        showDialog: false,
        cart: []
    },
});
