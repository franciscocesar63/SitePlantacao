import Vue from 'vue'
import VueRouter, { RouteConfig } from 'vue-router'
import HomeView from '../views/HomeView.vue'

Vue.use(VueRouter)

const routes: Array<RouteConfig> = [
  {
    path: '/',
    name: 'inicio',
    component: HomeView
  },
  {
    path: '/sobre',
    name: 'sobre',
    component: HomeView
  },
  {
    path: '/onde',
    name: 'onde',
    component: HomeView
  },
  {
    path: '/cuidado',
    name: 'cuidado',
    component: HomeView
  },
  {
    path: '/parceiro',
    name: 'parceiro',
    component: HomeView
  },
  // {
  //   path: '/about',
  //   name: 'about',
  //   component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  // }
]

const router = new VueRouter({
  routes,
  mode: 'history'
})

export default router
