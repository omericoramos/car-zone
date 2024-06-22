<script setup>
import { onMounted, ref } from 'vue';
import { initFlowbite } from 'flowbite';
import UploadFileIcon from '@/Components/Icons/UploadFileIcon.vue';

const model = defineModel({
    multiple: true,
});

onMounted(() => {
    initFlowbite();
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <div class="flex items-center justify-center w-full mt-4">
        <label
            for="dropzone-file"
            class="flex flex-col items-center justify-center w-full h-25 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600"
        >
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                <UploadFileIcon />

                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                    <span class="font-semibold">
                        Clique para carregar imagens
                    </span>
                    ou arraste e solte
                </p>
                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG</p>
            </div>

            <input
                type="file"
                id="dropzone-file"
                class="hidden"
                multiple
            />
        </label>
    </div> 
</template>
