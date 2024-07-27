<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import SectionGrid from '@/Components/SectionGrid.vue';
import Title from '@/Components/Title.vue';
import ListCustomersTable from '@/Components/Tables/ListCustomersTable.vue';
import { Head } from '@inertiajs/vue3';

defineProps(['brands'])
</script>

<template>
    <Head title="Lista de clientes" />

    <AuthenticatedLayout>
        <SectionGrid>
            <Title title="Lista de clientes" />
            <ListCustomersTable />
        </SectionGrid>
    </AuthenticatedLayout>
</template>