<script setup>
defineProps([
    'title'
]);
</script>

<template>
    <div class="lg:ml-10 mb-4">
        <p class="text-xl text-gray-900 dark:text-white">{{ title }}</p>
    </div>
</template>