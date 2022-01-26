
<template>
<swiper :slidesPerView="3" :spaceBetween="30" :freeMode="true" :pagination='{
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
import bowl from "../../assets/products/bowl.jpg?url";
import cookies from "../../assets/products/galletas.jpg?url";
import pedigree from "../../assets/products/Pedigree.jpg?url";
import chiken from "../../assets/products/Chiken.jpg?url";
import product from "../includes/Product.vue";

// Import Swiper styles
import 'swiper/css';

import "swiper/css/free-mode"
import "swiper/css/pagination"


// import Swiper core and required modules
import SwiperCore, {
  FreeMode,Pagination, Navigation
} from 'swiper';

// install Swiper modules
SwiperCore.use([FreeMode, Navigation]);

const products = [
  {
    id: "product-01",
    name: "Galletas De Cordero Y Arroz Laika By Rausch",
    price: 3400,
    price_vip: 3000,
    price_old: 3800,
    variants: ["1/2KG", "1KG", "2KG"],
    score: 5,
    img: cookies,
  },
  {
    id: "product-02",
    name: "Pedigree - Alimento Húmedo Para Perro Adulto Raza Pequeña Carne Sobre",
    price: 3400,
    price_vip: 3000,
    price_old: 3800,
    variants: ["500G", "1KG", "2KG"],
    score: 5,
    img: pedigree,
  },
  {
    id: "product-03",
    name: "Hills Canine Treats Chicken",
    price: 3400,
    price_vip: 3000,
    price_old: 3800,
    variants: ["1KG", "2KG", "3KG"],
    score: 5,
    img: chiken,
  },
  {
    id: "product-0",
    name: "ZeeDog Bebedero",
    price: 3400,
    price_vip: 3000,
    price_old: 3800,
    variants: ["S", "M", "L"],
    score: 5,
    img: bowl,
  },
  {
    id: "product-01",
    name: "Galletas De Cordero Y Arroz Laika By Rausch",
    price: 3400,
    price_vip: 3000,
    price_old: 3800,
    variants: ["1/2KG", "1KG", "2KG"],
    score: 5,
    img: cookies,
  },
];


</script>

<style scope>

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