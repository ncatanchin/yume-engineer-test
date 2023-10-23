<script setup lang="ts">
  import { useUserStore } from '@/stores/userStore';
  const { user } = useUserStore();
</script>
<template>
  {{ user }}
</template>
