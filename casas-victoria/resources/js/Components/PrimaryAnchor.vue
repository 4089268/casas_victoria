<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    href: {
        type: String
    },
});
</script>

<template>
    <Link
        :href="href??''"
        class="inline-flex items-center px-2 py-1.5 bg-blue-400 dark:bg-blue-600 border border-transparent rounded-md font-semibold text-white dark:text-blue-200 hover:bg-blue-500 dark:hover:bg-blue-500 focus:bg-blue-700 dark:focus:bg-blue-400 active:bg-blue-900 dark:active:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-blue-800 transition ease-in-out duration-150"
    >
        <slot />
    </Link>
</template>
