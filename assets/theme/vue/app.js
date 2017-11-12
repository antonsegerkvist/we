'use strict'

/**
 * Import dependecies.
 */

import Vue from 'vue'
import App from './components/App.vue'

/**
 * Define application.
 */

window.onload = () => {
  const app = new Vue({
    el: '#app',
    render: h => h(App),
    template: '<App/>',
    components: { App }
  })
  return app
}
