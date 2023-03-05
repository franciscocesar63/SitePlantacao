<template>
  <div class="hello">
    <!-- <img src="../assets/atencao.png" width="5%" /><br> -->
    <img alt="Vue logo" src="../assets/logo.png" width="20%">

    <h1>{{ msg }}</h1>
    <p>
      colocar umt texto aqui redirecionando para o formulário de inscrição
    </p>
    
    
    <b-link ><router-link to="formulario" class="link-sucess">Acesse nosso formulário</router-link></b-link>
    <b-button variant="danger">Button</b-button>

  </div>
</template>

<script lang="ts">
import Vue from 'vue';

export default Vue.extend({
  name: 'HelloWorld',
  props: {
    msg: String,
  },
}
);
</script>

<style scoped>
.hello{
  color: aliceblue;
}

</style>
