import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter)

import Meta from 'vue-meta';
Vue.use(Meta)

const router = new VueRouter({
  routes: [
      {
        path:'/home',
        name: 'home',
        component: require('./pages/Helloworld.vue')
      },
      {
        path:'/about',
        name: 'about',
        component: require('./pages/About.vue')
      }
  ],
  mode: process.env.MIX_BROWSER_MODE,
});

export default router
