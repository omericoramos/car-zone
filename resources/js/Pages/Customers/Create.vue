<script setup>
import { Accordion } from 'flowbite';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import SectionGrid from '@/Components/SectionGrid.vue';
import CreateCustomerForm from '@/Components/Forms/CreateCustomerForm.vue';
import Title from '@/Components/Title.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Cadastrar cliente" />

    <AuthenticatedLayout>
        <SectionGrid>
            <Title title="Cadastrar cliente" />
            
            <CreateCustomerForm />
        </SectionGrid>
    </AuthenticatedLayout>
</template>