import { defineStore } from 'pinia'
import type { Product } from '~/models/product'

export const useProductStore = defineStore('product', () => {
  const data = ref<Product[]>()
  const products = computed(()=>data.value);
  function setProducts(u: Product[]) {
    data.value = u;
  }
  return { products, setProducts }
})