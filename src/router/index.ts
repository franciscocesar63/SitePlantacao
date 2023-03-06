import Vue from 'vue'
import VueRouter, { RouteConfig } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import QuemSomos from '../views/QuemSomos.vue'
import OndeEstamos from '../views/OndeEstamos.vue'
import CuidadoPastoral from '../views/CuidadoPastoral.vue'
import SejaParceiro from '../views/SejaParceiro.vue'
import Visitante from '../views/Visitante.vue'

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
    component: QuemSomos
  },
  {
    path: '/onde',
    name: 'onde',
    component: OndeEstamos
  },
  {
    path: '/cuidado',
    name: 'cuidado',
    component: CuidadoPastoral
  },
  {
    path: '/parceiro',
    name: 'parceiro',
    component: SejaParceiro
  },
  {
    path: '/visitante',
    name: 'visitante',
    component: Visitante
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
