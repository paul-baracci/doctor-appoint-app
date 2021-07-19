<template>
    <div :class="[alert, alertType]">
        <div class="closebtn mx-2" @click="CloseAlert()">&times;</div>
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
    },
    methods: {
        CloseAlert() {
            document.getElementById('alert').style.right = "-750px";
        }
    }
}
</script>
<style>

.alert {
    position: fixed;
    right: 10px;
    z-index: 9;
    padding: 1.25rem;
    border: 1px solid transparent;
    border-radius: 100px;
    animation-duration: 0.5s;
    animation-name: slidein;
    transition: .5s;
}

@keyframes slidein {
    from {
        right: -700px;
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
