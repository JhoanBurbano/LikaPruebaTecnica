<template>
  <header>
    <nav class="d-flex flex-column flex-xl-row py-2 py-xl-0">
      <div class="left d-none d-xl-flex">
        <a href="/" class="logo">
          <img src="../assets/LaikaMascotas.svg" alt="logo" />
          <p>Laika</p>
        </a>
        <div class="search">
          <input
            type="text"
            placeholder="Encuentra lo mejor para tu mascota..."
          />
          <button><img src="../assets/search_icon_mc.svg" alt="" /></button>
        </div>
        <select class="location" name="" id="">
          <option defaultValue="BOG" selected><b>🇨🇴</b> BOG</option>
          <option defaultValue="USA" ><b>🇺🇸</b> USA</option>
          <option defaultValue="MEX" ><b>🇲🇽</b> MEX</option>
          <option defaultValue="CL" ><b>🇨🇱</b> CL</option>
        </select>
      </div>
      <user-section class="right d-none d-xl-flex list-unstyled m-0"/>
      <div class="d-xl-none d-flex justify-content-between align-items-center mb-2">
        <div class="location-container d-flex justify-content-evenly w-25 align-items-center">
          <drop-down-menu />
        <select class="location bg-transparent border-0 text-white " name="" id="">
          <option defaultValue="BOG" selected><b>🇨🇴</b> BOG</option>
          <option defaultValue="USA" ><b>🇺🇸</b> USA</option>
          <option defaultValue="MEX" ><b>🇲🇽</b> MEX</option>
          <option defaultValue="CL" ><b>🇨🇱</b> CL</option>
        </select>
        </div>
        <a href="/" class="logo d-none d-sm-block">
          <img src="../assets/LaikaMascotas.svg" alt="logo" />
        </a>
        <user-section class="user-section right d-flex w-25 m-0"/>
      </div>
      <div class="d-xl-none position relative px-2">
        <div class="search w-100 position-relative b-none">
          <input
            class="w-100 rounded  form-control shadow-none border-0 pr-5"
            type="text"
            placeholder="Encuentra lo mejor para tu mascota..."
            style="box-shadow: none!important;"
          />
          <button class="border-0 bg-transparent position-absolute" style="right:1%; top:15%"><img src="../assets/search_icon_mc.svg" alt=""/></button>
        </div>
      </div>
    </nav>
    <ul class="bottom bg-white d-none d-xl-flex">
      <li>
        <mis-menusitos type="dog" />
      </li>
      <li>
        <mis-menusitos type="cat"/>
      </li>
      <li>
        <mis-menusitos type="offers"/>
      </li>
      <li>
        <mis-menusitos type="services"/>
      </li>
      <li>
        <router-link to="/about"><p>Blog</p></router-link>
      </li>
      <li>
        <a href="">
          <img src="../assets/membership_logo.png" alt="" class="membership w-lg-50" />
        </a>
      </li>
    </ul>
  </header>
</template>

<script setup>
import MisMenusitos from "./includes/MisMenusitos.vue";
import UserSection from "./includes/UserSection.vue"
import DropDownMenu from "./includes/DropDownMenu.vue"
</script>

<style lang="stylus" scoped>

@media (min-width: 300px) 
  .d-sm-block
    display block!important
    @media (max-width: 400px)
      img
        width 3ch
    
  @media (max-width: 400px)
    .location-container
      width auto
      margin-left .2rem
    .location
      font-size: .7rem
    .user-section
      transform scale(.7)

header {
  width: 100%;
  font-weight: bold;
  color: var(--white);
}

nav {
  display: flex;
  background: var(--purple-b);
  height: 100%;
  position: sticky;
}

nav .left .logo {
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

nav .left .logo img {
  height: 50%;
}

nav .left .logo p {
  text-decoration: none;
  color: var(--white);
}

nav .left {
  width: 65%;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
}

nav .left .search {
  width: 60%;
  position: relative;
  padding: 0.2rem;
}

nav .left .search input {
  width: 100%;
  border-radius: 5px;
  outline: none;
  border: none;
  line-height: 200%;
  padding: 0.2rem 2rem 0.2rem 0.5rem;
  font-size: 1rem;
}

nav .left .search button {
  position: absolute;
  top: 0;
  right: 0.5rem;
  height: 100%;
  border: none;
  outline: none;
  background: transparent;
  cursor: pointer;
}

nav .left select {
  background: transparent;
  border-radius: 5px;
  outline: none;
  border: none;
  line-height: 200%;
  font-weight: bold;
  color: var(--white);
  font-size: 1.1rem;
  letter-spacing: .3ch;
}

nav .left select option {
  color: var(--black);
}

nav .right {
  width: 35%;
  display: flex;
  justify-content: center;
}

nav .right li {
  height: 100%;
  list-style: none;
  display: flex;
  align-items: center;
  margin-left: 2rem;
}

nav .right li .cart {
  position: relative;
  text-decoration: none;
  color: var(--white);
}

nav .right li span {
  position: absolute;
  top: 0;
  right: -1ch;
  font-size: 0.7rem;
  background: var(--red);
  width: 2ch;
  height: 2ch;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 1ch;
}

nav .right li span p {
  /* height: 1ch; */
  /* font-size: .6rem; */
  padding-top: 4px;
}

.bottom {
  position: sticky;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0 0 0.5rem #00000034;
  height: 4ch;
}

.bottom li {
  padding: 0.5rem 2rem;
  border-width: 1px;
  border-style: solid;
  border-color: transparent #6664 transparent transparent;
  cursor: pointer;
}

.bottom li:last-child {
  padding: 0.5rem 2rem;
  border: none;
}

.bottom .dropdown .boton {
  border: none;
  background: transparent;
  outline: none;
}

.bottom li a {
  height: 60%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  text-decoration: none;
}

.bottom li a img {
  width: 12%;
}

.bottom li a.active {
  border-bottom: 2px solid var(--purple-b);
  font-weight: bold;
}

.bottom li a p {
  color: var(--purple-b);
  font-weight: lighter;
}

.bottom li a .membership {
  width: 10vw;
}

header p {
  margin: 0 !important;
}

.dropdown-toggle:hover + .dropdown-menu {
  display: block !important;
}

.text-magenta {
  color: var(--purple-b) !important;
}

.text-magenta:hover {
  color: indigo;
}
</style>
