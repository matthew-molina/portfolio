<template>
	<div>
		<std-sidebar></std-sidebar>

		<div id="wrapper">

			<std-banner></std-banner>

			<std-articles></std-articles>
			
			<std-skills></std-skills>

			<std-contact-form></std-contact-form>

		</div>
    	
    	<std-footer></std-footer>

	</div>
</template>

<script>
import { ebi } from '../../EventBus.js';
import SideBar from '../../includes/SideBar.vue';
import Footer from '../../includes/Footer.vue';
import Banner from '../../components/Banner.vue';
import Article from '../../components/Article.vue';
import Skill from '../../components/Skill.vue';
import ContactForm from '../../components/ContactForm.vue';

export default
{
	components: {
        'std-sidebar' : SideBar,
        'std-footer' : Footer,

        'std-banner' : Banner,
        'std-articles' : Article,
        'std-skills' : Skill,
        'std-contact-form' : ContactForm,
    },

	mounted()
	{
		this.init();
	},

	methods:
    {
    	init()
    	{

    	},
    }
}
</script>