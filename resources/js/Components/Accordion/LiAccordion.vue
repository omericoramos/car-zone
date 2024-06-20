<script setup>
import { Link } from '@inertiajs/vue3';

defineProps([
    'link',
]);

</script>

<template>
    <li>

        <Link :href="route( `${link}` )"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
        <slot />
        </Link>
    </li>
</template>