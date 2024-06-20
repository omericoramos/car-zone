<script setup>
import { Accordion } from 'flowbite';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import SectionGrid from '@/Components/SectionGrid.vue';
import CreatePositionForm from '@/Components/Forms/CreatePositionForm.vue';
import Title from '@/Components/Title.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Cadastrar cargo" />

    <AuthenticatedLayout>
        <SectionGrid>
            <Title title="Cadastrar cargo" />
            
            <CreatePositionForm />
        </SectionGrid>
    </AuthenticatedLayout>
</template>