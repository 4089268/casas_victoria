<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        
        <div id="topBar" class="sticky top-0 w-full flex fixed top-0 bg-white rounded-b border-gray-200 shadow z-50">
            
            <div role="navigation" class="mx-auto max-w-screen-lg w-full flex items-center justify-between min-h-[3rem]">
                
                <div>
                    <ApplicationLogo class="w-8 h-8 inline-block mr-1" />
                    <span>Casas Victoria</span>
                </div>

                <div role="navigation" class="flex items-center gap-[3rem]">
                    <Link :href="route('home.index')"
                        class="px-2 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm"
                        >Inicio</Link
                    >
                    
                    <Link :href="route('houses')"
                        class="px-2 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm"
                        >Casas</Link
                    >
            
                    <Link :href="route('home.index')"
                        class="px-2 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm"
                        >Contacto</Link
                    >
                </div>
            </div>
        </div>

        <div role="banner" class=" w-full sm:h-64 h-[200px] bg-[url('images/home-house.jpg')] bg-center bg-cover ">
            <div class="w-full h-full flex flex-col items-center justify-center backdrop-opacity-10 backdrop-invert bg-gradient-to-r from-cyan-500/[.25] to-blue-500/[.25]">
                <div class="text-center text-white">
                    <ApplicationLogo class="mx-auto my-2 w-24" />
                    <h4 class="text-2xl font-light">Casas Victoria</h4>
                </div>
            </div>
        </div>

        <slot />

        <!-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div> -->

        <section class="fotter w-full bg-[#54565a] h-[38vh] py-[4rem] mt-[4rem]">
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
