<script setup>
import { onMounted, ref } from 'vue';
import { initFlowbite } from 'flowbite';

defineProps([
    'label',
    'forLabel',
    'nameSelect',
    'idSelect'
]);

const model = defineModel({
    required: true,
});

onMounted(() => {
    initFlowbite();
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <div class="relative z-0 w-full mb-5 group">
        <label :for="forLabel" class="sr-only">{{ label }}</label>

        <select
            :name="nameSelect"
            :id="idSelect"
            class="block py-2.5 px-1 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            v-model="model"
        >
            <slot />
        </select>
    </div>
</template>
