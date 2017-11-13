'use strict'

/**
 * Import dependecies.
 */

import Vue from 'vue'

import OverviewTemplate from './templates/Overview.vue'
import App from './components/App.vue'
import LatestPosts from './components/LatestPosts.vue'
import LoginBox from './components/LoginBox.vue'
import LogoutBox from './components/LogoutBox.vue'

import store from './store'

/**
 * Define components.
 */

Vue.component('we-overview-template', OverviewTemplate)
Vue.component('we-login-box-component', LoginBox)
Vue.component('we-logout-box-component', LogoutBox)
Vue.component('we-latest-posts-component', LatestPosts)

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
