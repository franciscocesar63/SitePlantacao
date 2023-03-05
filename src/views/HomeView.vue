<template>

  <div class="home">
    <Inicio msg="SITE EM CONSTRUÇÃO"/>

  </div>


</template>

<script lang="ts">
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