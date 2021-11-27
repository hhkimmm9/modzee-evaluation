import Vue from "vue";
import Vuex from "vuex";
import createPersistedState from "vuex-persistedstate";

import profile from "./modules/profile";
import album from "./modules/album";

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        profile,
        album,
    },
    plugins: [createPersistedState()],
});
