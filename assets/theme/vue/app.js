'use strict'

/**
 * Import dependecies.
 */

import Vue from 'vue'

import TemplateFront from './templates/Overview.vue'
import App from './components/App.vue'
import LatestPosts from './components/LatestPosts.vue'
import LoginBox from './components/LoginBox.vue'
import LogoutBox from './components/LogoutBox.vue'

import store from './store'

/**
 * Define components.
 */

Vue.component('we-template-overview', TemplateFront)
Vue.component('we-login-box', LoginBox)
Vue.component('we-logout-box', LogoutBox)
Vue.component('we-latest-posts', LatestPosts)

/**
 * Define application.
 */

window.onload = () => {
  const app = new Vue({
    el: '#app',
    render: h => h(App),
    template: '<App/>',
    components: { App },
    store
  })
  return app
}
