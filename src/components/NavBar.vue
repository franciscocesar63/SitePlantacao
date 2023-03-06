<template>
  <div class="mb-5">
    <div>
      <b-navbar type="dark" variant="dark">
        <b-navbar-nav>
          <b-nav-item to="/"><img src="@/assets/logoArvore.png" width="30px"></b-nav-item>
          <b-nav-item to="/">Início</b-nav-item>
          <b-nav-item to="/sobre">Quem Somos</b-nav-item>
          <b-nav-item to="/onde">Onde Estamos</b-nav-item>
          <b-nav-item to="/cuidado">Cuidado Pastoral</b-nav-item>
          <b-nav-item to="/parceiro">Seja um Parceiro</b-nav-item>
        </b-navbar-nav>
      </b-navbar>
    </div>
  </div>
</template>



<script lang="ts">
import Vue from 'vue';
export default Vue.extend({
  name: 'NavBar',
  props: {
    msg: String,
  },
}
);
</script>
<style></style>