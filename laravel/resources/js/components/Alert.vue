<template>
  <transition name="fade">
      <div :class="[alert, alertType]">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ messageInfo ? messageInfo.message : '' }}
      </div>
  </transition>
</template>
<script>
export default {
  name: "Alert",
  props: {
    type: {
      type: String,
      required: true,
      validator: function (value) {
        // return ['info', 'success', 'danger', 'warning'].indexOf(value) !== -1;
        return true;
      }
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
  margin-left: auto;
  margin-right: auto;
  position: relative;
  padding: .75rem 1.25rem;
  margin-bottom: 1rem;
  max-width: 40rem;
  border: 1px solid transparent;
  border-radius: .45rem;
  align-content: center;
  transition: all 0.5s ease;
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
