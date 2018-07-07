import Vue from 'vue';

Vue.mixin({

    data()
    {
        return {
            loading: false,
        };
    },

    computed:
    {
        //
    },

    mounted()
    {
        //
    },

    methods:
    {
        showPage(page, id = null)
        {
            switch (page) {
                case 'articlepage':
                        this.$store.commit('article/set', id);
                    break;
            }
            this.$router.push({ name: page });
        }
    }
});