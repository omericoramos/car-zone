<script setup>
import TextInput from '@/Components/TextInput.vue';
import SelectInput from '@/Components/SelectInput.vue';
import InputError from '@/Components/InputError.vue';
import CreateCustomerButton from '@/Components/Buttons/CreateCustomerButton.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    firstname: '',
    lastname: '',
    email: '',
    phone: '',
    street: '',
    number: '',
    complement: '',
    neighborhood: '',
    citie: '',
    zipcode: '',
    salary: '',
    position: '',
});

const submit = () => {
    form.post(route('customers.store'));
};
</script>

<template>
    <!-- Form -->
    <form @submit.prevent="submit" class="bg-white max-w-lg mx-auto">
        <div class="grid md:grid-cols-2 md:gap-6">
            <div>
                <TextInput 
                    typeInput="text"
                    nameInput="firstname"
                    idInput="firstname"
                    forLabel="firstname"
                    label="Digite o primeiro nome"
                    required
                    v-model="form.firstname"
                />

                <InputError class="mt-2" :message="form.errors.firstname" />
            </div>

            <div>
                <TextInput 
                    typeInput="text"
                    nameInput="lastname"
                    idInput="lastname"
                    forLabel="lastname"
                    label="Digite o sobrenome"
                    required
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
                    required
                    v-model="form.email"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div>
                <TextInput 
                    typeInput="tel"
                    nameInput="phone"
                    idInput="phone"
                    forLabel="phone"
                    label="Digite o telefone"
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                    required
                    v-model="form.phone"
                />

                <InputError class="mt-2" :message="form.errors.phone" />
            </div>

            <div>
                <TextInput 
                    typeInput="text"
                    nameInput="salary"
                    idInput="salary"
                    forLabel="salary"
                    label="Digite o salário"
                    required
                    v-model="form.salary"
                />

                <InputError class="mt-2" :message="form.errors.salary" />
            </div>

            <div>
                <SelectInput 
                    nameSelect="position"
                    idSelect="position"
                    forLabel="position"
                    label="Digite o telefone"
                    required
                    v-model="form.position"
                >
                    <option selected>Selecione uma posição</option>
                    <option value="1">Gerente</option>
                </SelectInput>

                <InputError class="mt-2" :message="form.errors.position" />
            </div>

            <div>
                <TextInput
                    typeInput="text"
                    nameInput="street"
                    idInput="street"
                    forLabel="street"
                    label="Rua"
                    required
                    v-model="form.street"
                />

                <InputError class="mt-2" :message="form.errors.street" />
            </div>

            <div>
                <TextInput
                    typeInput="text"
                    nameInput="number"
                    idInput="number"
                    forLabel="number"
                    label="Número"
                    required
                    v-model="form.number"
                />

                <InputError class="mt-2" :message="form.errors.number" />
            </div>

            <div>
                <TextInput
                    typeInput="text"
                    nameInput="complement"
                    idInput="complement"
                    forLabel="complement"
                    label="Complemento"
                    required
                    v-model="form.complement"
                />

                <InputError class="mt-2" :message="form.errors.complement" />
            </div>

            <div>
                <TextInput
                    typeInput="text"
                    nameInput="neighborhood"
                    idInput="neighborhood"
                    forLabel="neighborhood"
                    label="Bairro"
                    required
                    v-model="form.neighborhood"
                />

                <InputError class="mt-2" :message="form.errors.neighborhood" />
            </div>

            <div>
                <TextInput
                    typeInput="text"
                    nameInput="citie"
                    idInput="citie"
                    forLabel="citie"
                    label="Cidade"
                    required
                    v-model="form.citie"
                />

                <InputError class="mt-2" :message="form.errors.citie" />
            </div>

            <div>
                <TextInput
                    typeInput="text"
                    nameInput="zipcode"
                    idInput="zipcode"
                    forLabel="zipcode"
                    label="Cep"
                    required
                    v-model="form.zipcode"
                />

                <InputError class="mt-2" :message="form.errors.zipcode" />
            </div>
        </div>

        <div class="mt-4">
            <CreateCustomerButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing" />
        </div>
    </form>
</template>