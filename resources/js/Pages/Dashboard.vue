<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DashboardInformation from '@/Components/DashboardInformation.vue';
import { Head } from '@inertiajs/vue3';
import SectionGrid from '@/Components/SectionGrid.vue';

</script>

<template>
    <Head title="Página inicial" />

    <AuthenticatedLayout>
        <SectionGrid>
            <DashboardInformation />
        </SectionGrid>
    </AuthenticatedLayout>
</template>
