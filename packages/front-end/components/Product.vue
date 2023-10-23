<script setup lang="ts">
    import type { Product } from '~/models'
    const props = defineProps({
        product: {
            type: Object as PropType<Product>,
            required: true
        }
    })
</script>
<template>
    <div class="mb-4 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2">
        <div class="border border-grey cursor-pointer rounded-lg hover:shadow w-full">
            <div class="px-4 pt-6">
                <div class="h-64">
                    <div class="h-full bg-center bg-contain bg-no-repeat" :style="`background-image: url(https://cataas.com/cat?c=${product.id})`"></div>
                </div>
                <div class="text-center text-blue font-bold text-lg px-4 mt-8 h-24 line-clamp-2">
                    {{ product.name }}
                </div>
                <div class="flex pb-2">
                    <div class="w-1/2"></div>
                    <div class="text-xl font-black w-1/2">
                        <div class="inline-block grid justify-end">
                            <div class="text-sm">
                                from
                            </div> 
                            <div class="text-red text-3xl font-bold">
                                ${{ product.price }}
                            </div> 
                            <div class="text-xs">
                                <div> / carton</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>