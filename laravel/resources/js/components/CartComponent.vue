<template>
    <div class="text-center">
        <button class="btn btn-outline-primary" @click="dropdownIsOpen = !dropdownIsOpen">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
            </svg>
         {{ cartCount }}
        </button>
        <transition name="fade">
        <div class="cart-dropdown shadow" v-if="dropdownIsOpen">
            <h3 v-if="cartCount == 0" class="text-center">No items in cart</h3>
            <table class="table table-sm table-hover">
                <tbody>
                    <tr v-for="item in this.$root.cart" :key="item.id">
                        <td class="align-middle">
                            <img src="img/hero3.jpg" class="card-img thumbnail" alt="Image">
                        </td>
                        <td class="align-middle">{{ item.title }}</td>
                        <td class="align-middle">${{ item.price }}</td>
                        <td class="align-middle">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16">
                                        <path d="m10.277 5.433-4.031.505-.145.67.794.145c.516.123.619.309.505.824L6.101 13.68c-.34 1.578.186 2.32 1.423 2.32.959 0 2.072-.443 2.577-1.052l.155-.732c-.35.31-.866.434-1.206.434-.485 0-.66-.34-.536-.939l1.763-8.278zm.122-3.673a1.76 1.76 0 1 1-3.52 0 1.76 1.76 0 0 1 3.52 0z"/>
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-danger" @click="removeFromCart(item)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </button>
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
    border: solid 1px lightslategray;
    border-radius: 10px;
    padding: 5px;
    z-index: 9;
}
</style>
