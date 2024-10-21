<script setup>
import { Head, router } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import PrimaryAnchor from '@/Components/PrimaryAnchor.vue';
import ImagesIcon2 from '@/Components/Icons/ImagesIcon2.vue';
import BedroomIcon from '@/Components/Icons/BedroomIcon.vue';
import BathroomIcon from '@/Components/Icons/BathroomIcon.vue';
import GarageIcon from '@/Components/Icons/GarageIcon.vue';

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
                        <th class="w-16">
                            Fotos
                        </th>
                        <th>
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b text-gray-600" v-for="house in houses" :key="house.id">
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
                            <div class="flex items-center gap-1">
                                {{house.bedrooms}}
                                <BedroomIcon class="w-6 h-6" />
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="flex items-center gap-1">
                                {{house.bathrooms}}
                                <BathroomIcon class="w-6 h-6" />
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="flex items-center gap-1">
                                {{house.garages}}
                                <GarageIcon class="w-6 h-6" />
                            </div>
                        </td>

                        <td class="text-center">
                            {{house.latitude}}
                            {{house.longitude}}
                        </td>
                        <td class="text-center">
                            <div class="flex items-center gap-1">
                                <div class="block-inline">{{ house.photos.length }}</div>
                                <ImagesIcon2 class="w-6 h-6" />
                            </div>
                        </td>
                        <td class="text-center">
                            <PrimaryAnchor :href="route('admin.houses.edit', house.id)">
                                Editar
                            </PrimaryAnchor>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

    </AuthenticatedLayout>
</template>
