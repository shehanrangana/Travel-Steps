import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

let routes = [
    {
        path: '/',
        component: require('./components/Home'),
    },
]

export default new VueRouter({
    mode: 'history', // remove hashbang from url
    routes,
});