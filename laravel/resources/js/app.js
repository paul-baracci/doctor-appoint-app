import Vue from "vue";
import Alert from "./components/Alert.vue";
import CartComponent from "./components/CartComponent.vue";
import AddToCartComponent from "./components/AddToCartComponent.vue";
import GridListComponent from "./components/GridListComponent";
import TopScrollComponent from "./components/TopScrollComponent";
import CategoryComponent from "./components/CategoryComponent";
require('./bootstrap');

Vue.component('alert', Alert);
Vue.component('cart', CartComponent);
Vue.component('addToCart', AddToCartComponent);
Vue.component('gridList', GridListComponent);
Vue.component('topScroll', TopScrollComponent);
Vue.component('category', CategoryComponent);

const app = new Vue({
    el: '#app',
    data() {
        return {
            cart: []
        }
    },
    mounted() {
        // Product carousel
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

            const itemWidth = container.clientWidth / slidesVisible + 10 ;
            const movePosition = slidesOnScroll * itemWidth;

            items.forEach((item) => {
                item.style.minWidth = `${container.clientWidth / slidesVisible}px`;
                item.style.marginRight = '10px';
                item.style.border = '0';
                window.addEventListener("resize", () => {
                    item.style.minWidth = `${container.clientWidth / slidesVisible}px`;
                });
            });

            prevBtn.addEventListener('click', () => {
                const itemsLeft = Math.abs(position) / itemWidth;
                position += itemsLeft >= slidesOnScroll ? movePosition : itemsLeft * itemWidth;
                setPosition();
                checkBtns();
            });
            nextBtn.addEventListener('click', () => {
                const itemsLeft = itemCount - (Math.abs(position) + slidesVisible * itemWidth) / itemWidth;
                const reachedEnd = -(itemCount/2 - slidesVisible) * itemWidth;

                if (position <= reachedEnd) {
                    position = 0;
                } else {
                    position -= itemsLeft >= slidesOnScroll ? movePosition : itemsLeft * itemWidth;
                }
                
                setPosition();
                checkBtns();
            });

            const setPosition = () => {
                track.style.transform = `translateX(${position}px)`;
            };

            const checkBtns = () => {
                prevBtn.disabled = position === 0;
                // Uncomment the follwing line to disable next button when the final slide is reached
                // nextBtn.disabled = position <= -(itemCount/2 - slidesVisible) * itemWidth;
            };

            checkBtns();
        }
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
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

