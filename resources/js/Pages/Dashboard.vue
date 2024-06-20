<script setup>
import { Accordion } from 'flowbite';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import SectionGrid from '@/Components/SectionGrid.vue';

</script>

<template>
    <Head title="Página inicial" />

    <AuthenticatedLayout>
        <SectionGrid>Página inicial</SectionGrid>
    </AuthenticatedLayout>
</template>
