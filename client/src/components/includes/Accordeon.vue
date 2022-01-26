<template>
    <div class="d-md-none accordion w-100" id="accordionExample">
      <div class="card">
        <div class="card-header bg-white" id="headingOne">
          <h2 class="mb-0">
            <button
              class="btn bg-transparent shadow-none btn-block text-left text-purple text-decoration-none font-weight-bold"
              type="button"
              data-toggle="collapse"
              data-target="#collapseOne"
              aria-expanded="true"
              aria-controls="collapseOne"
              style="box-shadow: none!important; outline: none!important"
            >
              ACERCA DE LAIKA
            </button>
          </h2>
        </div>

        <div
          id="collapseOne"
          class="collapse show"
          aria-labelledby="headingOne"
          data-parent="#accordionExample"
        >
          <div class="card-body">
            <router-link to="/"><p class="text-purple f-s-l">Sobre Laika</p></router-link>
            <router-link to="/"><p class="text-purple f-s-l">Servicios</p></router-link>
            <router-link to="/"><p class="text-purple f-s-l">Trabaja con Nosotros</p></router-link>
            <router-link to="/"><p class="text-purple f-s-l">Blog</p></router-link>
            <router-link to="/"><p class="text-purple f-s-l">Terminos y condiciones</p></router-link>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header bg-white" id="headingTwo">
          <h2 class="mb-0">
            <button
              class="btn bg-transparent shadow-none btn-block text-left collapsed text-purple text-decoration-none font-weight-bold"
              type="button"
              data-toggle="collapse"
              data-target="#collapseTwo"
              aria-expanded="false"
              aria-controls="collapseTwo"
              style="box-shadow: none!important; outline: none!important"
            >
            LINKS DE INTERES
            </button>
          </h2>
        </div>
        <div
          id="collapseTwo"
          class="collapse"
          aria-labelledby="headingTwo"
          data-parent="#accordionExample"
        >
          <div class="card-body">
            <router-link to="/"><p class="text-purple f-s-l">Preguntas frecuentes</p></router-link>
            <router-link to="/"><p class="text-purple f-s-l">Como comprar en laika</p></router-link>
            <router-link to="/"><p class="text-purple f-s-l">Politica de Privacidad</p></router-link>
            <router-link to="/"><p class="text-purple f-s-l">Contactanos</p></router-link>
            <router-link to="/"><p class="text-purple f-s-l">Politicas de entrega</p></router-link>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header bg-white" id="headingThree">
          <h2 class="mb-0">
            <button
              class="btn btn-block bg-transparent text-left collapsed text-purple text-decoration-none font-weight-bold"
              type="button"
              data-toggle="collapse"
              data-target="#collapseThree"
              aria-expanded="false"
              aria-controls="collapseThree"
              style="box-shadow: none!important; outline: none!important"
            >
              INFORMACION
            </button>
          </h2>
        </div>
        <div
          id="collapseThree"
          class="collapse"
          aria-labelledby="headingThree"
          data-parent="#accordionExample"
        >
          <div class="card-body">
            <router-link to="/"><p class="text-purple f-s-l">Telefono: 300 910 8496</p></router-link>
            <router-link to="/"><p class="text-purple f-s-l">servicioalcliente@laika.com.co</p></router-link>
            <router-link to="/"><p class="text-purple f-s-l">Bogota, Colombia</p></router-link>
          </div>
        </div>
      </div>
    </div>
</template>

<script setup>
</script>

<style lang="stylus" scoped>
.f-s-l
  font-family 'Causten-regular'
  font-size 1rem!important
</style>