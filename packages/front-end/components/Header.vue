<script setup lang="ts">
  import { useUserStore } from '@/stores/userStore';
  const { user } = useUserStore();
</script>
<template>
  <div role="banner" class="text-white bg-red">
    <div class="sm:container mx-auto">
        <div class="flex justify-between items-center sm:items-start pt-4 pb-2 md:py-6 lg:py-4">
            <div class="w-24 md:w-36 md:pr-4 pl-4 sm:pl-0">
                <a href="/" class="inline">
                    <img src="@/assets/img/yume-logo-white-RGB.png" alt="" class="inline-block">
                </a>
            </div>
            <div class="w-24 md:w-36 md:pr-4 pl-4 sm:pl-0">
                <h1>Hi {{ user?.data.name }}!</h1>
            </div>
          </div>
      </div>
  </div>
</template>
