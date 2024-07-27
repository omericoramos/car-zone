<script setup>
import TextInput from '@/Components/Inputs/TextInput.vue';
import InputError from '@/Components/Inputs/InputError.vue';
import PhoneInput from '@/Components/Inputs/PhoneInput.vue';
import NumberInput from '@/Components/Inputs/NumberInput.vue';
import ZipcodeInput from '@/Components/Inputs/ZipcodeInput.vue';
import ImageInput from '@/Components/Inputs/ImageInput.vue';
import TextareaInput from '@/Components/Inputs/TextareaInput.vue';
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
    identification: null,
    address: null,
    proof: [],
});

const submit = () => {
    form.post(route('customers.store'));
};
</script>

<template>
    <!-- Form -->
    <form @submit.prevent="submit" class="bg-white max-w-2xl mx-auto" enctype="multipart/form-data">
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

        <div>
            <p class="text-base text-gray-700 mt-2 dark:text-white">Imagem RG</p>
            <ImageInput
                type="file"
                forLabel="identification"
                idInput="identification"
                textSpan="Clique para carregar imagem"
                typeFile="SVG, PNG, JPG"
                v-model="form.identification"
            />

            <InputError class="mt-2" :message="form.errors.identification" />
        </div>

        <div>
            <p class="text-base text-gray-700 mt-4 dark:text-white">Imagem comprovante de endereço</p>
            <ImageInput
                type="file"
                forLabel="address"
                idInput="address"
                textSpan="Clique para carregar imagem"
                typeFile="SVG, PNG, JPG"
                v-model="form.address"
            />

            <InputError class="mt-2" :message="form.errors.address" />
        </div>

        <div>
            <p class="text-base text-gray-700 mt-4 dark:text-white">Imagens comprovante de renda</p>
            <ImageInput
                type="file"
                forLabel="proof"
                idInput="proof"
                textSpan="Clique para carregar imagens"
                typeFile="SVG, PNG, JPG"
                multiple
                v-model="form.proof"
            />

            <InputError class="mt-2" :message="form.errors.proof" />
        </div>

        <TextareaInput
            label="Observações do cliente aqui..."
            rows="4"
            v-model="form.description"
        />

        <div class="mt-4">
            <CreateCustomerButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing" />
        </div>
    </form>
</template>