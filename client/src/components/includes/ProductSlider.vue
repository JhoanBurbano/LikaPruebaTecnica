
<template>
<swiper v-if="products && products.length>0" :slidesPerView="3" :spaceBetween="30" :freeMode="true" :pagination='{
  "clickable": true
}' class="mySwiper">
    <swiper-slide
      v-for="product in products"
      :key="product.id"
    >
      <product
        :name="product.name"
        :score="product.score"
        :img="product.img"
        :price="product.price"
        :price_vip="product.price_vip"
        :price_old="product.price_old"
        :variants="product.variants"
      />
    </swiper-slide>
  </swiper>
</template>



<script setup>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';
import axios from 'axios';
// Import Swiper styles
import 'swiper/css';

import "swiper/css/free-mode"
import "swiper/css/pagination"


// import Swiper core and required modules
import SwiperCore, {
  FreeMode, Navigation
} from 'swiper';
import { onMounted, ref } from '@vue/runtime-core';

// install Swiper modules
SwiperCore.use([FreeMode, Navigation]);

var products = ref(null)

onMounted(()=>{
  axios('http://localhost:8000/api/products')
  .then(res => {
    products.value = res.data
  })
})  

</script>

<style lang="stylus" scope>

.swiper {
  width: 100%;
  height: 100%;
}

.swiper-slide {
  text-align: center;
  font-size: 18px;
  background: #fff;

  /* Center slide text vertically */
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
}

.swiper-slide img {
  display: block;
  height: 100%;
  object-fit: cover;
  margin: 0 auto
}

</style>