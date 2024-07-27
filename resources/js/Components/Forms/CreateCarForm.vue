<script setup>
import TextInput from '@/Components/Inputs/TextInput.vue';
import SelectInput from '@/Components/Inputs/SelectInput.vue';
import TextareaInput from '@/Components/Inputs/TextareaInput.vue';
import ImageInput from '@/Components/Inputs/ImageInput.vue';
import InputError from '@/Components/Inputs/InputError.vue';
import NumberInput from '@/Components/Inputs/NumberInput.vue';
import PriceInput from '@/Components/Inputs/PriceInput.vue';
import CreateCustomerButton from '@/Components/Buttons/CreateCustomerButton.vue';
import { useForm } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import axios from 'axios';

defineProps(['brands'])
const carModels = ref(null)
const versions = ref(null)
const bodyWorks = ref(null)
const enginesType = ref(null)
const fuelsType = ref(null)
const transmissionsType = ref(null)


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
    description: '',
    message: '',
    images: [],
    document: null,
});

const submit = () => {
    form.post(route('customers.store'));
};

const filterCarmodels = (event) => {
    const getCarModelsByBrand = async () => {
        const response = await axios.get(route('cars.getCarModelsByBrand'), {
            params: {
                brand: event
            }
        })

        return response.data
    }

    getCarModelsByBrand().then((data) => {
        carModels.value = data
    })
}

const filterVersionsCar = (carModel) => {
    const getVersionsCar = async () => {
        const response = await axios.get(route('cars.getVersionsByCarModel'), {
            params: {
                carModel: carModel
            }
        })

        return response.data
    }

    getVersionsCar().then((data) => {
        versions.value = data
    })
}

const getBodywork = () => {
    const bodyWorkList = async () => {
        const response = await axios.get(route('bodyWorks.index'))
        return response.data
    }

    bodyWorkList().then((data) => {
        bodyWorks.value = data
    })
}

const getTransmition = () => {
    const transmissionList = async () => {
        const response = await axios.get(route('transmissions.index'))
        return response.data
    }

    transmissionList().then((data) => {
        transmissionsType.value = data
    })
}

const getEgines = () => {
    const eginesList = async () => {
        const response = await axios.get(route('engines.index'))
        return response.data
    }

    eginesList().then((data) => {
        enginesType.value = data
    })
}

const getfuel = () => {
    const fuelList = async () => {
        const response = await axios.get(route('fuels.index'))
        return response.data
    }

    fuelList().then((data) => {
        fuelsType.value = data
    })
}

onMounted(() => {
    getBodywork()
    getTransmition()
    getEgines()
    getfuel()
})
</script>

