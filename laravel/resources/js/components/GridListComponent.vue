<template>
    <div class="btn-group">
        <button type="button" @click="listView()" class="btn btn-outline-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </button>
        <button type="button" @click="gridView()" class="btn btn-outline-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
            </svg>
        </button>
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
