'use strict'

/**
 * Define vuex mutations.
 */

export default {

  /**
   * Sets the state categories.
   */

  setCategories (state, categories) {
    state.categories = categories
  },

  /**
   * Sets the state discussions.
   */

  setDiscussions (state, discussions) {
    state.discussions = discussions
  }

}
