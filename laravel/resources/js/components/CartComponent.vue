<template>
    <div class="text-center">
        <button class="btn btn-outline-primary" @click="dropdownIsOpen = !dropdownIsOpen">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-folder2" viewBox="0 0 16 16">
                <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v7a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5v-9zM2.5 3a.5.5 0 0 0-.5.5V6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5zM14 7H2v5.5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V7z"/>
            </svg>
         {{ cartCount }}
        </button>
        <transition name="fade">
            <div class="cart-dropdown bg-light shadow" v-if="dropdownIsOpen">
                <h3 v-if="cartCount == 0" class="text-center m-2">No items in cart</h3>
                <table class="table table-sm table-hover">
                    <tbody>
                        <tr v-for="item in this.$root.cart" :key="item.id">
                            <td class="align-middle">
                                <img src="img/hero3.jpg" class="card-img thumbnail" alt="Image">
                            </td>
                            <td class="align-middle">{{ item.title }}</td>
                            <td class="align-middle">${{ item.price }}</td>
                            <td class="align-middle">
                                <button type="button" class="btn" @click="removeFromCart(item)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button v-if="cartCount !== 0" class="btn" @click="clearCart()">Clear</button>
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

<style scoped>
img {
    max-height: 50px;
}

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
    padding: 5px;
    z-index: 9;
}
</style>
