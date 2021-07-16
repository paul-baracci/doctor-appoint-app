<template>
    <div :class="[alert, alertType]">
        <span class="closebtn mx-2" onclick="this.parentElement.style.display='none';">&times;</span>
        {{ messageInfo ? messageInfo.message : '' }}
    </div>
</template>
<script>
export default {
    name: "Alert",
    props: {
        type: {
            type: String,
            required: true
            // validator: function (value) {
            //   return ['info', 'success', 'danger', 'warning'].indexOf(value) !== -1;
            // }
        }
    },
    computed: {
        alertType() {
            return ('alert-' + this.messageInfo.type);
        }
    },
    data() {
        return {
            alert: 'alert',
            messageInfo: 'default'
        }
    },
    mounted() {
        this.messageInfo = JSON.parse(this.type);
        // document.getElementById('alert').classList.add('slide');
    },
    methods: {
        CloseAlert() {
            document.getElementById('alert').classList.add('closed');
        }
    }
}
</script>
<style>

.alert {
    margin: 1.25rem;
    position: fixed;
    right: 10px;
    padding: 1.25rem;
    z-index: 1;
    border: 1px solid transparent;
    border-radius: 100px;
    align-content: center;
    animation-duration: 0.5s;
    animation-name: slidein;
}

@keyframes slidein {
    from {
        right: -200px;
    }

    and {
        right: 10px;
    }
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}

.alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba;
}

.alert-info {
    color: #0c5460;
    background-color: #d1ecf1;
    border-color: #bee5eb;
}

.closebtn {
    float: right;
    cursor: pointer;
}
</style>
@endsection
