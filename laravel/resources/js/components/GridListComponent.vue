<template>
    <div>
        <button type="button" @click="listView()" id="lst" class="btn bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#007bff" class="bi bi-list-ul"
                 viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            </svg>
        </button>
        <button type="button" @click="gridView()" id="grd" class="btn bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#007bff" class="bi bi-grid-3x2-gap"
                 viewBox="0 0 16 16">
                <path
                    d="M4 4v2H2V4h2zm1 7V9a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 5V9a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V4a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 4v2H7V4h2zm5 0h-2v2h2V4zM4 9v2H2V9h2zm5 0v2H7V9h2zm5 0v2h-2V9h2zm-3-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V4zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-2z"/>
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
            document.getElementById("grd").classList.remove("disabled");
            document.getElementById("lst").classList.add("disabled");
            document.getElementById("grd").classList.add("shadow");
        } else {
            document.getElementById("lst").classList.remove("disabled");
            document.getElementById("grd").classList.add("disabled")
            document.getElementById("lst").classList.add("shadow");
        }
    },
    methods: {
        listView() {
            document.getElementById("viewType").classList.remove("grid");
            document.getElementById("grd").classList.add("disabled");
            document.getElementById("grd").classList.remove("shadow");
            document.getElementById("lst").classList.add("shadow");
            document.getElementById("lst").classList.remove("disabled");
            sessionStorage.setItem('view', 'list');
        },
        gridView() {
            document.getElementById("viewType").classList.add("grid");
            document.getElementById("lst").classList.add("disabled");
            document.getElementById("lst").classList.remove("shadow");
            document.getElementById("grd").classList.add("shadow-lg");
            document.getElementById("grd").classList.remove("disabled");
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
    transition: all 0.5s ease;
}

#viewType .price-caption {
    position: absolute;
    float: right;
    right: 5px;
    bottom: 75%;
    margin: 5px;
}

#viewType.grid {
    grid-template-columns: 50% 50%;
    text-align: center;
    margin: 1px;
    transition: all 0.5s ease;
}

#viewType.grid .price-caption {
    position: relative;
    bottom: 0;
    right: 0;
}

@media only screen and (min-width: 1000px) {
    #viewType.price-caption {
        bottom: 50%;
    }

    #viewType.grid {
        grid-template-columns: 30% 30% 30%;
        transition: all 0.5s ease;
    }

    #viewType.grid .price-caption {
        position: relative;
    }
}
</style>
