<script setup lang="ts">
  import type { User, Product } from '~/models'
  import { useUserStore, useProductStore } from '@/stores';

  const { setUser } = useUserStore();
  const { setProducts } = useProductStore();

  const [ { data: userData}, {data: productData} ] = await Promise.all([useApi<User>('/api/user'), useApi<Product>('/api/products')]);

  setUser( userData );
  setProducts( productData );

</script>
<template>
  <Header />
  <ProductList />
</template>
