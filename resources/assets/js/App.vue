<template>
	<div>
		<transition name="fade">
	    	<router-view></router-view>
	    </transition>
	</div>
</template>

<script>
import { ebi } from './EventBus.js';

export default
{
	data()
	{
		return {
			//
		}
	},

    created()
    {
    	//
    },
}
</script>