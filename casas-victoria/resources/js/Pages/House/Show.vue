<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
import CasaVentaBadge from '@/Components/CasaVentaBadge.vue';
import BedroomIcon from '@/Components/Icons/BedroomIcon.vue';
import BathroomIcon from '@/Components/Icons/BathroomIcon.vue';
import GarageIcon from '@/Components/Icons/GarageIcon.vue';
import DimensionIcon from '@/Components/Icons/DimensionIcon.vue';

defineProps({
    house: Object
});

</script>

<template>
    <Head title="Casas" />

    <MainLayout>
        <section class="w-full py-10 px-4 pt-14 -translate-y-14">

            <h2 class="text-3xl font-bold mt-10 mb-6 max-w-screen-lg mx-auto">
                Example of some title
            </h2>

            <div class="mx-auto max-w-screen-2xl w-fit px-2 grid grid-cols-2 gap-12 border-t pt-4">
                <div class="grid col-span-2 gap-1 bg-white" style='
                    grid-template-columns: 50% 25% 25%;
                    grid-template-rows: 12rem 12rem;
                    grid-template-areas: "pf p1 p2" "pf p3 p4";
                '>
                    <div class="border" style="grid-area:pf;">
                        <img :src="`/foto/${house.photo.id}`" class="w-full h-full object-cover" />
                    </div>
                    <div class="border" style="grid-area:p1;">
                        <img :src="`/foto/${house.photo.id}`" class="w-full h-full object-cover" />
                    </div>
                    <div class="border" style="grid-area:p2;">
                        <img :src="`/foto/${house.photo.id}`" class="w-full h-full object-cover" />
                    </div>
                    <div class="border" style="grid-area:p3;">
                        <img :src="`/foto/${house.photo.id}`" class="w-full h-full object-cover" />
                    </div>
                    <div class="border" style="grid-area:p4;">
                        <img :src="`/foto/${house.photo.id}`" class="w-full h-full object-cover" />
                    </div>
                </div>

                <div class="bg-white rounded-lg grid grid-cols-[50%_50%]">
                    <div class="flex">
                        <img :src="`/foto/${house.photo.id}`" class="w-full rounded-l-lg" />
                        <CasaVentaBadge class="absolute" />
                    </div>

                    <div class="border flex flex-col gap-4 p-8 text-gray-700">
                        <h2 class="font-bold text-3xl">
                            {{ house.title }}
                        </h2>
                        <span class="text line-clamp-2">
                            {{house.address}}
                        </span>
                        <span class="text line-clamp-6">
                            {{house.description}}
                        </span>
                        <div class="flex items-center w-full justify-around text-gray-600 mt-auto text-lg">
                            <div class="flex items-center gap-1">
                                <BedroomIcon class="w-5 h-5" />
                                {{ house.bedrooms}}
                            </div>
                            <div class="flex items-center gap-1">
                                <BathroomIcon class="w-5 h-4.5"/>
                                {{ house.bathrooms}}
                            </div>
                            <div class="flex items-center gap-1">
                                <GarageIcon class="w-5 h-5"/>
                                {{ house.garages}}
                            </div>
                            <div class="flex items-center gap-1">
                                <DimensionIcon class="w-5 h-5" />
                                {{ house.surface}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </MainLayout>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
