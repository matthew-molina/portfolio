import Vue from 'vue';
import VueRouter from 'vue-router';

import HomePage from '../views/pages/HomePage.vue';
import ArticlePage from '../views/pages/ArticlePage.vue';

Vue.use(VueRouter);

const router = [
	{ path: '/', component: HomePage, name: 'homepage' },
	{ path: '/page', component: ArticlePage, name: 'articlepage' },
];

export default new VueRouter({
	routes: router,
});
