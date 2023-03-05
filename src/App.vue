<template>
  <div id="app">
    <nav>
      <router-link to="/">Início</router-link> |
      <router-link to="/sobre">Quem Somos</router-link> |
      <router-link to="/onde">Onde Estamos</router-link> |
      <router-link to="/cuidado">Cuidado Pastoral</router-link> |
      <router-link to="/parceiro">Seja um Parceiro</router-link>
    </nav>
    <router-view/>
  </div>
</template>

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
