<template>
    <div class="text-center">
        <button class="btn btn-outline-success" @click="dropdownIsOpen = !dropdownIsOpen">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg>
         {{ cartCount }}
        </button>
        <transition name="fade">
            <div class="cart-dropdown shadow p-4 m-2" v-if="dropdownIsOpen">
                <h3 v-if="cartCount == 0" class="text-center m-4">Favorites is empty...</h3>
                <table class="table table-sm table-hover">
                    <tbody>
                        <tr v-for="item in this.$root.cart" :key="item.id" @click="clicked(item)">
                            <td class="align-middle">
                                <img :src=item.image class="card-img thumbnail" alt="Image">
                            </td>
                            <td class="align-middle">{{ item.title }}</td>
                            <td class="align-middle text-right">${{ item.price }}</td>
                            <td class="align-middle">
                                <button type="button" class="btn" @click="removeFromCart(item, $event)">
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
        removeFromCart(item, event) {
	        event.stopPropagation();
	        this.$root.cart.splice(this.$root.cart.indexOf(item), 1)
            localStorage.setItem('cart', JSON.stringify(this.$root.cart));
        },
        clicked(item) {
	        window.location = '/services/' + item.id ;
        }
    }
};
</script>

<style scoped>
img {
    max-height: 50px;
}

tr {
    cursor: pointer;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity .3s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
.cart-dropdown {
    position: absolute;
    background-color: white;
    top: 100%;
    border-radius: 15px;
    right:  5px;
    padding: 5px;
    z-index: 9;
}
</style>
