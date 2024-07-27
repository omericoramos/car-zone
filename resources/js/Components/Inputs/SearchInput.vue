<script setup>
import { defineProps } from 'vue';
import SearchIcon from '../Icons/SearchIcon.vue';

defineProps([
    'forLabel',
    'idInput',
    'placeholder'
]);
</script>

<template>
    <div class="flex items-center flex-column md:flex-row flex-wrap mr-4 space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
        <label :for="forLabel" class="sr-only">Pesquisar</label>
        <div class="relative ml-auto">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <SearchIcon />
            </div>
            <input
                type="text"
                :id="idInput"
                class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-[230px] md:w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                :placeholder="placeholder"
            />
        </div>
    </div>
</template>