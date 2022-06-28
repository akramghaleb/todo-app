
require('./bootstrap');

import Vue from 'vue'
import {routes} from './routes';



import VueRouter from 'vue-router'
Vue.use(VueRouter)



const router = new VueRouter({
    routes,
    mode:'history'
})

const app = new Vue({
    el: '#app',
    router
});


//window.Vue = require('vue').default;
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

