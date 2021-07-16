<template>
        <div class="top-scroll" id="scroll" @click="ScrollUp()">
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
            </svg>
        </div>
</template>
<script>
export default {
    name: 'TopScrollComponent',
    mounted() {
            window.addEventListener("scroll", () => {
                document.getElementById('scroll').classList.add('show');
            });
    },
    methods: {
        ScrollUp() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        },
    }
}
</script>
<style scoped>
.top-scroll {
    position: fixed;
    bottom: 42px;
    right: 42px;
    z-index: 2;
    cursor: pointer;
    /* hide with opacity */
    opacity: 0;
    transform: translateY(100px);
    transition: all .8s ease;
    border-radius: 50%;
    box-shadow: 0px 0px 20px gray!important;
}
.show {
    opacity: 1;
    transform: translateY(0)
}
</style>
