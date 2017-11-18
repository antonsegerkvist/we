<template>
  <div id="#app">
    <we-overview-template/>
  </div>
</template>

<script>
import {
  mapActions
} from 'vuex'

export default {
  created () {
    this.updateCategories()
    this.updateDiscussions()
  },
  methods: {
    ...mapActions({
      updateCategories: 'updateCategories',
      updateDiscussions: 'updateDiscussions'
    })
  }
}
</script>

<style>
</style>
