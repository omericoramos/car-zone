<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import SectionGrid from '@/Components/SectionGrid.vue';
import Title from '@/Components/Title.vue';
import ListCarsTable from '@/Components/Tables/ListCarsTable.vue';
import { Head } from '@inertiajs/vue3';

defineProps(['brands'])
</script>

<template>
    <Head title="Lista de carros" />

    <AuthenticatedLayout>
        <SectionGrid>
            <Title title="Lista de carros" />
            <ListCarsTable />
        </SectionGrid>
    </AuthenticatedLayout>
</template>