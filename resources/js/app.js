require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import { routes } from "./routes/routes";
import BootstrapVue from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import { Form, HasError, AlertError } from 'vform';
import swal from 'sweetalert2';
import Vuex from 'vuex';
import StoreData from './store'

Vue.use(BootstrapVue);
Vue.use(VueRouter);
Vue.use(Vuex);
const store = new Vuex.Store( StoreData );
window.swal = swal;
const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});
window.toast = toast;
window.Form = Form;
window.Fire = new Vue();
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

const router = new VueRouter({
    routes,
    mode: 'history'
});

const app = new Vue({
    store,
    router,
    el: '#app',
});
