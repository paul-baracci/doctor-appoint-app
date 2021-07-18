<template>
    <div>
        <button class="btn shadow bg-white text-primary" @click="OpenCateg()">Categories</button>
    </div>
</template>

<script>
export default {
    name: 'CategoryComponent',
    data() {
        return {
            categoriesAreOpen: false
        }
    },
    methods: {
        OpenCateg() {
            document.getElementById('categ-drop').style.left = "0"
        }
    }
}
</script>

<style></style>
