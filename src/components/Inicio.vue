<template>
  <div class="hello">
    <!-- <img src="../assets/atencao.png" width="5%" /><br> -->
    <img alt="Vue logo" src="../assets/logo.png" width="20%">
    <h1 class="mt-3">{{ msg }}</h1>
    <p class="">
      colocar umt texto aqui redirecionando para o formulário de inscrição
    </p>
    
    
    <b-link class="link-success fs-5" to="/formulario">Acesse nosso formulário</b-link>

  </div>
</template>

<script lang="ts">
import Vue from 'vue';

export default Vue.extend({
  name: 'Inicio',
  props: {
    msg: String,
  },
}
);
</script>

<style scoped>
h1{
  font-weight: bold;
}
</style>
