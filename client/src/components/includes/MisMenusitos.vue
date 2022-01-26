<template>
<div class="dropdown">
  <template v-if="type!=='services'">
    <button
            v-if="type==='dog'"
            class="boton dropdown-toggle d-flex align-items-center"
            type="button"
            id="dropdownMenuButton"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <router-link to="/" class="active d-flex">
              <img src="../../assets/dog_mc.svg" alt="" />
              <p class="m-0">Compra para perro</p>
            </router-link>
          </button>

          
          <button
            v-if="type==='cat'"
            class="boton dropdown-toggle d-flex align-items-center"
            type="button"
            id="dropdownMenuButton"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <router-link to="/">
              <img src="../../assets/cat_mc_s.svg" alt="" />
              <p class="m-0">Compra para gato</p>
            </router-link>
          </button> 

           <button
            v-if="type==='offers'"
            class="boton dropdown-toggle d-flex align-items-center"
            type="button"
            id="dropdownMenuButton"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <router-link to="/">
              <p class="m-0">Ofertas</p>
            </router-link>
          </button> 

          <div
            class="dropdown-menu"
            id="shw-mn"
            aria-labelledby="dropdownMenuButton"
          >
            <div class="d-flex">
              <div>
                <p class="dropdown-item" href="#"> <img class="small" src="../../assets/categories/food.png" alt=""> Alimento</p>
                <p v-if="type==='cat'" class="dropdown-item" href="#"> <img class="small" src="../../assets/categories/sand.png" alt=""> Arenas</p>
                <p class="dropdown-item" href="#"> <img class="small" src="../../assets/categories/snacks.png" alt=""> Snacks</p>
                <p class="dropdown-item" href="#"> <img class="small" src="../../assets/categories/pharmacy.png" alt=""> Farmapet</p>
                <p class="dropdown-item" href="#"> <img class="small" src="../../assets/categories/shampoo.png" alt=""> Cuidado e Higiene</p>
                <p class="dropdown-item" href="#"> <img class="small" src="../../assets/categories/toys.png" alt=""> Juguetes</p>
                <p class="dropdown-item" href="#"> <img class="small" src="../../assets/categories/things.png" alt=""> Accesorios</p>
                <p v-if="type !== 'offers'" class="dropdown-item" href="#"><img class="small" src="../../assets/categories/petlovers.png" alt=""> Para Petlovers</p>
              </div>
              <div v-if="type==='dog'">
                <img src="../../assets/baner_menu_dog.png" alt="" />
              </div>
              <div v-if="type==='cat'">
                <img src="../../assets/cat_pretty.jpeg" alt="" />
              </div>
            </div>
          </div>
  </template>
  <template v-if="type==='services'">
    <button
            class="boton dropdown-toggle d-flex align-items-center"
            type="button"
            id="dropdownMenuButton"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <router-link to="/about"><p class="m-0">Servicios</p></router-link>
          </button>
          <div
            class="dropdown-menu"
            id="shw-mn"
            aria-labelledby="dropdownMenuButton"
          >
            <div class="d-flex flex-column">
              <div>
                <img src="../../assets/services_pet.jpeg" alt="" />
              </div>
              <div class="dropdown-divider"></div>
              <div>
                <router-link to="/" class="dropdown-item text-magenta" href="#"
                  >Ver todos los servicios</router-link
                >
              </div>
            </div>
          </div>
  </template>
</div>
</template>
 
<script> 
 
export default {
  props: ['type']
}




</script>

<style lang="stylus" scoped>
.bottom 
  li
    .dropdown
      .boton 
        border: none;
        background: transparent;
        outline: none;
        a 
          height: 60%;
          display: flex;
          justify-content: space-between;
          align-items: center;
          text-decoration: none;
          p
            text-decoration: none; 
            color: var(--purple-b);
            font-weight: lighter;

          img
            width: 12%;
        .active 
          border-bottom: 2px solid var(--purple-b);
          font-weight: bold;

      .dropdown-toggle:hover + .dropdown-menu 
        display: block !important;

      .dropdown-menu
        p
          display flex
          align-items center
          img.small
            width 2ch
            margin-right 1ch
      .text-magenta 
        color: var(--purple-b) !important;


      .text-magenta:hover 
        color: var(--indigo)
      .dropdown-menu:hover
        display block

</style>