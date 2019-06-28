
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Vue from 'vue'
import VueGoogleCharts from 'vue-google-charts'

Vue.use(VueGoogleCharts)
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('spending-chart', require('./components/SpendingChart.vue'));
Vue.component('investment-chart', require('./components/InvestmentChart.vue'));
Vue.component('sim-future', require('./components/SimFuture.vue'));
Vue.component('sim-monthly', require('./components/SimMonthly.vue'));

const app = new Vue({
    el: '#app'
});
