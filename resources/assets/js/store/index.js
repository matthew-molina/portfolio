import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
	modules: {

    /**
    | API Routes
    |-------------------------------------------*/
    article: {
    	namespaced: true,
    	state: {
    		id: null,
    	},

    	mutations: {
    		set(state, id) {
    			state.id = id;
    		}
    	}
    },
}
});
