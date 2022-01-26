<script setup>
import Chart from "./includes/Chart.vue";
import Slider from "../components/includes/Slider.vue";
import SliderMarks from "./includes/SliderMarks.vue";
import Products from "./includes/Products.vue";
import ProductSlider from "./includes/ProductSlider.vue"
import SwipperVue from "./includes/SwiperVue.vue"
import Accordeon from "./includes/Accordeon.vue"
import SubMenu from "./includes/DropDownMenu.vue"
</script>

<template>
  <section class="px-xl-5">
    <div class="slider-container w-100 w-xl-90">
      <slider />
    </div>
    <div class="categoria">
      <h4 class="subtlt">Categoría</h4>
      <div class="charts">
        <chart
          category="Alimento"
          icon="https://laikapp.s3.amazonaws.com/images_categories/ICONS_COTEGORY_ALIMENTOS.png"
        ></chart>
        <chart
          category="Snacks"
          icon="https://laikapp.s3.amazonaws.com/images_categories/ICONS_COTEGORY_SNACKS.png"
        ></chart>
        <chart
          category="FarmaPet"
          icon="https://laikapp.s3.amazonaws.com/dev_images_categories/1614033964Categoria_farmacia.png"
        ></chart>
        <chart
          category="Cuidado e Higiene"
          icon="https://laikapp.s3.amazonaws.com/dev_images_categories/1613668386Categoria_higiene_2.png"
        ></chart>
        <chart
          category="Juguetes"
          icon="https://laikapp.s3.amazonaws.com/dev_images_categories/1612554392Juguetes.png"
        ></chart>
        <chart
          category="Accesorios"
          icon="https://laikapp.s3.amazonaws.com/images_categories/categoria_accesorios+(1).png"
        ></chart>
        <chart
          category="Para PetLovers"
          icon="https://laikapp.s3.amazonaws.com/dev_images_categories/1613595491Categoria_pet_owner.png"
        ></chart>
      </div>
    </div>
    <div class="marks">
      <h4 class="subtlt">Marcas Destacadas</h4>
      <div class="marcas">
        <slider-marks/>
      </div>
    </div>
    <div class="ofertas">
      <h4 class="font-weight-bold text-black subtlt">Un universo de ofertas</h4>
            <product-slider/>
    </div>
    <div class="hero w-100 w-xl-90">
      <div class="background_banner_experiencie d-flex">
        <div class="col-lg-7 col-xl-8">
          <p class="text_download text-white h2">
            Para una mejor
            <strong class="font_causten_round_extra_bold_oblique"
              >experiencia</strong
            >
            para ti y tu
            <strong class="font_causten_round_extra_bold_oblique"
              >peludo descarga la app.</strong
            >
          </p>
          <div class="download_icons_home">
            <a
              href="https://itunes.apple.com/co/app/laika/id1325285117?mt=8"
              target="_blank"
              class="text_decoration_general"
            >
              <img
                class="img-item-sm text-right img-fluid img-app_v2 mb-3"
                data-src="https://laika.com.co/assets/APP.png  "
                src="https://laika.com.co/assets/APP.png  "
                style=""
              />
            </a>
            <a
              href="https://play.google.com/store/apps/details?id=com.kubo.laika"
              target="_blank"
              class="text_decoration_general"
            >
              <img
                class="img-item-sm text-right img-fluid img-app_v2 border_dp mb-3"
                data-src="https://laika.com.co/assets/GOOGLEP.png  "
                src="https://laika.com.co/assets/GOOGLEP.png  "
                style=""
              />
            </a>
            <a
              href="https://appgallery5.huawei.com/#/app/C101252007"
              target="_blank"
              class="text_decoration_general"
            >
              <img
                class="img-item-sm text-right img-fluid img-app_v2 border_dp mb-3"
                data-src="https://laika.com.co/assets/huaweiGallery.png  "
                src="https://laika.com.co/assets/huaweiGallery.png  "
                style=""
              />
            </a>
          </div>
        </div>
        <div class="px-0 col-lg-5 mt-0 mt-lg-4 w-50 banner_footer_experience">
          <img
            data-src="https://laika.com.co/assets/imagen_phone_r.png"
            class="lazy"
            src="https://laika.com.co/assets/imagen_phone_r.png"
            style=""
          />
        </div>
      </div>
    </div>
    <div class="men-down d-flex justify-content-md-between justify-content-start align-items-center align-items-md-start flex-column flex-md-row">
      <div class="logo w-50 w-md-15">
        <img src="../assets/LAIKA.png" alt="" />
        <p class="text-purple">Siguenos en:</p>
        <div class="d-flex justify-content-center justify-content-md-center">
          <i class="bi bi-youtube"></i>
          <i class="bi bi-instagram"></i>
          <i class="bi bi-facebook"></i>
        </div>
      </div>
      <div class="d-none d-md-flex flex-column">
        <h5 class="h6 font-weight-bold text-purple">ACERCA DE LAIKA</h5>
        <router-link to="/">Sobre Laika</router-link>
        <router-link to="/">Servicios</router-link>
        <router-link to="/">Trabaja con nosotros</router-link>
        <router-link to="/">Blog</router-link>
        <router-link to="/">Terminos & Condiciones</router-link>
      </div>
      <div class="d-none d-md-flex flex-column">
        <h5 class="h6 font-weight-bold text-purple">LINKS DE INTERES</h5>
        <router-link to="/">Preguntas frecuentes</router-link>
        <router-link to="/">¿Cómo comprar en Laika?</router-link>
        <router-link to="/">Politica de Privacidad</router-link>
        <router-link to="/">Contactanos</router-link>
        <router-link to="/">Politicas de Entrega</router-link>
      </div>
      <div class="d-none d-md-flex flex-column">
        <h5 class="h6 font-weight-bold text-purple">INFORMACION</h5>
        <router-link to="/">Teléfono: 3009108496</router-link>
        <router-link to="/">servicioclientes@laika.com.co</router-link>
        <router-link to="/">Bogota D.C, Colombia</router-link>
      </div>
      <div class="d-none d-md-flex flex-column">
        <h5 class="h6 font-weight-bold text-purple">SUSCRIBETE</h5>
        <p class="m-0">Recibe noticias y promociones al instante:</p>
        <form action="form-group mt-0 ">
          <div class="input-group">
            <input
              type="email"
              placeholder="Correo electrónico"
              required="required"
              class="form-control text_subscription"
            />
            <button
              type="button"
              class="btn bg-laika btn_subcription pt-0 pb-1"
            >
              <span
                class="bg_purple badge mt-1"
                style="width: 30px; height: 25px"
                ><i class="bi bi-caret-right-fill text-white"></i
              ></span>
            </button>
          </div>
          <div class="custom-control custom-checkbox">
            <input
              type="checkbox"
              name="check_notifications"
              id="check_notifications"
              class="custom-control-input check_subscription"
            />
            <label
              for="check_notifications"
              class="custom-control-label pt-1 font-11 color_purple"
              style="font-style: italic"
              >He leído y acepto las
              <a
                href="https://laika.com.co/privacy_policies/cali"
                class="color_purple"
                >políticas de privacidad.</a
              ></label
            >
          </div>
        </form>
      </div>
      <Accordeon/>
    </div>
  </section>
