<script setup>
import { Accordion } from 'flowbite';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import SectionGrid from '@/Components/SectionGrid.vue';
import CreateEmployerForm from '@/Components/Forms/CreateEmployerForm.vue';
import Title from '@/Components/Title.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Cadastrar cliente" />

    <AuthenticatedLayout>
        <SectionGrid>
            <Title title="Cadastrar funcionário" />
            
            <CreateEmployerForm />
        </SectionGrid>
    </AuthenticatedLayout>
</template>