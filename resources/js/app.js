
require('./bootstrap');

window.Vue = require('vue');

import VueRouter from "vue-router";
import VueResource from 'vue-resource';

Vue.use(VueRouter);
Vue.use(VueResource);

Vue.component ('navbar', require('./components/Navbar.vue').default);


let routes = [
    {path: '/aboutus', component: require('./components/AboutUs.vue').default},
    {path: '/addproduct', component: require('./components/AddProducts.vue').default},
    {path: '/contactus', component: require('./components/ContactUs.vue').default},
    {path: '/', component: require('./components/Home.vue').default},
    {path: '/bucket', component: require('./components/MyBucket.vue').default},
    {path: '/update/:id', component: require('./components/EditItem.vue').default}
];

const router = new VueRouter({
    routes: routes,
    mode: 'hash'
});

const app = new Vue({
    el: '#app',
    router
});