</template>


<style lang="stylus" scope>
@media (min-width: 770px)
  .w-md-15
    width 15%!important
@media (max-width: 1199px)
  .hero
    transform scale(.9)
    width: 100%
    height: 45vw!important
    min-height 5ch
@media (max-width: 999px)
  .hero
    transform scale(.9)
    width: 100%
    > div
      padding 3%!important
@media (max-width: 800px)
  .subtlt
    font-size calc(16px +2vw)
  .img-item-sm
    width: 20%!important
    height: auto!important
  .text_download
    font-size: 3.9vw!important
    padding 10% 20% 0 20% !important
  .lazy
    width 90%
@media (min-width: 1200px)
  .w-xl-90
    width 90%!important

section 
  overflow-x: hidden;
  display: flex;
  flex-direction: column;
  align-items: center;

  > * 
    margin-bottom: 3ch;
    width: 90%;

    h4 
      text-align: left;
      margin-bottom: 1ch;
      color: var(--purple-b);
    

    .text-purple 
      color: var(--purple-b);
      margin: 0;
    

    i 
      color: var(--purple-b);
      filter: contrast(0.5);
      font-size: 1.5rem;
      cursor: pointer;
    

    i:hover 
      filter: contrast(0.4);
    
  

  .slider-container 
    width: 90%;
  

  .categoria 
    width: 90%;

    h4 
      text-align: left;
      margin-bottom: 1ch;
      color: var(--purple-b);
    

    .charts 
      width: 90%;
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: center;
    
  

  .marks 
    width: 90%;

    h2 
      text-align: left;
      margin-bottom: 1ch;
      color: var(--purple-b);
    
  

  .ofertas
    overflow hidden
    position relative 
    h4 
      color: var(--dark);
    
  .hero
    width: 90%
    height: 20rem
    overflow hidden
    border-radius 1.5ch
    > div
      padding 0 4rem 0 6rem
      background: linear-gradient(45deg,#533675 0,#7b4fad 25%,#9b64d9 45%,#b273f9 60%,#9b64d9 70%,#7b4fad 85%,#533675 100%)
      > div
        > .text_download
          text-align left
          padding 4rem 5rem 2rem 5rem
        > .download_icons_home
          > a
            > img
              height: 4ch
  .men-down 
    > * 
      color: var(--purple-b)!important;
      width: 15%;
    

    text-align: left;

    .h7 
      font-size: 0.3rem;
    

    a 
      font-size: 0.85rem;
      line-height: 3ch;
      text-decoration: none;
      color: var(--purple-b) !important;
      word-wrap: break-word;
    

    p 
      font-size: 0.75rem;
      line-height: 3ch;
    

    .bg-laika 
      background: var(--purple-b);
    

    .form 
      width: 30%;

      input 
        border-color: var(--purple-b);
      

      input::placeholder 
        color: var(--purple-b) !important;
        font-size: 0.75rem;
      

      label 
        font-size: 0.7rem;

        a 
          font-size: 0.7rem;
</style>
