<script setup>
import TextInput from '@/Components/Inputs/TextInput.vue';
import InputError from '@/Components/Inputs/InputError.vue';
import PhoneInput from '@/Components/Inputs/PhoneInput.vue';
import NumberInput from '@/Components/Inputs/NumberInput.vue';
import ZipcodeInput from '@/Components/Inputs/ZipcodeInput.vue';
import CreateCustomerButton from '@/Components/Buttons/CreateCustomerButton.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    lastname: '',
    email: '',
    phone: '',
    street: '',
    number: '',
    complement: '',
    neighborhood: '',
    citie: '',
    zipcode: '',
});

const submit = () => {
    form.post(route('customers.store'));
};
</script>

<template>
    <!-- Form -->
    <form @submit.prevent="submit" class="bg-white max-w-2xl mx-auto">
        <div class="grid md:grid-cols-2 md:gap-6">
            <div>
                <TextInput
                    nameInput="name"
                    idInput="name"
                    forLabel="name"
                    label="Digite o primeiro nome"
                    v-model="form.name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div>
                <TextInput
                    nameInput="lastname"
                    idInput="lastname"
                    forLabel="lastname"
                    label="Digite o sobrenome"
                    v-model="form.lastname"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div>
                <TextInput 
                    typeInput="email"
                    nameInput="email"
                    idInput="email"
                    forLabel="email"
                    label="Digite o e-mail"
                    v-model="form.email"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div>
                <PhoneInput
                    nameInput="phone"
                    idInput="phone"
                    forLabel="phone"
                    label="Digite o telefone"
                    v-model="form.phone"
                />

                <InputError class="mt-2" :message="form.errors.phone" />
            </div>

            <div>
                <ZipcodeInput
                    nameInput="zipcode"
                    idInput="zipcode"
                    forLabel="zipcode"
                    label="Cep"
                    v-model="form.zipcode"
                />

                <InputError class="mt-2" :message="form.errors.zipcode" />
            </div>

            <div>
                <TextInput
                    nameInput="street"
                    idInput="street"
                    forLabel="street"
                    label="Rua"
                    v-model="form.street"
                />

                <InputError class="mt-2" :message="form.errors.street" />
            </div>

            <div>
                <NumberInput
                    nameInput="number"
                    idInput="number"
                    forLabel="number"
                    label="Número"
                    v-model="form.number"
                />

                <InputError class="mt-2" :message="form.errors.number" />
            </div>

            <div>
                <TextInput
                    nameInput="complement"
                    idInput="complement"
                    forLabel="complement"
                    label="Complemento"
                    v-model="form.complement"
                />

                <InputError class="mt-2" :message="form.errors.complement" />
            </div>

            <div>
                <TextInput
                    nameInput="neighborhood"
                    idInput="neighborhood"
                    forLabel="neighborhood"
                    label="Bairro"
                    v-model="form.neighborhood"
                />

                <InputError class="mt-2" :message="form.errors.neighborhood" />
            </div>

            <div>
                <TextInput
                    nameInput="citie"
                    idInput="citie"
                    forLabel="citie"
                    label="Cidade"
                    v-model="form.citie"
                />

                <InputError class="mt-2" :message="form.errors.citie" />
            </div>
        </div>

        <div class="mt-4">
            <CreateCustomerButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing" />
        </div>
    </form>
</template>