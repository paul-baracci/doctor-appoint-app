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
      return ('alert-' + this.messageInfo.type );
    }
  },
  data() {
    return {
      alert: 'alert',
        messageInfo: 'default'
    }
  },
  mounted() {
      this.messageInfo = JSON.parse(this.type)
      console.log(this.messageInfo);

  }
}
</script>
<style>
.fade-enter-active, .fade-leave-active {
    transition: opacity .3s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
    opacity: 0;
}
.alert {
  margin: 1.25rem;
  position: fixed;
  right: 10px;
  padding: 1.25rem;
  z-index: 1;
  border: 1px solid transparent;
  border-radius: .45rem;
  align-content: center;
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
