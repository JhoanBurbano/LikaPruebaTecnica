<template>
  <div class="chart">
    <img :src="icon" :alt="category" />
    <p class="m-0" >{{ category }}</p>
  </div>
</template>

<script>
export default {
  name: "chart",
  props: ["icon", "category"],
  };
</script>

<style lang="stylus" scoped>
.chart
  display flex;
  align-items center
  justify-content center
  padding 1.5ch
  box-shadow 0 0 .3rem #00000023
  background white
  width 13rem
  border-radius 1ch
  margin 1ch
  img
      width 3ch
      margin: 0 1ch 0 0
  p
    font-weight 900


</style>
