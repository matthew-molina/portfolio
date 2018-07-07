<template>
	<section id="three" class="wrapper style1 fade-up">
        <div class="inner">
            <h2>Get in touch</h2>
            <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
            <div class="split style1">
                <section>
                    <form id="form" action="#" @submit.prevent="submit()">
                        <div class="fields">
                            <div class="field half">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" />
                            </div>
                            <div class="field half">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" />
                            </div>
                            <div class="field">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" rows="5"></textarea>
                            </div>
                            <vue-recaptcha
                                @verify="verify()"
                                sitekey="6Ldt1mIUAAAAAEjHwPpEvaJYpMFhflXQ9gqXLSP5">
                            </vue-recaptcha>
                        </div>
                        <ul class="actions">
                            <li><button class="button submit">Send Message</button></li>
                        </ul>
                    </form>
                </section>

				<std-contact-details></std-contact-details>
                
            </div>
        </div>
    </section>
</template>

<script>
import ContactDetails from './ContactDetails.vue';

export default
{
	components:
	{
        'std-contact-details': ContactDetails,
	},

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

		},

        submit()
        {
            alert('alert!');
            this.$ref.recaptcha.execute();
        },

        verify()
        {
            alert('Verified');
        }
	},
}
</script>