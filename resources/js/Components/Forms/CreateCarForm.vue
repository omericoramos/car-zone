<script setup>
import TextInput from '@/Components/TextInput.vue';
import SelectInput from '@/Components/SelectInput.vue';
import InputError from '@/Components/InputError.vue';
import CreateCustomerButton from '@/Components/Buttons/CreateCustomerButton.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    brand: '',
    title: '',
    carModel: '',
    version: '',
    bodyWork: '',
    engine: '',
    transmission: '',
    fuel: '',
    chassis: '',
    licencePlate: '',
    year: '',
    color: '',
    status: '',
    price: '',
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
                <SelectInput
                    nameSelect="brand"
                    idSelect="brand"
                    forLabel="brand"
                    label="Marca"
                    v-model="form.brand"
                >
                    <option selected>Escolha uma marca</option>
                    <option value="">Nissan</option>
                </SelectInput>

                <InputError class="mt-2" :message="form.errors.brand" />
            </div>

            <div>
                <TextInput 
                    typeInput="text"
                    nameInput="title"
                    idInput="title"
                    forLabel="title"
                    label="Título"
                    v-model="form.title"
                />

                <InputError class="mt-2" :message="form.errors.title" />
            </div>

            <div>
                <SelectInput
                    nameSelect="carModel"
                    idSelect="carModel"
                    forLabel="carModel"
                    label="Modelo"
                    v-model="form.carModel"
                >
                    <option selected>Escolha um modelo</option>
                    <option value="">Nissan</option>
                </SelectInput>

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div>
                <SelectInput
                    nameSelect="version"
                    idSelect="version"
                    forLabel="version"
                    label="Versão"
                    v-model="form.version"
                >
                    <option selected>Escolha uma versão</option>
                    <option value="">Nissan</option>
                </SelectInput>

                <InputError class="mt-2" :message="form.errors.version" />
            </div>

            <div>
                <SelectInput
                    nameSelect="bodyWork"
                    idSelect="bodyWork"
                    forLabel="bodyWork"
                    label="Carroceria"
                    v-model="form.bodyWork"
                >
                    <option selected>Escolha uma carroceria</option>
                    <option value="">Nissan</option>
                </SelectInput>

                <InputError class="mt-2" :message="form.errors.bodyWork" />
            </div>

            <div>
                <SelectInput
                    nameSelect="engine"
                    idSelect="engine"
                    forLabel="engine"
                    label="Motor"
                    v-model="form.engine"
                >
                    <option selected>Escolha um motor</option>
                    <option value="">Nissan</option>
                </SelectInput>

                <InputError class="mt-2" :message="form.errors.engine" />
            </div>

            <div>
                <SelectInput
                    nameSelect="transmission"
                    idSelect="transmission"
                    forLabel="transmission"
                    label="Transmissão"
                    v-model="form.transmission"
                >
                    <option selected>Escolha uma transmissão</option>
                    <option value="">Nissan</option>
                </SelectInput>

                <InputError class="mt-2" :message="form.errors.transmission" />
            </div>

            <div>
                <SelectInput
                    nameSelect="fuel"
                    idSelect="fuel"
                    forLabel="fuel"
                    label="Combustível"
                    v-model="form.fuel"
                >
                    <option selected>Escolha um tipo de combustível</option>
                    <option value="">Nissan</option>
                </SelectInput>

                <InputError class="mt-2" :message="form.errors.fuel" />
            </div>

            <div>
                <TextInput
                    typeInput="text"
                    nameInput="chassis"
                    idInput="chassis"
                    forLabel="chassis"
                    label="Chassis"
                    v-model="form.chassis"
                />

                <InputError class="mt-2" :message="form.errors.chassis" />
            </div>

            <div>
                <TextInput
                    typeInput="text"
                    nameInput="licencePlate"
                    idInput="licencePlate"
                    forLabel="licencePlate"
                    label="Placa"
                    v-model="form.licencePlate"
                />

                <InputError class="mt-2" :message="form.errors.licencePlate" />
            </div>

            <div>
                <TextInput
                    typeInput="text"
                    nameInput="year"
                    idInput="year"
                    forLabel="year"
                    label="Ano"
                    v-model="form.year"
                />

                <InputError class="mt-2" :message="form.errors.year" />
            </div>

            <div>
                <SelectInput
                    nameSelect="color"
                    idSelect="color"
                    forLabel="color"
                    label="Cor"
                    v-model="form.color"
                >
                    <option selected>Escolha uma cor</option>
                    <option value="">Nissan</option>
                </SelectInput>

                <InputError class="mt-2" :message="form.errors.color" />
            </div>

            <div>
                <TextInput
                    typeInput="text"
                    nameInput="price"
                    idInput="price"
                    forLabel="price"
                    label="Preço"
                    v-model="form.price"
                />

                <InputError class="mt-2" :message="form.errors.price" />
            </div>
        </div>

        <div class="mt-4">
            <CreateCustomerButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing" />
        </div>
    </form>
</template>