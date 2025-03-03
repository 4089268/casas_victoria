<script setup>

import {computed} from 'vue';

const {house} = defineProps({
    'house': Object
});

const photoId = computed(()=>{
    var photos = Object.values(house.photos);

    if(photos.length > 0)
    {
        return photos[0].id;
    }

    return undefined;
    // return "https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg";
});

const emit = defineEmits(['houseSelect']);

function houseClickHandle()
{
    emit('houseSelect', house.id);
}

</script>

<template>
    <div class="card bg-white border border-gray-300 rounded-lg hover:cursor-pointer hover:outline hover:outline-cyan-500" v-on:click="houseClickHandle">
        <div class="h-64">
            <img v-if="photoId" class="object-cover h-full w-full radius-xl rounded-lg" :src="route('admin.houses.show-photo', photoId)" alt="img">
            <img v-else class="object-cover blur-sm h-full w-full radius-xl rounded-lg" src="https://tailwindcss.com/_next/static/media/responsive-1.fd2e9248.png" alt="img">
        </div>
        <div class="card-body pb-4 px-2 pt-2">
            <div class="title">
                <p class="font-bold">{{house.title}}</p>
                <span class="text-sm">{{house.address}}</span>
            </div>
        </div>
    </div>
</template>