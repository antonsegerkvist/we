'use strict'

/**
 * Include dependecies.
 */

import axios from 'axios'

/**
 * Define discussion endpoint connections.
 */

const discussion = {

  /**
   * Get all the different forum categories.
   */

  getAllDiscussions () {
    return new Promise((resolve, reject) => {
      axios.post('wp-admin/admin-ajax.php', {
        action: 'endpoint_we_get_all_forum_discussions'
      })
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

export { discussion }
