<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import HomeSteps from '@/Components/HomeSteps.vue'
import ResumenHouseCard from '@/Components/ResumenHouseCard.vue'
import BannerTextAnimation from '@/Components/BannerTextAnimation.vue';
import NavigationTopBar from '@/Components/NavigationTopBar.vue';
import CasaVentaBadge from '@/Components/CasaVentaBadge.vue';
import BedroomIcon from '@/Components/Icons/BedroomIcon.vue';
import BathroomIcon from '@/Components/Icons/BathroomIcon.vue';
import GarageIcon from '@/Components/Icons/GarageIcon.vue';
import DimensionIcon from '@/Components/Icons/DimensionIcon.vue';

defineProps({
    houses: Array
});

</script>

<template>
    <Head title="Casas" />

    <div class="relative flex flex-col justify-center items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white" >
        
        <div role="banner" class=" w-full sm:h-64 h-[200px] bg-[url('images/home-house.jpg')] bg-center bg-cover ">
            <div class="w-full h-full flex flex-col items-center justify-center backdrop-opacity-10 backdrop-invert bg-gradient-to-r from-cyan-500/[.25] to-blue-500/[.25]">
                <div class="text-center text-white">
                    <ApplicationLogo class="mx-auto my-2 w-24" />
                    <h4 class="text-2xl font-light">Casas Victoria</h4>
                </div>
            </div>
        </div>

        <NavigationTopBar/>

        <section class="w-full py-10 px-4 pt-14 -translate-y-14">
            <h2 class="text-3xl font-bold mt-10 mb-6 max-w-screen-lg mx-auto">
                Casas que te pueden interesar
            </h2>
            <div class="mx-auto w-fit px-2 grid grid-cols-2 gap-4 border-t pt-4">
                <div v-for="house in houses" :key="house.id"
                    class="bg-white rounded-lg grid grid-cols-[50%_50%]"
                >
                    <div class="flex">
                        <img :src="`/foto/${house.photo.id}`" class="w-full rounded-l-lg" />
                        <CasaVentaBadge class="absolute" />
                    </div>
                    <div class="border flex flex-col gap-1 p-4 text-gray-700">
                        <h2 class="font-bold text-3xl">
                            {{ house.title }}
                        </h2>
                        <span class="text">
                            {{house.address}}
                        </span>
                        <span class="text">
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

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center mt-16 px-6 sm:items-center sm:justify-between">

                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-start">
                    <div class="flex items-center gap-4">
                        <a
                            href="https://github.com/sponsors/taylorotwell"
                            class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                class="-mt-px me-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                                />
                            </svg>
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ms-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-end sm:ms-0">
                    {{ appName }} ({{ copyrigth }})
                </div>
            </div>
        </div>

    </div>
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
