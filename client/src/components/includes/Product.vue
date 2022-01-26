<template>
  <div class="card m-auto">
    <div class="card-top position-relative">
      <div
        class="
          offers
          position-absolute
          top-0
          left-0
          d-flex
          justify-content-end
          w-100
        "
      >
        <div class="off position-relative">
          <img src="https://laika.com.co/assets/star.svg" alt="" />
          <p class="m-0 text-white position-absolute top-0 end-50">10%</p>
        </div>
      </div>
      <div class="img">
        <img :src="img" alt="" width="200" />
      </div>
    </div>
    <div class="card-body">
      <p class="m-0 h5 text-left font-weight-bold text-dark card-name">
        {{ name }}
      </p>
      <div class="stars d-flex">
        <i class="bi bi-star-fill m-0" v-for="star in score"></i>
      </div>
      <div class="prices d-flex align-items-center">
        <p class="h6 mb-0 mr-2">${{ price }}</p>
        <p class="dashed m-0">
          antes:<br /><b>{{ "$" + price_old }}</b>
        </p>
      </div>
      <div class="dropdown-divider"></div>
      <div class="prices d-flex align-items-center">
        <p class="h-100 h6 mb-0 mr-2">${{ price_vip }}</p>
        <div class="d-flex flex-column">
          <img src="../../assets/laikamemeber.svg" alt="" width="120" />
          <button class="btn btn-warning p-0">Adquirela Ya</button>
        </div>
      </div>

      <div class="dropdown-divider"></div>
      <div class="variants d-flex justify-content-evenly">
        <span
          v-for="option in variants"
          class="btn info_bubble text-white"
          >{{ option }}</span
        >
      </div>
    </div>
    <div class="card-bottom">
      <button
        type="submit"
        id="btn_general_universe_offers_dog_1827"
        class="btn btn-lg btn-block info_bubble text-white"
      >
        Agregar al carrito
      </button>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  name: String,
  price: Number,
  price_vip: Number,
  price_old: Number,
  img: String,
  variants: Array,
  score: Number
})
</script>

<style lang="stylus" scoped>
.card
    width 300px
    height 500px
    .card-top
        .offers
            .off
                p
                    left: 30%
                    top: 35%
                    font-size 1.3rem
.card-body
    .stars
        i
            font-size:  1rem
            color var(--warning)
            filter: brightness(1)
.variants
    .info_bubble
        font-size .8rem
    button
        font-size .7rem
 .info_bubble
   background: var(--purple-b)
 p
   color: var(--danger)
   font-weight bold 
 p.dashed
   line-height 80%
   color: var(--dark)
   b
     text-decoration:line-through
p.card-name
  height: 44px;
  color: #242424;
  font-size: 20px;
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;    height: 44px;
  color: #242424;
  font-size: 20px;
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
</style>