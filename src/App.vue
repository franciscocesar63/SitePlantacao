<template>
  <div id="app">
    <Navbar msg="SITE EM CONSTRUÇÃO" />
    <!-- <nav>
      <router-link to="/">Início</router-link> |
      <router-link to="/sobre">Quem Somos</router-link> |
      <router-link to="/onde">Onde Estamos</router-link> |
      <router-link to="/cuidado">Cuidado Pastoral</router-link> |
      <router-link to="/parceiro">Seja um Parceiro</router-link>
    </nav> -->
    <router-view />
  </div>
</template>

<script lang="ts">
import Vue from 'vue';
import Navbar from '@/components/NavBar.vue'; // @ is an alias to /src

export default Vue.extend(  
{
    name: 'App',
    components: {
      Navbar,
    },
  });
  document.title = "Igreja Batista Esperança";
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}

nav a.router-link-exact-active {
  color: #42b983;
}
</style>
