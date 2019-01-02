import Vue from 'vue';

// Headful - for setting head tags
// import vueHeadful from 'vue-headful';
// Vue.component('vue-headful', vueHeadful);

Vue.component('example-component', require('./../components/ExampleComponent.vue'));
Vue.component('topbar', require('./../components/Topbar.vue'));
Vue.component('sidebar', require('./../components/Sidebar.vue'));
Vue.component('app', require('./../pages/App.vue'));
Vue.component('modal', require('./../components/Modal.vue'));
Vue.component('loader', require('./../components/Loader.vue'));