<script setup>
import { usePage } from '@inertiajs/vue3';

const user = usePage().props.auth.user;
</script>

<template>
    <div>
        <h1 class="text-xl text-gray-600 dark:text-white">
            Seja bem-vindo | <span class="text-2xl">{{ user.name }}</span>
        </h1>
    </div>
</template>