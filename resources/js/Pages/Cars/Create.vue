<script setup>
import { Accordion } from 'flowbite';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import SectionGrid from '@/Components/SectionGrid.vue';
import CreateCarForm from '@/Components/Forms/CreateCarForm.vue';
import Title from '@/Components/Title.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Cadastrar carro" />

    <AuthenticatedLayout>
        <SectionGrid>
            <Title title="Cadastrar carro" />
            
            <CreateCarForm />
        </SectionGrid>
    </AuthenticatedLayout>
</template>