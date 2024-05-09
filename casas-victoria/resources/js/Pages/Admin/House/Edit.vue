<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import { useToast } from 'vue-toastification';

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputText from '@/Components/InputText.vue';
import InputNumber from '@/Components/InputNumber.vue';
import InputError from '@/Components/InputError.vue';

const toast = useToast();

const {house} = defineProps({
    'house': Object
});

const form = useForm({
    "title": house.title,
    "description": house.description,
    "bedrooms": house.bedrooms,
    "bathrooms": house.bathrooms,
    "garages": house.garages,
    "surface": house.surface,
    "dimensions": house.dimensions,
    "address": house.address,
    "latitude": house.latitude,
    "longitude": house.longitude
});

function submit() {
    form.patch( route('admin.houses.update', house.id), {
        onSuccess: ((resp)=>{
            toast.success("Casa actualizada exitosamento");
        }),
        onError: ((err)=>{
            toast.error("Error al actualizar la casa");
        })
    });
}

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar '{{ house.title }}'</h2>
        </template>

        <form class="max-w-screen-2xl mx-auto" @submit.prevent="submit">
        <div class="flex flex-col">
            
            <div class="flex flex-col gap-4 mt-4 p-4 border rouned-md bg-white shadow">

                <div class="w-full h-8 border-b">
                    <h2 class="text-gray-600 font-bold">Datos Generales</h2>
                </div>

                <div class="grid grid-cols-4 gap-4 p-4">

                    <div role="form-group" class="col-span-3">
                        <InputLabel for="title">Nombre</InputLabel>
                        <InputText id="title" v-model="form.title" />
                        <InputError :message="form.errors.title" />
                    </div>

                    <div role="form-group" class="col-span-4">
                        <InputLabel for="description">Descripcion</InputLabel>
                        <textarea class="w-full bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-700 dark:border-gray-400 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-24" style="resize: none;" id="description" v-model="form.description" />
                        <InputError :message="form.errors.description" />
                    </div>

                    <div role="form-group">
                        <InputLabel for="bedrooms">Cuartos</InputLabel>
                        <InputNumber id="bedrooms" v-model="form.bedrooms" min="0" max="10" step="1" />
                        <InputError :message="form.errors.bedrooms" />
                    </div>

                    <div role="form-group">
                        <InputLabel for="bathrooms">Baños</InputLabel>
                        <InputNumber id="bathrooms" v-model="form.bathrooms" min="0" max="10" step="1" />
                        <InputError :message="form.errors.bathrooms" />
                    </div>

                    <div role="form-group" class="col-span-1">
                        <InputLabel for="garages">Cocheras</InputLabel>
                        <InputNumber id="garages" v-model="form.garages" min="0" max="10" step="1" />
                        <InputError :message="form.errors.garages" />
                    </div>

                    <div role="form-group" class="col-span-2">
                        <InputLabel for="surface">Area casa</InputLabel>
                        <InputText id="surface" v-model="form.surface" placeholder="0 m2" />
                        <InputError :message="form.errors.surface"  />
                    </div>

                    <div role="form-group" class="col-span-2">
                        <InputLabel for="dimensions">Dimensiones</InputLabel>
                        <InputText id="dimensions" v-model="form.dimensions"  placeholder="0m x 0m" />
                        <InputError :message="form.errors.dimensions" />
                    </div>

                    <div role="form-group" class="col-span-3">
                        <InputLabel for="address">Direccion</InputLabel>
                        <InputText id="address" v-model="form.address"  placeholder="calle, colonia, ciudad, estado, cp" />
                        <InputError :message="form.errors.address" />
                    </div>

                    <div role="form-group">
                        <InputLabel for="coordinates">Localizacion</InputLabel>
                        <div role="form-group" class="grid grid-cols-2 gap-2">
                            <InputText id="latitude" v-model="form.latitude" placeholder="Latitud" />
                            <InputText id="longitude" v-model="form.longitude" placeholder="Longitud" />
                        </div>
                        <InputError :message="form.errors.latitude" />
                        <InputError :message="form.errors.longitude" />
                    </div>

                </div>

                <div class="flex w-full justify-center mx-auto">
                    <PrimaryButton type="submit">Actualizar</PrimaryButton>
                </div>

            </div>

            <div class="flex flex-col gap-4 mt-4 p-4 border rouned-md bg-white shadow">
                <div class="w-full h-8 border-b">
                    <h2 class="text-gray-600 font-bold">Galeria</h2>
                </div>

                <div class="flex flex-wrap bg-slate-100 gap-4 items-around justify-around ">
                    <img v-for="i in 10"  src="https://images.adsttc.com/media/images/622b/9c0b/6a2b/af01/6506/d38b/slideshow/004-ok.jpg?1647025197" class="w-[24rem]" />
                </div>
            </div>
        </div>
        </form>

    </AuthenticatedLayout>
</template>
