<script setup>
import InputError from '@/Components/Inputs/InputError.vue';
import InputLabel from '@/Components/Inputs/InputLabel.vue';
import TextInput from '@/Components/Inputs/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const passwordInput = ref(null);
const currentPasswordInput = ref(null);

const form = useForm({
    current_password: '',
    password: '',
    password_confirmation: '',
});

const updatePassword = () => {
    form.put(route('password.update'), {
        preserveScroll: true,
        onSuccess: () => form.reset(),
        onError: () => {
            if (form.errors.password) {
                form.reset('password', 'password_confirmation');
                passwordInput.value.focus();
            }
            if (form.errors.current_password) {
                form.reset('current_password');
                currentPasswordInput.value.focus();
            }
        },
    });
};
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">Mudar senha</h2>

            <p class="mt-1 text-sm text-gray-600">
                Certifique-se de que sua conta esteja usando uma senha longa e aleatória para permanecer segura.
            </p>
        </header>

        <form @submit.prevent="updatePassword" class="mt-6 space-y-6">
            <div>
                <TextInput
                    idInput="current_password"
                    forLabel="current_password"
                    label="Senha atual"
                    ref="currentPasswordInput"
                    v-model="form.current_password"
                    typeInput="password"
                    class="mt-1 block w-full"
                />

                <InputError :message="form.errors.current_password" class="mt-2" />
            </div>

            <div>
                <TextInput
                    idInput="password"
                    forLabel="password"
                    label="Nova senha"
                    ref="passwordInput"
                    v-model="form.password"
                    typeInput="password"
                    class="mt-1 block w-full"
                />

                <InputError :message="form.errors.password" class="mt-2" />
            </div>

            <div>
                <TextInput
                    idInput="password_confirmation"
                    forLabel="password_confirmation"
                    label="Confirmar senha"
                    v-model="form.password_confirmation"
                    typeInput="password"
                    class="mt-1 block w-full"
                />

                <InputError :message="form.errors.password_confirmation" class="mt-2" />
            </div>

            <div class="flex items-center gap-4">
                <PrimaryButton :disabled="form.processing">Salvar</PrimaryButton>

                <Transition
                    enter-active-class="transition ease-in-out"
                    enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out"
                    leave-to-class="opacity-0"
                >
                    <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Senha alterada com sucesso.</p>
                </Transition>
            </div>
        </form>
    </section>
</template>
