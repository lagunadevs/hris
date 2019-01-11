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
        path:'/departments',
        name: 'departments.index',
        component: require('./pages/departments/index.vue')
      },
      {
        path:'/departments/create',
        name: 'departments.create',
        component: require('./pages/departments/create.vue')
      },
      {
        path:'/departments/edit/:id',
        name: 'departments.edit',
        component: require('./pages/departments/edit.vue')
      },
      {
        path:'/employees',
        name: 'employees',
        component: require('./pages/employees/index.vue')
      },
      {
        path:'/employees/create',
        name: 'create',
        component: require('./pages/employees/create.vue')
      },
      {
        path:'/employees/edit/:employeeId',
        name: 'edit',
        component: require('./pages/employees/edit.vue')
      }
  ],
  mode: process.env.MIX_BROWSER_MODE,
});

export default router
