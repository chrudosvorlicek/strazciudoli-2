import Vue from 'vue';
import FilterTable from "./components/FilterTable";
import {BootstrapVue, IconsPlugin} from "bootstrap-vue";

require('./bootstrap');
window.Vue = require('vue');

Vue.use(BootstrapVue);
Vue.use(IconsPlugin);

const app = new Vue({
    el: '#app',
    components: {
        FilterTable,
    },
});
