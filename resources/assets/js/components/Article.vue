<template>
	<div>
	    <section id="one" class="wrapper style2 spotlights" :class="loading ? 'height--300' : ''">
	        <section v-for="list in lists">
	            <a href="#" class="image"><img src="/images/pic01.jpg" alt="" /></a>
	            <div class="content">
	                <div class="inner">
	                    <h2>{{ list.title }}</h2>
	                    <p>{{ list.short_description }}</p>
	                    <ul class="actions">
	                        <li>
	                        	<a @click.prevent="showPage('articlepage', list.id)"
	                        		href="#" class="button">
	                        		Learn more
	                        	</a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </section>

	        <std-loader
				:isloading="loading"
	        ></std-loader>
	        
	    </section>
	</div>
</template>

<script>
export default
{
	data()
	{
		return {
			lists: [],
		}
	},

	mounted()
	{
		this.init();
	},

	methods:
	{
		init()
		{
			this.fetch();
		},

		fetch()
		{
			this.loading = true;

			axios.post('/fetch/articles', {

			}).then(response => {
				this.lists = response.data.lists;
				this.loading = false;

			}).catch(error => {
				console.log(error);
				this.loading = false;
			});
		},
	}
}
</script>