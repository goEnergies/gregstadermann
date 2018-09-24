<template>
	<div>
		<h1 v-bind:class="{'red':red}">vue bindings example</h1>
	<input type="checkbox" v-model="red" >
	<span>Red</span>
	</div>
</template>
<style>
.red{
color:red;
}
</style>
<script>
export default{
data(){
            return{
                red: false,
            }
        },
}
</script>

