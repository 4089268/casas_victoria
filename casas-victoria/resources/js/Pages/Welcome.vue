<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import HomeSteps from '@/Components/HomeSteps.vue'
import ResumenHouseCard from '@/Components/ResumenHouseCard.vue'
import BannerTextAnimation from '@/Components/BannerTextAnimation.vue';
import NavigationTopBar from '@/Components/NavigationTopBar.vue';

defineProps({
    copyrigth: String,
    appName: String,
    houses: Array
});

</script>

<template>
    <Head title="Welcome" />

    <div class="relative flex flex-col justify-center items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white" >
        
        <div role="banner" class=" w-full sm:h-64 lg:h-[100vh] bg-[url('images/home-house.jpg')] bg-center bg-cover ">
            <div class="w-full h-full flex flex-col items-center justify-center backdrop-opacity-10 backdrop-invert bg-gradient-to-r from-cyan-500/[.25] to-blue-500/[.25]">
                <div class="text-center text-white -translate-y-[12rem]">
                    <ApplicationLogo class="mx-auto my-2 w-24" />
                    <h4 class="text-2xl font-light">Casas Victoria</h4>
                </div>
                <div class="w-full max-w-screen-xl translate-y-[4rem]">
                    <BannerTextAnimation />
                </div>
            </div>
        </div>

        <NavigationTopBar />

        <section class="w-full py-[10rem] bg-white z-10">
            <div class="w-full max-w-screen-xl my-10 mx-auto">
                <HomeSteps />
            </div>
        </section>

        <section class="w-full h-12 z-10">
            <svg class="w-full h-full" viewBox="0.1 0.1 180 40" preserveAspectRatio="none">
                <g transform="translate(-18.298844,-77.973964)">
                    <path style="fill:#f0f0f0;" d="M 31.615583,86.351641 H 192.16499 v 26.901969 c 0,0 -32.03411,-14.237983 -59.62682,-12.72484 -22.34188,1.2252 -54.779359,9.72634 -54.779359,9.72634 0,0 -22.029534,3.62882 -34.471238,-1.88988 -12.441702,-5.51871 -11.67199,-22.013589 -11.67199,-22.013589 z" />
                    <path style="fill:#ffffff;" d="M 18.441597,78.106256 H 198.58126 v 39.288614 c 0,0 -43.10672,-27.825245 -73.47599,-19.687823 -30.369264,8.137423 -46.832208,12.548653 -46.832208,12.548653 0,0 -32.775418,8.05972 -46.735258,0 C 17.577964,102.19598 18.441597,78.106256 18.441597,78.106256 Z" />
                </g>
            </svg>
        </section>

        <section class="w-full py-10 px-4 pt-14 -translate-y-14">
            <h2 class="text-3xl font-bold mt-10 mb-6 max-w-screen-lg mx-auto">
                Casas que te pueden interesar
            </h2>
            <div class="mx-6 px-2 grid grid-cols-4 gap-2 border-t pt-4">
                <ResumenHouseCard v-for="h in houses" :key="h.id" :house="h" />
            </div>
        </section>

        <div class="w-full h-[32rem] my-10 py-10 px-4 bg-cover bg-center bg-no-repeat" style="background-image: url('/images/sample-map.png');">
            <!-- //  -->
        </div>

        <section class="fotter w-full bg-[#54565a] h-[38vh] py-[4rem]">
            <div class="w-full mx-auto max-w-screen-lg flex flex-col text-white">
                <ApplicationLogo class="h-[6rem]" />
                <div class="grid grid-cols-3">
                    <div class="">
                        <ul id="menu-footer" class="lista">
                            <li class="menu-item">
                                <Link :href="route('home.index')"
                                    class="text-xl font-semibold hover:text-gray-100 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm"
                                    >Inicio</Link
                                >
                            </li>
                            <li class="menu-item">
                                <Link :href="route('houses')"
                                    class="text-xl font-semibold hover:text-gray-100 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm"
                                    >Casas</Link
                                >
                            </li>
                            <li class="menu-item">
                                <Link :href="route('home.index')"
                                    class="text-xl font-semibold hover:text-gray-100 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm"
                                    >Contacto</Link
                                >
                            </li>
                        </ul>
                    </div>

                    <div />

                    <div>
                        <ul class="lista2">
                            <li>
                                <a href="#">
                                    <div class="flex gap-2 items-start">
                                        <div class="col-2">
                                            <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"/></svg>
                                        </div>
                                        <div class="col-10">
                                            <p>Viaducto Presidente Miguel Alemán Valdés, No.105 Col.Escandón Sección 1, Alcaldía Miguel Hidalgo, CP11800, Ciudad de México.</p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="flex gap-2 items-start">
                                        <div class="col-2">
                                            <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256s-114.6 256-256 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                                        </div>
                                        <div class="col-10">
                                            <p>Lunes a jueves: 9:00 a 14:00 hrs. / 15:30 a 19:00 hrs. Viernes: 9:00 a 15:00 hrs</p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="mailto:sesna-consulta@sesna.gob.mx">
                                    <div class="flex gap-2 items-start">
                                        <div class="col-2">
                                            <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                                        </div>
                                        <div class="col-10">
                                            <p>sesna-consulta@sesna.gob.mx</p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <div class="row justify-content-center">
                                    <div class="col-4"><a class="social" href="https://www.facebook.com/SESNAOficial/" target="_blank"><b class="ses_icons fb"></b></a></div>
                                    <div class="col-4"><a class="social" href="https://twitter.com/SESNAOficial" target="_blank"><b class="ses_icons tw"></b></a></div>
                                    <div class="col-4"><a class="social" href="https://www.youtube.com/channel/UCRUpiHth_WRkNo2sBmZIyfQ" target="_blank"><b class="ses_icons yt"></b></a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
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
