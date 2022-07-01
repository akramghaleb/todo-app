
require('./bootstrap');

import Vue from 'vue'
import {routes} from './routes';



import VueRouter from 'vue-router'
Vue.use(VueRouter)


//Sweet alert
import Swal from 'sweetalert2';
window.Swal = Swal;

//Sweet alert
import Notification from './helpers/Notification';
window.Notification = Notification;

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});
window.Toast = Toast;


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

