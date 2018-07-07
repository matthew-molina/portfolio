<template>
    <section id="intro" class="wrapper style1 fullscreen fade-up relative">
        <div class="inner">
            <h1>Welcome</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita nobis nam doloribus quos delectus explicabo nihil dignissimos veniam culpa facere iusto consequuntur, a voluptatum magni. Perferendis odit placeat inventore cumque.</p>
            <ul class="actions">
                <li><a href="#one" class="button scrolly">Learn more</a></li>
            </ul>
        </div>

        <std-loader
			:isloading="loading"
        ></std-loader>

    </section>
</template>

<script>
export default
{
	data()
	{
		return {

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
			this.fetchContent();
		},

		fetchContent()
		{
			if (this.loading) return;
			
			this.loading = true;

			this.loading = false;
		},
	},
}
</script>