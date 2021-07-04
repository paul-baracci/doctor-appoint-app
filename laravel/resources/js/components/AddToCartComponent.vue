<template>
  <button type="button" class="btn btn-primary btn-sm" @click="addToCart" :disabled="isProductAdded()">
      {{ isProductAdded() ? 'Added to cart' : 'Add to cart' }}
  </button>
</template>

<script>
export default {
    name: 'AddToCartComponent',
    props: [ 'serviceId' ],
    methods: {
    addToCart() {
      this.$root.addToCart(this.serviceId)
    },
    isProductAdded() {
        return this.$root.isProductAdded(this.serviceId)
    }
  }
}
</script>

<style>
</style>
