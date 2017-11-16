<template>
  <div class="we-button-component">
    <p>{{ label }}</p>
  </div>
</template>

<script>
export default {
  props: [ 'label' ],
  methods: {
    onButtonClick () {
      this.$emit('click')
    }
  }
}
</script>

<style lang="scss">
.we-button-component {
  background-color: rgb(63, 168, 66);
  border-radius: 2px;
  cursor: pointer;
  height: 50px;
  position: relative;
  text-align: center;
  transition: background-color 267ms ease-in-out;
  width: 100%;

  &:hover {
    background-color: lighten(rgb(63, 168, 66), 5%);
  }

  & > p {
    color: #fff;
    font-family: "ProximaNovaRegular";
    font-size: 14px;
    left: 50%;
    letter-spacing: 1px;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
  }

}
</style>
