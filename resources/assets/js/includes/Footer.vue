<template>
	<!-- Footer -->
	<footer id="footer" :class="'wrapper ' + stdclass">
	    <div class="inner">
	        <ul class="menu">
	            <li>&copy; STD. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
	        </ul>
	    </div>
	</footer>
</template>

<script>
export default
{
	props:
	{
		stdclass: {
			type: String,
			default: 'style1-alt'
		}
	}
}
</script>