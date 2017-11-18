'use strict'

/**
 * Define vuex getters.
 */

export default {

  /**
   * Get all the categories in the buffer.
   */

  getCategories (state) {
    return state.categories
  },

  /**
   * Get all the discussions in the buffer.
   */

  getDiscussions (state) {
    return state.discussions
  }

}
