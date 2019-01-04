import Vue from 'vue';
import Vuex from 'vuex';
import createPersistedState from 'vuex-persistedstate';

Vue.use(Vuex);
let api = document.head.querySelector('meta[name="api_base"]');


let asset_base = '';

if (process.env.MIX_BROWSER_MODE != 'hash') {
    asset_base = '/';
}

console.log(asset_base)

export default new Vuex.Store({
    state: {
        menu_width: '668',
        api_base: 'https://hrisv2.dev/api/v1',
        // api_base: api.content,
        asset_base: asset_base,
        user: '',
        logged_in: '',
        page_loader: false,
        mobile_menu: false,
    },

    plugins: [
        createPersistedState()
    ],

    mutations: {
        changeMenuWidth: function (state, new_width) {
            state.menu_width = new_width
        },

        saveUser (state, data) {
            state.user = data;
            state.logged_in = true;
        },

        deleteAuth (state) {
            state.auth_user = { };
            state.user = { };
            state.logged_in = false;
        }
    }
})
