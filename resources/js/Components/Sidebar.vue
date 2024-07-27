<script setup>
import HomeIcon from '@/Components/Icons/HomeIcon.vue';
import FoldersIcon from '@/Components/Icons/FoldersIcon.vue';
import RetanglesIcon from '@/Components/Icons/RetanglesIcon.vue';
import AccordionButton from '@/Components/Accordion/AccordionButton.vue';
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <aside
        id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-14 h-screen hover:w-64 pt-20 duration-500 bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar"
    >
        <div class="h-full px-2 pb-4 overflow-y-auto overflow-x-hidden bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <p class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <HomeIcon class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" />
                        <Link :href="route('dashboard')" class="ms-7">
                            Home
                        </Link>
                    </p>
                </li>

                <li>
                    <p class="flex p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <p>
                            <FoldersIcon class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" />
                        </p>
                        <p class="ms-7">
                            <AccordionButton
                                spanTitle="Cadastrar"
                            />
                        </p>
                    </p>
                </li>

                <li>
                    <p class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <RetanglesIcon class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" />
                        <Link :href="route('cars.list')" class="ms-7">
                            Carros
                        </Link>
                    </p>
                </li>

                <li>
                    <p class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <RetanglesIcon class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" />
                        <Link :href="route('customers.list')" class="ms-7">
                            Clientes
                        </Link>
                    </p>
                </li>

                <li>
                    <p class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <RetanglesIcon class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" />
                        <Link :href="route('employees.list')" class="ms-7">
                            Funcionários
                        </Link>
                    </p>
                </li>
            </ul>
        </div>
    </aside>
</template>