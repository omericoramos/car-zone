<script setup>
import { onMounted, ref } from 'vue';
import { initFlowbite } from 'flowbite';
import PhotoIcon from '@/Components/Icons/PhotoIcon.vue';

const imageUrl = ref('');

onMounted(() => {
initFlowbite();
});

const handleFileChange = (event) => {
const file = event.target.files[0];
if (file) {
    if (!file.type.startsWith('image/')) {
    alert('Please upload an image file.');
    return;
    }

    imageUrl.value = URL.createObjectURL(file);

    // enviar o arquivo para o backend neste ponto
}
};
</script>

<template>
    <div class="flex items-center justify-center w-full mt-4">
      <label
        for="dropzone-file"
        class="flex flex-col items-center justify-center w-40 h-25 border-2 border-gray-300 border-dashed rounded-full cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600"
      >
        <div v-if="!imageUrl" class="flex flex-col items-center justify-center pt-5 pb-6">
          <PhotoIcon />
        </div>

        <img
          v-else
          :src="imageUrl"
          class="w-40 h-25 rounded-full"
        />
  
        <input
          type="file"
          id="dropzone-file"
          class="hidden"
          @change="handleFileChange"
        />
      </label>
    </div>
  </template>
  