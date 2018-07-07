
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRecaptcha from 'vue-recaptcha';

import store from './store';
import App from './App';
import router from './routes';
import settings from './settings';

import Loader from './components/Loader.vue';

Vue.component('std-loader', Loader);
Vue.component('vue-recaptcha', VueRecaptcha);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    render: h => h(App),

    store,
    router,

    beforeCreate()
    {
    	//
    },

    created()
    {
        this.$router.push({ name: 'homepage' });
        // this.$router.push({ name: 'generalpage' });
    },

    mounted()
    {
        this.init();
    },

    methods:
    {
        init()
        {
        	router.beforeEach(function (to, from, next) { 
                setTimeout(() => {
                    window.scrollTo(0, 0);
                }, 100);
                next();
            });
        },
    },
});
