'use strict'

/**
 * Include dependecies.
 */

import axios from 'axios'

/**
 * Define category endpoint connections.
 */

const category = {

  /**
   * Get all the different forum categories.
   */

  getAllCategories () {
    return new Promise((resolve, reject) => {
      const url = '/wp-admin/admin-ajax.php'
      const data = 'action=endpoint_we_get_all_forum_categories'
      axios.post(url, data)
      .then(response => {
        resolve(response)
      })
      .catch(error => {
        reject(error)
      })
    })
  }

}

/**
 * Export endpoint connections.
 */

export { category }
