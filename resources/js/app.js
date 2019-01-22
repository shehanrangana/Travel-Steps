require('./bootstrap');
window.Vue = require('vue');

import Vuetify from 'vuetify';
Vue.use(Vuetify);
import 'vuetify/dist/vuetify.min.css';

Vue.component('home-component', require('./components/Home.vue').default);

const app = new Vue({
    el: '#app'
});
