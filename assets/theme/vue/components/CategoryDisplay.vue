<template>
  <div class="we-category-display-component">
    <h4>{{ title }}</h4>
    <ul>
      <li v-for="category in categories"><a href="javascript:void(0)">{{ category.name }}</a></li>
    </ul>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  props: ['title'],
  computed: mapGetters({
    categories: 'getCategories'
  })
}
</script>

<style lang="scss">
.we-category-display-component {
  box-sizing: border-box;
  margin-top: 20px;
  width: 100%;

  & > h4 {
    font-family: "ProximaNovaRegular";
    font-size: 18px;
    margin-bottom: 10px;
  }

  & > ul {
    background-color: #fff;
    padding: 5px 15px;

    & > li {
      margin: 20px 0;

      & > a {
        color: #444;
        font-family: "ProximaNovaRegular";
        font-size: 18px;
        text-decoration: none;
      }

    }

  }

}
</style>
