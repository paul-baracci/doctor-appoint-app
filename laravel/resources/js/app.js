import Vue from "vue";
import Alert from "./components/Alert.vue";
import CartComponent from "./components/CartComponent.vue";
import AddToCartComponent from "./components/AddToCartComponent.vue";
import GridListComponent from "./components/GridListComponent";
import TopScrollComponent from "./components/TopScrollComponent";

require('./bootstrap');

Vue.component('alert', Alert);
Vue.component('cart', CartComponent);
Vue.component('addToCart', AddToCartComponent);
Vue.component('gridList', GridListComponent);
Vue.component('topScroll', TopScrollComponent);

const app = new Vue({
    el: '#app',
    data() {
        return {
            cart: []
        }
    },
    mounted() {
        if (window.location.href === 'http://localhost:880/') {
            let position = 0;
            const slidesVisible = 3;
            const slidesOnScroll = 1;
            const container = document.querySelector('.slider-container');
            const track = document.querySelector('.slider-track');
            const prevBtn = document.querySelector('.btn-prev');
            const nextBtn = document.querySelector('.btn-next');
            const items = document.querySelectorAll('.slider-item');
            const itemCount = items.length;
            const itemWidth = container.clientWidth / slidesVisible + 5;
            const movePosition = slidesOnScroll * itemWidth;

            items.forEach((item) => {
                item.style.minWidth = `${container.clientWidth / slidesVisible}px`;
                item.style.marginRight = '5px';
                item.style.border = '0';
                window.addEventListener("resize", () => {
                    item.style.minWidth = `${container.clientWidth / slidesVisible}px`;
                });
            });

            prevBtn.addEventListener('click', () => {
                const itemsLeft = Math.abs(position) / container.clientWidth;
                position += itemsLeft >= slidesOnScroll ? movePosition : itemsLeft * container.clientWidth;

                setPosition();
                checkBtns();
            });
            nextBtn.addEventListener('click', () => {
                const itemsLeft = itemCount - (Math.abs(position) + slidesVisible * container.clientWidth) / container.clientWidth;
                position -= itemsLeft >= slidesOnScroll ? movePosition : itemsLeft * container.clientWidth;

                setPosition();
                checkBtns();
            });

            const setPosition = () => {
                track.style.transform = `translateX(${position}px)`;
            };

            const checkBtns = () => {
                prevBtn.disabled = position === 0;
                nextBtn.disabled = position <= -(itemCount - slidesVisible) * itemWidth;
            };

            checkBtns();
        }
    },
    methods: {
        addToCart(serviceObject) {
            if(!this.isProductAdded(serviceObject)) {
                this.cart.unshift(serviceObject);
                localStorage.setItem('cart', JSON.stringify(this.cart));
            }
        },
        isProductAdded(serviceObject) {
            if (this.cart.length === 0) {
                 return false;
            }
            return this.cart.some(service => service.id === serviceObject.id);
        }
    }
});


