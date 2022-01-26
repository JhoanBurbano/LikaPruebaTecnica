

<template>
  <div class="car-class">
    <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
        data-interval="3000"
      >
        <ul class="carousel-inner">
          <li v-for="(product, index) in products" :key="product.id" v-bind:class="index===0?'carousel-item  active':'carousel-item '">
            <product  :name="product.name" :score="product.score" :img="product.img" :price="product.price" :price_vip="product.price_vip" :price_old="product.price_old" :variants="product.variants" />
      </li>
        </ul>
        <a
          class="carousel-control-prev d-none"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next d-none"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </div>
</template>


<script setup>
import bowl from "../../assets/products/bowl.jpg?url";
import cookies from "../../assets/products/galletas.jpg?url";
import pedigree from "../../assets/products/Pedigree.jpg?url";
import chiken from "../../assets/products/Chiken.jpg?url";
import product from "../includes/Product.vue";

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
    id: "product-0",
    name: "ZeeDog Bebedero",
    price: 3400,
    price_vip: 3000,
    price_old: 3800,
    variants: ["S", "M", "L"],
    score: 5,
    img: bowl,
  },
];
</script>

<style lang="stylus" scoped>
  li
    > div
      width 300px
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
</style>