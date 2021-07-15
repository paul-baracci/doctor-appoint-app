<template>
        <div class="top-scroll" id="scroll" @click="ScrollUp()">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="purple" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
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
    transition: all .8s ease

}
.show {
    opacity: 1;
    transform: translateY(0)
}
</style>
