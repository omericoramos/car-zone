<script setup>
import TextInput from '@/Components/Inputs/TextInput.vue';
import InputError from '@/Components/Inputs/InputError.vue';
import CreateCustomerButton from '@/Components/Buttons/CreateCustomerButton.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
});

const submit = () => {
    form.post(route('customers.store'));
};
</script>

<template>
    <!-- Form -->
    <form @submit.prevent="submit" class="bg-white max-w-2xl mx-auto">
        <div>
            <TextInput
                nameInput="name"
                idInput="name"
                forLabel="name"
                label="Digite o nome"
                v-model="form.name"
            />

            <InputError class="mt-2" :message="form.errors.name" />
        </div>

        <div class="mt-4">
            <CreateCustomerButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing" />
        </div>
    </form>
</template>