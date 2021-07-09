<template>
    <div class="btn-group">
        <button type="button" @click="listView()" class="btn btn-outline-primary">List</button>
        <button type="button" @click="gridView()" class="btn btn-outline-primary">Grid</button>
    </div>
</template>

<script>
export default {
    name: "GridListComponent",
    mounted() {
        if (sessionStorage.getItem('view') == 'grid') {
            document.getElementById("viewType").classList.add("grid");
        }
    },
    methods: {
        listView() {
            document.getElementById("viewType").classList.remove("grid");
            sessionStorage.setItem('view', 'list');
        },
        gridView() {
            document.getElementById("viewType").classList.add("grid");
            sessionStorage.setItem('view', 'grid');
        }
    }
}
</script>

<style>
.thumbnail {
    height: auto;
    max-width: 20rem;
}
#viewType {
    display: grid;
    grid-template-columns: 100%;
    justify-content: center;
}
#viewType.grid {
    grid-template-columns: 50% 50%;
    margin: 10px;
}
@media only screen and (min-width: 990px) {

    #viewType.grid { 
        grid-template-columns: 30% 30% 30%; 
        margin: 10px;
    }
}
</style>
