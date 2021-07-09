<template>
  <button type="button" class="btn btn-primary btn-sm" @click="addToCart" :disabled="isProductAdded()">
      {{ isProductAdded() ? 'Added to cart' : 'Add to cart' }}
  </button>
</template>

<script>
export default {
    name: 'AddToCartComponent',
    props: [ 'serviceObject' ],
    methods: {
    addToCart() {
      this.$root.addToCart(this.serviceObject)
    },
    isProductAdded() {
        return this.$root.isProductAdded(this.serviceObject)
    }
  }
}
</script>

<style>
</style>
