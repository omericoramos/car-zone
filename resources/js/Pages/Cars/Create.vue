<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import SectionGrid from '@/Components/SectionGrid.vue';
import CreateCarForm from '@/Components/Forms/CreateCarForm.vue';
import Title from '@/Components/Title.vue';
import { Head } from '@inertiajs/vue3';

defineProps(['brands'])
</script>

<template>
    <Head title="Cadastrar carro" />

    <AuthenticatedLayout>
        <SectionGrid>
            <Title title="Cadastrar carro" />
            <CreateCarForm :brands="brands" />
        </SectionGrid>
    </AuthenticatedLayout>
</template>