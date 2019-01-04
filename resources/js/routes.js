import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter)

import Meta from 'vue-meta';
Vue.use(Meta)

const router = new VueRouter({
  routes: [
      {
        path:'/',
        name: 'register',
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
      },
      {
        path:'/dashboard',
        name: 'dashboard',
        component: require('./pages/Dashboard.vue')
      },
      {
        path:'/employees',
        name: 'employees',
        component: require('./pages/employees/index.vue')
      }
  ],
  mode: process.env.MIX_BROWSER_MODE,
});

export default router
