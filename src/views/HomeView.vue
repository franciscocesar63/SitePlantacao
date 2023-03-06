<template>

  <div class="home">
    <Inicio msg="SITE EM CONSTRUÇÃO"/>

  </div>


</template>

<script lang="ts">
let urlParams = new URLSearchParams(window.location.search);

if(urlParams.has('visitante')){
  console.log("veio do formulario");
  window.location.href = 'https://esperancanvp.com.br/visitante';
}
import Vue from 'vue';
import Inicio from '@/components/Inicio.vue'; // @ is an alias to /src
export default Vue.extend(
{
  name: 'HomeView',
  components: {
    Inicio,
  },
});


</script>

<style>
body{
  background-color: black;
}
</style>