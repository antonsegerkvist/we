'use strict'

/**
 * Include dependecies.
 */

import Vue from 'vue'
import Vuex from 'vuex'
import state from './state'
import getters from './getters'
import mutations from './mutations'
import actions from './actions'

/**
 * Notify vue about vuex.
 */

Vue.use(Vuex)

/**
 * Define and export store.
 */

export default new Vuex.Store({
  state,
  getters,
  mutations,
  actions
})
