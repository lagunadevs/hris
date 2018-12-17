import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter)

import Meta from 'vue-meta';
Vue.use(Meta)

const router = new VueRouter({
  routes: [
      {
        path:'/',
        name: 'home',
        component: require('./pages/Landing.vue')
      },
      {
        path:'/about',
        name: 'about',
        component: require('./pages/About.vue')
      },
      {
        path:'/companies',
        name: 'companies',
        component: require('./pages/Companies.vue')
      }
  ],
  mode: process.env.MIX_BROWSER_MODE,
});

export default router
