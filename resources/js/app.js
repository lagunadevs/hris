
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue);

import VueEloquent from 'vue-eloquent';
Vue.use(VueEloquent);

import VueSweetAlert from 'vue-sweetalert'
Vue.use(VueSweetAlert)

import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

import VueSweetalert2 from 'vue-sweetalert2';
Vue.use(VueSweetalert2);

import MenuIcon from "vue-material-design-icons/Menu.vue"
Vue.component("menu-icon", MenuIcon)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

import router from './routes';
import store from './store';
import components from './components/components';

import { apiHost } from './config'


import 'bootstrap'; 
import 'bootstrap/dist/css/bootstrap.min.css';



const app = new Vue({
	
    el: '#app',
    router,
    store,
    apiHost
   
});
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const router = new VueRouter({ mode: 'history'});
// const app = new Vue(Vue.util.extend({ router })).$mount('#app');
