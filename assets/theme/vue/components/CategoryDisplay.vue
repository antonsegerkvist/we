<template>
  <div class="we-category-display-component">
    <h4>Categories</h4>
    <ul>
      <li v-for="category in categories">
        <a href="javascript:void(0)">
          {{ category.name }}
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
import {
  mapActions,
  mapGetters
} from 'vuex'

export default {
  methods: {
    ...mapActions({
      updateCategories: 'updateCategories'
    })
  },
  computed: {
    ...mapGetters({
      categories: 'getCategories'
    })
  }
}
</script>

<style lang="scss">
.we-category-display-component {
  box-sizing: border-box;
  margin-top: 20px;
  width: 100%;

  & > h4 {
    color: #444;
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
        font-family: helvetica;
        font-size: 16px;
        text-decoration: none;
      }

    }

  }

}
</style>
