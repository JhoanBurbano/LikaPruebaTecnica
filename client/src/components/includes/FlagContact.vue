<template>
  <div class="info">
    <div class="left">
      <span>
        <img src="../../assets/secure_mc.svg" alt="" />Compras seguras
        online&nbsp;&nbsp;&nbsp;|</span
      >
      <span>
        <img src="../../assets/wallet_mc.svg" alt="" />Pago Contra
        Entrega&nbsp;&nbsp;&nbsp;|</span
      >
      <span>
        <img src="../../assets/truck_mc.svg" alt="" />Entregas el mismo día</span
      >
    </div>
    <div class="right">
      <span>Llámanos&nbsp;&nbsp;3009108496&nbsp;&nbsp;&nbsp;|</span>
      <span>&nbsp;&nbsp;&nbsp;Escribenos</span>
      <a><img src="../../assets/youtube_mc.svg" alt="" /></a
      ><a href=""><img src="../../assets/instagram_mc.svg" alt="" /></a
      ><a href=""><img src="../../assets/facebook_mc.svg" alt="" /></a>
    </div>
  </div>
</template>

<style lang='stylus' scoped>
.info {
  background: #000;
  display: flex;
  padding: 0.2rem;
  color: var(--white)
}

.info.position-sticky {
  top: 0px;
}

.info .left {
  width: 60%;
  display: flex;
  justify-content: center;
}

.info .left > span {
  display: flex;
  align-items: center;
  margin-left: 1rem;
}

.info .right {
  width: 40%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.info .right a {
  margin-left: 2ch;
}
</style>