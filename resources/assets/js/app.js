
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
import GChart from 'vue-google-charts'
Vue.use(GChart)

Vue.component( 'example-component', require( './components/ExampleComponent.vue' ) );
Vue.component('spending', require('./components/Spending.vue'));
Vue.component( 'investment', require( './components/Investment.vue' ) );
Vue.component('sim-future', require('./components/SimFuture.vue'));
Vue.component('sim-monthly', require('./components/SimMonthly.vue'));
Vue.component( 'sim-period', require( './components/SimPeriod.vue' ) );
// 数値をカンマ区切りで表示
Vue.filter( 'localeNum', function ( val )
{
    return Number(val).toLocaleString();
} );

const app = new Vue({
    el: '#app',
});
