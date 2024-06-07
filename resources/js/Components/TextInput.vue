<script setup>
import { onMounted, ref } from 'vue';
import { initFlowbite } from 'flowbite';

defineProps(['icon']);

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
    initFlowbite();
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <!-- <div {{icon}}></div> -->
    hsaushu
    
    <input
        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        v-model="model"
        ref="input"
    />
    
</template>
