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
    console.log(api)
    api.category.getAllCategories()
    .then(response => {
      console.log(response)
      context.commit('setCategories', response.data)
    })
    .catch(error => {
      console.log(error)
    })
  },

  /**
   * Fetch and update all discussions in the state.
   */

  updateDiscussion (context) {
    api.discussion.getAllDiscussions()
    .then(response => {
      console.log(response)
    })
    .catch(error => {
      console.log(error)
    })
  }

}
