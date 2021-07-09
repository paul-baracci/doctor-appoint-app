<template>
    <div class="text-center">
        <button class="btn btn-outline-primary" @click="dropdownIsOpen = !dropdownIsOpen">
            Cart ({{ cartCount }})
        </button>
        <transition name="fade">
        <div class="cart-dropdown" v-if="dropdownIsOpen">
            <h3 v-if="cartCount == 0" class="text-center">No items in cart</h3>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Service</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                    <tr v-for="item in this.$root.cart" :key="item.id" >
                        <th scope="row">{{ item.id }}</th>
                        <td>{{ item.title }}</td>
                        <td>${{ item.price }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">Checkout</button>
                                <button type="button" class="btn btn-danger" @click="removeFromCart(item)">Remove</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-warning" @click="clearCart()">Clear cart</button>
        </div>
        </transition>
    </div>
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
    },
    data() {
	    return {
	        dropdownIsOpen: false
        }
    },
    methods: {
	    clearCart() {
            localStorage.removeItem('cart');
	        return this.$root.cart = [];
        },
        removeFromCart(item) {
	        this.$root.cart.splice(this.$root.cart.indexOf(item), 1)
            localStorage.setItem('cart', JSON.stringify(this.$root.cart));
        }
    }
};
</script>

<style>
.fade-enter-active, .fade-leave-active {
  transition: opacity .3s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
.cart-dropdown {
    position: absolute;
    background-color: #fff;
    top: 100%;
    right:  5px;
    border: solid 1px lightslategray;
    border-radius: 10px;
    padding: 5px;
    z-index: 9;
}
</style>
