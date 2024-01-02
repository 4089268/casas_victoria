<script setup>
import {computed} from 'vue';


const imageUrl = computed(()=>{
	return "bg-[url('https://inmobiliare.com/himalaya/wp-content/uploads/2019/06/cr%C3%A9ditos-de-casas-vivienda-inmobiliare-infonavit-vivienda-en-m%C3%A9xico-scaled.jpg')]";
});

</script>

<template>
	<div class="w-full bg-white border border-gray-300 rounded-lg shadow-lg">
		<a href="/house/xxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx">
			<div class="flex flex-col h-[24rem] rounded-lg bg-cover bg-center bg-no-repeat" :class="[ imageUrl ]">

				<div class="m-2 flex w-24 h-8 justify-center items-center font-bold backdrop-blur-sm bg-white/30 rounded text-gray-700">
					<svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 24 24">
						<path fill="currentColor" d="M4 19q-.825 0-1.412-.587T2 17v-6.175q0-.4.15-.762t.425-.638l2.85-2.85q.275-.275.638-.425T6.825 6H7V5q0-.425.288-.712T8 4q.425 0 .713.288T9 5v1h8.175q.4 0 .763.15t.637.425l2.85 2.85q.275.275.425.638t.15.762V17q0 .825-.587 1.413T20 19zm12-2h4v-6.175l-2-2l-2 2zm-2 0v-5H4v5z"/>
					</svg>
					<span class="px-1">Venta</span>
				</div>

				<div class="mt-auto p-2  bg-gradient-to-b from-slate-500/[0.025] to-slate-500/[0.5]">
					<h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
					<p class="font-normal text-gray-700 dark:text-gray-400"> San Luis Potosí 222, Norberto Treviño Zapata, 87020 Cdad. Victoria, Tamps.</p>
					<a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-blue-700 rounded-lg hover:text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
						Read more
						<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
						</svg>
					</a>
				</div>

			</div>
		</a>
	</div>
</template>
