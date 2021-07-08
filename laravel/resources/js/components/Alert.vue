<template>
  <div :class="[alert, alertType]">
  <span class="btn closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <slot></slot>
  </div>
</template>
<script>
export default {
  name: "Alert",
  props: {
    type: {
      type: String,
      required: true,
      validator: function (value) {
        return ['info', 'success', 'danger', 'warning'].indexOf(value) !== -1;
      }
    }
  },
  computed: {
    alertType() {
      return ('alert-' + this.type );
    }
  },
  data() {
    return {
      alert: 'alert',
    }
  }
}
</script>
<style scoped>
.alert {
  margin-left: auto;
  margin-right: auto;
  position: relative;
  padding: .75rem 1.25rem;
  margin-bottom: 1rem;
  max-width: 40rem;
  border: 1px solid transparent;
  border-radius: .45rem;
  align-items: center;
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
  transition: 0.3s;
  float: right;
  font-size: 22px;
  line-height: 20px;
}
</style>
@endsection
