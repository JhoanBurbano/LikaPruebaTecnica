<template>
  <div class="car-class">
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-ride="carousel"
      data-interval="3000"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="w-100 d-flex justify-content-evenly">
            <img  class="image-shadow" src="../../assets/marks/mark-1.png" alt="" />
            <div class="image-shadow clip-div"><img  class="clip-circle" src="../../assets/marks/mark-2.png" alt="" /></div>
            <img  class="image-shadow" src="../../assets/marks/mark-3.png" alt="" />
            <img  class="image-shadow" src="../../assets/marks/mark-4.png" alt="" />
          </div>
        </div>
        <div class="carousel-item">
          <div class="w-100 d-flex justify-content-evenly">
            <img  class="image-shadow" src="../../assets/marks/mark-5.png" alt="" />
            <img  class="image-shadow" src="../../assets/marks/mark-6.png" alt="" />
            <img  class="image-shadow" src="../../assets/marks/mark-7.png" alt="" />
            <img  class="image-shadow" src="../../assets/marks/mark-8.png" alt="" />
          </div>
        </div>
      </div>
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

<script>
import { defineComponent } from "vue";
import { Carousel, Navigation, Pagination, Slide } from "vue3-carousel";

import "vue3-carousel/dist/carousel.css";

export default defineComponent({
  name: "Autoplay",
  components: {
    Carousel,
    Slide,
    Navigation,
    Pagination,
  },
});
</script>
<style lang="stylus" scope>
.carousel-item
  img
    width 100px
.justify-content-evenly 
  justify-content: space-evenly !important;
  .image-shadow
    filter drop-shadow(0 8px .4rem #00000043)!important
    transform scale(.8)
  .clip-circle
    clip-path: circle(48% at 50% 50%)
@media (max-width: 500px)
  .carousel-item
    img
      width 50px
</style>