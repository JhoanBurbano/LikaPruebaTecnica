<template>
  <FlagContact class="d-none d-xl-flex"/>
  <main-navbar class="sticky-top"/>
  <router-view />
  <footer-marks/>
</template>

<script>

import MainNavbar from './components/MainNavbar.vue'
import FlagContact from './components/includes/FlagContact.vue'
import FooterMarks from './components/includes/FooterMarks.vue';
export default {
  name: "App",
  components: {
    MainNavbar,
    FlagContact,
    FooterMarks
  }
};
</script>

<style lang="stylus">
#app 
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  
</style>