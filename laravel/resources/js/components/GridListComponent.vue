<template>
    <div>
        <button type="button" @click="listView()" id="lst" class="btn btn-custom bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#007bff" class="bi bi-list-ul"
                 viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            </svg>
        </button>
        <button type="button" @click="gridView()" id="grd" class="btn btn-custom bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#007bff" class="bi bi-grid-3x2-gap"
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
            document.getElementById("grd").classList.add("disabled");
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
            document.getElementById("grd").classList.add("shadow");
            document.getElementById("grd").classList.remove("disabled");
            sessionStorage.setItem('view', 'grid');
        }
    }
}
</script>

<style>
.shadow {
    box-shadow: 0 0 20px #c4c5c7!important;
    -webkit-box-shadow: 0 0 20px #c4c5c7 !important;
}
#viewType {
    display: grid;
    grid-template-columns: 100%;
    justify-content: center;
    transition: .5s;
}

#viewType .card-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-right: 2rem;
}
#viewType.grid .card-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-right: 0;
    margin-bottom: .5rem;
    justify-content: center;

}
#viewType .price-schedule {
    display: flex;
    flex-direction: column;
    margin-left: 0;
    text-align: center;
}
#viewType .title-description {
    display: flex;
    flex-direction: column;
}
#viewType.grid .title-description {
    justify-content: center;
    margin: 0;
}
#viewType.grid .price-schedule {
    text-align: center;
    margin: .5rem;
}

#viewType.grid {
    grid-template-columns: 50% 50%;
    text-align: center;
    margin: .2rem;
    transition: .5;
}

#viewType .thumbnail {
    object-fit: cover;
    max-width: 12rem;
}
#viewType.grid .thumbnail {
    max-width: 23.5rem;
    max-height: 12rem;
}

@media only screen and (min-width: 768px) {

    #viewType.grid {
        grid-template-columns: 30% 30% 30%;
        transition: all .5s ease;
    }
    #viewType .card-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-right: 0.5rem;
    }
    #viewType.grid .card-inner {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-right: 0;
        justify-content: center;
    }
    #viewType .price-schedule {
        display: flex;
        flex-direction: column;
        margin-left: auto;
        text-align: center;
    }
    #viewType .thumbnail {
        max-width: 14rem;
    }
    #viewType.grid .thumbnail {
        max-width: 18rem;
    }
    #viewType .title-description {
        display: flex;
        flex-direction: column;
    }
    #viewType.grid .title-description {
        justify-content: center;
    }
    #viewType.grid .price-schedule {
        text-align: center;
    }
}
</style>
