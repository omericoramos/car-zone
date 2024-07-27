<script setup>
import ListEmployerForm from '../Forms/ListEmployerForm.vue';
import CloseModalButton from '../Modal/CloseModalButton.vue';
import SearchInput from '../Inputs/SearchInput.vue';
import EditIcon from '../Icons/EditIcon.vue';
import DeleteIcon from '../Icons/DeleteIcon.vue';
</script>

<template>
    <SearchInput
        forLabel="search-car"
        idInput="search-car"
        placeholder="Procure pelo nome do carro"
    />
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        E-mail
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Telefone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">
                        Nome funcionário
                    </td>
                    <td class="px-6 py-4">
                        React Developer
                    </td>
                    <td class="px-6 py-4">
                        React Developer
                    </td>
                    <td class="px-6 py-4">
                        <!-- Modal toggle -->
                        <div class="flex space-x-2">
                            <EditIcon 
                                data-modal-target="editEmployerModal"
                                data-modal-show="editEmployerModal"
                            />
                            <DeleteIcon />
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Edit user modal -->
        <div id="editEmployerModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Editar funcionário
                        </h3>
                        <CloseModalButton modalHide="editEmployerModal" />
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <ListEmployerForm />
                    </div>
                </form>
            </div>
        </div>
    </div>

</template>