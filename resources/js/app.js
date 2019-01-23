require('./bootstrap');
window.Vue = require('vue');

import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';
Vue.use(Vuetify);

// route information for vue router
import routes from './routes.js';

// component file
import App from './views/App';


const app = new Vue({
    el: '#app',
    render: h => h(App),
    router: routes
});

export default app;