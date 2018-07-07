<template>
	<div class="container" v-show="loading">
		<div class="loader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</template>

<script>
export default
{
	props:
	{
		isloading: {
	      type: Boolean,
	      default: false,
	    },
	},

	data()
	{
		return {
			//
		}
	},

	mounted()
	{
		//
	},

	watch:
	{
		isloading(value)
		{
        	this.loading = value;
        }
	},

	methods:
	{
		//
	},
}
</script>

<style scoped>
.container {
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	display: flex;
	width: 100%;
	height: 100%;
	-webkit-align-items: center;
	        align-items: center;
	-webkit-justify-content: center;
	        justify-content: center;
	vertical-align: middle;
	z-index: 9999;
}

.loader {
}

.loader span {
	display: inline-block;
	width: 5px;
	height: 20px;
	background-color: #fff;
}

.loader span:nth-child(1) {
	animation: grow 1s ease-in-out infinite;
}

.loader span:nth-child(2) {
	animation: grow 1s ease-in-out 0.15s infinite;
}

.loader span:nth-child(3) {
	animation: grow 1s ease-in-out 0.30s infinite;
}

.loader span:nth-child(4) {
	animation: grow 1s ease-in-out 0.45s infinite;
}

@keyframes grow {
	0%, 100% {
		-webkit-transform: scaleY(1);
		-ms-transform: scaleY(1);
		-o-transform: scaleY(1);
		transform: scaleY(1);
	}

	50% {
		-webkit-transform: scaleY(1.8);
		-ms-transform: scaleY(1.8);
		-o-transform: scaleY(1.8);
		transform: scaleY(1.8);
	}
}
</style>