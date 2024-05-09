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
                        <th class="w-64">
                            Nombre
                        </th>
                        <th class="w-64">
                            Direccion
                        </th>
                        <th>
                            Dimensiones
                        </th>
                        <th class="w-16">
                            Cuartos
                        </th>
                        <th class="w-16">
                            Baños
                        </th>
                        <th class="w-16">
                            Cocheras
                        </th>
                        <th>
                            Ubicacion
                        </th>
                        <th>
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="house in houses" :key="house.id">
                        <td>
                            {{house.title}}
                        </td>
                        <td>
                            {{house.address}}
                        </td>
                        <td>
                            {{house.dimensions}}
                        </td>
                        <td class="text-center">
                            {{house.bedrooms}}
                        </td>
                        <td class="text-center">
                            {{house.bathrooms}}
                        </td>
                        <td class="text-center">
                            {{house.garages}}
                        </td>
                        <td class="text-center">
                            {{house.latitude}}
                            {{house.longitude}}
                        </td>
                        <td class="text-center">
                            <PrimaryButton>Editar</PrimaryButton>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

    </AuthenticatedLayout>
</template>
