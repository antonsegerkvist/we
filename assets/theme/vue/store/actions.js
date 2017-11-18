'use strict'

/**
 * Include dependecies.
 */

import * as api from '../api'

/**
 * Define vuex actions.
 */

export default {

  /**
   * Fetch and update all categories in the state.
   */

  updateCategories (context) {
    api.category.getAllCategories()
    .then(response => {
      context.commit('setCategories', response.data)
    })
    .catch(error => {
      // FIXME: handle error.
      console.log(error)
    })
  },

  /**
   * Fetch and update all discussions in the state.
   */

  updateDiscussions (context) {
    api.discussion.getAllDiscussions()
    .then(response => {
      context.commit('setDiscussions', response.data)
    })
    .catch(error => {
      // FIXME: handle error.
      console.log(error)
    })
  }

}
