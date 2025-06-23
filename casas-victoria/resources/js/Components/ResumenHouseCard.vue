<script setup>
import {computed} from 'vue';
import { Link } from '@inertiajs/vue3';
import CasaVentaBadge from '@/Components/CasaVentaBadge.vue';
import ArrowRightIcon from '@/Components/Icons/ArrowRight.vue';
import BedroomIcon from '@/Components/Icons/BedroomIcon.vue';
import BathroomIcon from '@/Components/Icons/BathroomIcon.vue';
import GarageIcon from '@/Components/Icons/GarageIcon.vue';
import DimensionIcon from '@/Components/Icons/DimensionIcon.vue';


const props = defineProps({
	"house": Object
});

const imageBackgroundStyle = computed(()=>{
	return `background-image: url("/foto/${props.house.photo.id}");`;
});

</script>

<template>
	<div class="w-full bg-white border border-gray-300 rounded-lg shadow-lg transition-transform duration-200 translate-y-1 hover:translate-y-0">
		<Link :href="route('houses.show', house.id )">
			<div class="flex flex-col h-fit">
				<div class="h-[14rem] rounded-t-lg bg-cover bg-center bg-no-repeat" :style="[imageBackgroundStyle]">
					<CasaVentaBadge class="absolute z-10" />
				</div>
				<div class="h-[8rem] p-2 bg-gradient-to-b from-gray-100/[0.025] to-gray-50/[0.5]">
					<h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white line-clamp-1">
						{{house.title}}
					</h5>
					<p class="font-normal text-gray-700 dark:text-gray-400 line-clamp-2">
						{{house.address}}
					</p>
					<div class="flex items-center w-full justify-around text-gray-600">
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
		</Link>
	</div>
</template>
