<script setup lang="ts">
  import type { Product } from '~/models'
  import { useProductStore } from '@/stores';
  const { products } = useProductStore();
</script>

<template>
    <div class="bg-red text-white">
        <div class="container mx-auto text-white text-center">
            <div class="text-5xl md:text-7xl md:py-12 hero leading-loose tracking-wide">
                ALL PRODUCTS
            </div>
        </div>
    </div>
    <div class="flex flex-wrap mt-8">
        <Product v-for="product in products.data" :key="product.id" :product="product" />
    </div>
</template>