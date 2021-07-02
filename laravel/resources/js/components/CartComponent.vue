<template>
	<a href="#" class="btn btn-outline-primary text-center" type="submit">
        <p>Cart</p>
	    <p id="cartCount" class="badge bg-primary text-white ms-1 rounded-pill"> {{ cartCount }}</p>
    </a>
</template>

<script>
export default {
	name: 'CartComponent',
    computed: {
	    cartCount() {
            return this.$root.cart.length

        }
    },
    mounted() {
        if (localStorage.getItem('cart'))
            this.$root.cart = JSON.parse(localStorage.getItem('cart'));
    }
};
</script>

<style>

</style>
