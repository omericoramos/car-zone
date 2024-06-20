<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import LoginButton from '@/Components/Buttons/LoginButton.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue'
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Log in" />

    <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
        {{ status }}
    </div>

    <div class="h-screen flex">
        <!-- Logo -->
        <div class="hidden lg:flex w-full lg:w-1/2 login_img_section
        justify-around items-center">
            <div class="bg-black opacity-20 inset-0 z-0"></div>

            <div class="w-auto mx-auto mt-8">
                <ApplicationLogo class="w-[500px] h-[500px]" color="#FFF" />
            </div>
        </div>

        <!-- Form -->
        <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
            <div class="w-full px-8 md:px-32 lg:px-24">

                <form @submit.prevent="submit" class="bg-white">
                    <div class="w-60 mx-auto">
                        <ApplicationLogo class="w-[250px] h-[120px]" color="#2C314E" />
                    </div>

                    <div>
                        <TextInput 
                            typeInput="email"
                            nameInput="email"
                            idInput="email"
                            forLabel="email"
                            label="Digite seu e-mail"
                            v-model="form.email"
                        />

                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div class="mt-8">
                        <TextInput
                            typeInput="password"
                            nameInput="password"
                            idInput="password"
                            forLabel="password"
                            label="Digite sua senha"
                            v-model="form.password"
                        />

                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>

                    <div class="mt-4">
                        <LoginButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing" />
                    </div>

                    <div class="flex justify-between mt-4">
                        <label class="flex items-center">
                            <Checkbox name="remember" v-model:checked="form.remember" />
                            <span class="ms-2 text-sm text-gray-600">Lembre-se de mim</span>
                        </label>
                        
                        <Link
                            v-if="canResetPassword"
                            :href="route('password.request')"
                            class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 hover:-translate-y-1 duration-500 transition-all"
                        >
                            Esqueceu sua senha?
                        </Link>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .login_img_section {
        background: url(https://images.pexels.com/photos/248159/pexels-photo-248159.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) no-repeat center center;
        background-size: cover;
        height: 100vh;
    }
</style>
