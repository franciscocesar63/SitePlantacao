<template>

  <div class="home">
    <HelloWorld msg="Site em Construção"/>

  </div>


</template>

<script lang="ts">
import Vue from 'vue';
import HelloWorld from '@/components/HelloWorld.vue'; // @ is an alias to /src

export default Vue.extend(
    
{
  name: 'HomeView',
  components: {
    HelloWorld,
  },
});
</script>
<style>
body{
  background-color: black;
  color: white;
}
</style>