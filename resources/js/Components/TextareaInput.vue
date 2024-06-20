<script setup>
import { onMounted, ref } from 'vue';
import { initFlowbite } from 'flowbite';

defineProps([
    'label',
    'rows',
]);

const model = defineModel({
    type: String,
    required: true,
});

onMounted(() => {
    initFlowbite();
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <div class="mt-4">
        <div class="relative w-full">
            <textarea
                id="textarea"
                :rows="rows"
                v-model="model"
                class="peer block w-full border-0 border-b-2 border-gray-300 bg-transparent resize-none p-0 text-base focus:border-blue-500 focus:ring-0"
                placeholder=" "
            ></textarea>

            <label
                label="textarea"
                class="absolute left-0 top-1 text-gray-600 transition-all duration-300 transform -translate-y-1/2 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:top-6 peer-placeholder-shown:text-base peer-focus:-translate-y-6 peer-focus:top-0 peer-focus:text-sm peer-focus:text-blue-500"
            >
                {{ label }}
            </label>
        </div>
    </div>
</template>