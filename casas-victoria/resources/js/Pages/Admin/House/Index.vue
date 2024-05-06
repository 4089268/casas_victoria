<script setup>
import { Head, router } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

defineProps({
    'houses': Array
});


const handleNewHouseClick = ()=> router.visit('/admin/casas/create');

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Listando casas</h2>
        </template>

        <div class="flex m-2 p-4 border rouned-md bg-white shadow">
            <PrimaryButton v-on:click="handleNewHouseClick">Registrar Nueva Casa</PrimaryButton>
        </div>

        <div class="m-2 p-4 border rouned-md bg-white shadow">
            <table class="table-fixed w-full">
                <thead>
                    <tr class="border-b pb-2">
                        <th>
                            Nombre
                        </th>
                        <th>
                            Descripcion
                        </th>
                        <th>
                            Dimensiones
                        </th>
                        <th>
                            Cuartos
                        </th>
                        <th>
                            Baños
                        </th>
                        <th>
                            Cocheras
                        </th>
                        <th>
                            Otros
                        </th>
                        <th>
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-if="houses && houses.length > 0" >
                        <td>
                            Nombre
                        </td>
                        <td>
                            Descripcion
                        </td>
                        <td>
                            Dimensiones
                        </td>
                        <td>
                            Cuartos
                        </td>
                        <td>
                            Baños
                        </td>
                        <td>
                            Cocheras
                        </td>
                        <td>
                            Otros
                        </td>
                        <td>
                            <PrimaryButton> Hola</PrimaryButton>
                        </td>
                    </tr>
                    <tr else>
                        <td colspan="8" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="w-full text-center py-8">Sin datos</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </AuthenticatedLayout>
</template>
