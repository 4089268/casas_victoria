<script setup>
import { Head, router } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import PrimaryAnchor from '@/Components/PrimaryAnchor.vue';
import ImagesIcon2 from '@/Components/Icons/ImagesIcon2.vue';
import BedroomIcon from '@/Components/Icons/BedroomIcon.vue';
import BathroomIcon from '@/Components/Icons/BathroomIcon.vue';
import GarageIcon from '@/Components/Icons/GarageIcon.vue';
import HouseCard from './Partials/HouseCard.vue';

defineProps({
    'houses': Array
});

const handleNewHouseClick = ()=> router.visit('/admin/casas/create');

function houseSelected(houseId)
{
    router.visit( route('admin.houses.edit', houseId));
}

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

        <div class="m-2 p-2 grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-4 gap-4">
            <HouseCard v-for="h in houses" :house="h" v-on:houseSelect="houseSelected"/>
        </div>

    </AuthenticatedLayout>
</template>
