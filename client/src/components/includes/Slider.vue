<template>
  <div class="car-class">
    <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
        data-interval="3000"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
        <img class="w-100" src="../../assets/slider/Slide-1.jpg" alt="slider-1" />
          </div>
          <div class="carousel-item">
        <img class="w-100" src="../../assets/slider/Slide-2.jpg" alt="slider-2" />
          </div>
          <div class="carousel-item">
        <img class="w-100" src="../../assets/slider/Slide-3.jpg" alt="slider-3" />
          </div>
          <div class="carousel-item">
        <img class="w-100" src="../../assets/slider/Slide-4.jpg" alt="slider-4" />
          </div>
          <div class="carousel-item">
        <img class="w-100" src="../../assets/slider/Slide-5.png" alt="slider-5" />
          </div>
          <div class="carousel-item">
        <img class="w-100" src="../../assets/slider/Slide-6.png" alt="slider-6" />
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
</script>

<style src="vue3-carousel/dist/carousel.css" lang="css" scope>

</style>

<style lang="stylus" scope>
  .car-class
    width 100%
    .carousel-indicators
      bottom -20%
      > li
        background var(--purple-b)
        width .6ch
        height: .6ch
        border-radius 40%
        opacity .5
        cursor pointer
        margin-right 1ch
      .active
        opacity 1
    @media (max-width: 650px)
      .carousel-indicators
        bottom -50%

</style>

