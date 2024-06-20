<script setup>
import { onMounted, ref } from 'vue';
import LiAccordion from '@/Components/Accordion/LiAccordion.vue';

defineProps([
    'spanTitle',
    'liTitle'
]);

const accordionOpen = ref(false)

onMounted(() => {
    accordionOpen.value = false
})
</script>

<template>
    <h2>
        <button id="accordion-title-01" class="flex items-center" @click.prevent="accordionOpen = !accordionOpen"
            :aria-expanded="accordionOpen" aria-controls="accordion-text-01">
            <span>{{ spanTitle }}</span>
            <svg class="fill-indigo-500 shrink-0 ml-12" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                <rect y="7" width="16" height="2" rx="1"
                    class="transform origin-center transition duration-200 ease-out"
                    :class="{ '!rotate-180': accordionOpen }" />
                <rect y="7" width="16" height="2" rx="1"
                    class="transform origin-center rotate-90 transition duration-200 ease-out"
                    :class="{ '!rotate-180': accordionOpen }" />
            </svg>
        </button>
    </h2>
    <div>
        <div id="accordion-text-01" role="region" aria-labelledby="accordion-title-01"
            class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
            :class="accordionOpen ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
            <ul class="overflow-hidden">
                <LiAccordion link="cars.create">Cadastrar carro</LiAccordion>
                <LiAccordion link="cars.store">Cadastrar cliente</LiAccordion>
            </ul>
        </div>
    </div>
</template>