import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

let routes = [
    {
        path: '/',
        component: require('./components/Home').default
    },
    {
        path: '/about',
        component: require('./components/About').default
    }
]

export default new VueRouter({
    mode: 'history', // remove hashnbang from url
    routes,
});