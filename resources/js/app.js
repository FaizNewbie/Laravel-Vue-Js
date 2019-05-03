
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');
window.Fire = new Vue();
// moment (untuk tanggal)
import moment from 'moment';

// swall (untuk sweet alert)
import swal from 'sweetalert2'
window.swal = swal;
const Toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });
window.Toast = Toast;
// vform
import { Form, HasError, AlertError } from 'vform';
window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

import VueProgressBar from 'vue-progressbar'
Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '3px'
});
//vue router
import VueRouter from 'vue-router'
Vue.use(VueRouter)

const routes = [
    { path: '/Dashboard', component: require('./components/dashboard/dashboard.vue').default },
    { path: '/Profile', component: require('./components/profile/profile.vue').default },
    { 
        path: '/User', 
        name:'user', 
        component: require('./components/user/list_user.vue').default, 
    },
]

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
})
const app = new Vue({
    el: '#app',
    router
});

Vue.filter('uptext', function(value){
    moment.locale('id')
    return value.charAt(0).toUpperCase() + value.slice(1)
});
Vue.filter('GetDate',function(waktu){
    return moment(waktu).format('LLLL');
})