<template>
    <!-- Form -->
    <form @submit.prevent="submit" class="bg-white max-w-2xl mx-auto" enctype="multipart/form-data">
        <div class="grid md:grid-cols-2 md:gap-6">
            <div>
                <SelectInput nameSelect="brand" idSelect="brand" forLabel="brand" label="Marca" v-model="form.brand"
                    @change="filterCarmodels($event.target.value)">
                    <option disabled selected value="">Escolha uma marca</option>
                    <option v-for="brand in brands" :key="brand.id" v-bind:value="brand.id">
                        {{ brand.name }}
                    </option>
                </SelectInput>

                <InputError class=" mt-2" :message="form.errors.brand" />
            </div>
            <div>
                <SelectInput nameSelect="carModel" idSelect="carModel" forLabel="carModel" label="Modelo"
                    v-model="form.carModel" @change="filterVersionsCar($event.target.value)">
                    <option disabled selected value="">Escolha um modelo</option>
                    <option v-for="carModel in carModels" :key="carModel.id" v-bind:value="carModel.name">
                        {{ carModel.name }}
                    </option>
                </SelectInput>

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div>
                <SelectInput nameSelect="version" idSelect="version" forLabel="version" label="Versão"
                    v-model="form.version">
                    <option disabled selected value="">Escolha uma versão</option>
                    <option v-for="version in versions" :key="version.id" v-bind:value="version.id">
                        {{ version.name }}
                    </option>
                </SelectInput>

                <InputError class="mt-2" :message="form.errors.version" />
            </div>

            <div>
                <SelectInput nameSelect="bodyWork" idSelect="bodyWork" forLabel="bodyWork" label="Carroceria"
                    v-model="form.bodyWork">
                    <option disabled selected value="">Escolha uma carroceria</option>
                    <option v-for="bodyWork in bodyWorks" :key="bodyWork.id" :value="bodyWork.id">{{bodyWork.name}}
                    </option>
                </SelectInput>

                <InputError class="mt-2" :message="form.errors.bodyWork" />
            </div>

            <div>
                <SelectInput nameSelect="engine" idSelect="engine" forLabel="engine" label="Motor"
                    v-model="form.engine">
                    <option disabled selected value="">Escolha um motor</option>
                    <option v-for="(engine,index) in enginesType" :key="index" :value="engine.id">{{ engine.literage }}
                    </option>
                </SelectInput>

                <InputError class="mt-2" :message="form.errors.engine" />
            </div>

            <div>
                <SelectInput nameSelect="transmission" idSelect="transmission" forLabel="transmission"
                    label="Transmissão" v-model="form.transmission">
                    <option disabled selected value="">Escolha uma transmissão</option>
                    <option v-for="(transmission, index) in transmissionsType" :key="index" :value="transmission.id">{{
                        transmission.name }}
                    </option>
                </SelectInput>

                <InputError class="mt-2" :message="form.errors.transmission" />
            </div>

            <div>
                <SelectInput nameSelect="fuel" idSelect="fuel" forLabel="fuel" label="Combustível" v-model="form.fuel">
                    <option disabled selected value="">Escolha um tipo de combustível</option>
                    <option v-for="(fuel, index) in fuelsType" :key="index" :value="fuel.id">{{
                        fuel.name }}
                    </option>
                </SelectInput>

                <InputError class="mt-2" :message="form.errors.fuel" />
            </div>

            <div>

                <TextInput nameInput="chassis" idInput="chassis" forLabel="chassis" label="Chassis"
                    v-model="form.chassis" />


                <InputError class="mt-2" :message="form.errors.chassis" />
            </div>

            <div>

                <TextInput nameInput="licencePlate" idInput="licencePlate" forLabel="licencePlate" label="Placa"
                    v-model="form.licencePlate" />


                <InputError class="mt-2" :message="form.errors.licencePlate" />
            </div>

            <div>

                <NumberInput typeInput="number" nameInput="year" idInput="year" forLabel="year" label="Ano"
                    v-model="form.year" />


                <InputError class="mt-2" :message="form.errors.year" />
            </div>

            <div>
                <SelectInput nameSelect="color" idSelect="color" forLabel="color" label="Cor" v-model="form.color">
                    <option disabled selected value="">Escolha uma cor</option>
                    <option value="Amarelo">Amarelo</option>
                    <option value="Azul">Azul</option>
                    <option value="Branco">Branco</option>
                    <option value="Cinza">Cinza</option>
                    <option value="Marron">Marron</option>
                    <option value="Preto">Preto</option>
                    <option value="Rosa">Rosa</option>
                    <option value="Vermelho">Vermelho</option>
                    <option value="Verde">Verde</option>
                </SelectInput>

                <InputError class="mt-2" :message="form.errors.color" />
            </div>

            <div>

                <PriceInput nameInput="price" idInput="price" forLabel="price" label="Preço" v-model="form.price" />


                <InputError class="mt-2" :message="form.errors.price" />
            </div>
        </div>

        <div>

            <p class="text-base text-gray-700 mt-2 dark:text-white">Imagens do carro</p>
            <ImageInput
                type="file"
                forLabel="images"
                idInput="images"
                textSpan="Clique para carregar imagens"
                typeFile="SVG, PNG, JPG"
                multiple
                v-model="form.images"
            />

            <InputError class="mt-2" :message="form.errors.images" />
        </div>

        <div>
            <p class="text-base text-gray-700 mt-4 dark:text-white">Documento do carro</p>
            <ImageInput
                type="file"
                forLabel="document"
                idInput="document"
                textSpan="Clique para carregar arquivo"
                typeFile="PDF, PNG, JPG"
                v-model="form.document"
            />

            <InputError class="mt-2" :message="form.errors.document" />
        </div>
            
        <TextareaInput
            label="Digite a descrição do carro aqui..."
            rows="4"
            v-model="form.description"
        />

        <InputError class="mt-2" :message="form.errors.description" />

        <div class="mt-4">
            <CreateCustomerButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing" />
        </div>
    </form>
</template>