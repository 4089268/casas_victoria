<script setup>
import { onMounted} from 'vue';
import { Link } from '@inertiajs/vue3';
    
onMounted(()=>
{
    window.addEventListener('scroll', () => {
        const scroll = window.scrollY;
        const topBar = document.getElementById('topBar');
        if (topBar) {
            if (scroll > 10) {
                topBar.style.background = 'rgba(230, 230, 230, 0.9)';
            } else {
                topBar.style.background = '#00000000';
            }
        }
    });
})

</script>

<template>
    <div id="topBar" class="w-full flex fixed top-0 rounded-b transition-colors duration-700 z-50">
        <div role="navigation" class="mx-auto px-6 py-2 flex items-center gap-[3rem]">
            <Link :href="route('home.index')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm"
                >Inicio</Link
            >
            
            <Link :href="route('home.index')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm"
                >Casas</Link
            >
    
            <Link :href="route('home.index')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm"
                >Contacto</Link
            >
        </div>
    </div>
</template>