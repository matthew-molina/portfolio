<template>
	<div>
		<std-header></std-header>

		<div id="wrapper">

			<section id="main" class="wrapper">
				<div class="inner">
					<h1 class="major">{{ list.title }}</h1>
					<p class="align-justify">
						<span class="image left"><img src="images/pic05.jpg" alt="" /></span>
						{{ list.description }}
					</p>

					<ul class="alt">
						<li v-for="item in list.article_items">
							<h3>{{ item.title }}</h3>
							<p>{{ item.subtitle }}</p>
							<blockquote class="align-justify">
								{{ item.description }}
							</blockquote>
						</li>
						<!-- <li>
							<h3>Web Developer</h3>
							<p>PRAXXYS Solutions Inc. | May 2017 - Present</p>
							<blockquote class="align-justify">
								Creates System Process Documentations and Wireframes, developes wide-ranged of fast, seamless and elegant Websites, complex Systems such as E-commerce, Booking, and Reporting Systems and Mobile Apps for Android and iOS. Also conductes end to end quality assurances and unit testing, manage and handles server vulnerabilities. Conducts documentation of company guidelines to aid new employees.
							</blockquote>
						</li>
						<li>
							<h3>Stock Controller</h3>
							<p>Ecozyme Bio-Systems | Nov 2015 - Oct 2016</p>
							<blockquote class="align-justify">
								Conducted Inventory Management and provided end to end solutions, provided preventive solutions of low supply by creating an Excel sheet that contains all products and items in the storage facility. Also provided tech support through out our company from network to Computer Troubleshooting and created designs and layout for our ads and product using Photoshop.
							</blockquote>
						</li>
						<li>
							<h3>Bachelor's of Computer Science</h3>
							<p>Asian Intitute of Computer Studies | 2011 - 2016</p>
							<blockquote class="align-justify">
								Learned the basics of programming such as HTML, CSS, JavaScript, PHP, Java, MySQL and Programming fundamentals.
							</blockquote>
						</li>
						<li>
							<h3>Highschool Diploma</h3>
							<p>Ponciano Bernado High School | 2010 - 2011</p>
							<blockquote class="align-justify">
								Participated on school competitions such as Damath was able to make it to the Top 10.
							</blockquote>
						</li>
						<li>
							<h3>Highschool</h3>
							<p>Ramon Magsaysay Cubao High School | 2007 - 2010</p>
							<blockquote class="align-justify">
								Participated on school activities such as English Writing competition.
							</blockquote>
						</li>
						<li>
							<h3>Elementary Diploma</h3>
							<p>Ponciano Bernardo Elementary School | 2000 - 2007</p>
							<blockquote class="align-justify">
								Constantly in the Top 10 of the Class and graduated as Top 3 of the Class.
							</blockquote>
						</li> -->
					</ul>
				</div>
			</section>

		</div>
		
    	<std-footer
			:stdclass="'alt'"
		></std-footer>
	</div>
	
</template>

<script>
import { ebi } from '../../EventBus.js';
import Header from '../../includes/Header.vue';
import Footer from '../../includes/Footer.vue';

export default
{
	components:
	{
		'std-header' : Header,
		'std-footer' : Footer,
	},

	data()
	{
		return {
			list: {
				extra: [],
			},
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
			axios.post('/fetch/article', {
				id: this.$store.state.article.id,
			}).then(response => {
				this.list = response.data.list;
			}).catch(error => {

			});
		},
	},
}
</script>