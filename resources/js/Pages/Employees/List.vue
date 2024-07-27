<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import SectionGrid from '@/Components/SectionGrid.vue';
import Title from '@/Components/Title.vue';
import ListEmployeesTable from '@/Components/Tables/ListEmployeesTable.vue';
import { Head } from '@inertiajs/vue3';

defineProps(['brands'])
</script>

<template>
    <Head title="Lista de funcionários" />

    <AuthenticatedLayout>
        <SectionGrid>
            <Title title="Lista de funcionários" />
            <ListEmployeesTable />
        </SectionGrid>
    </AuthenticatedLayout>
</template>