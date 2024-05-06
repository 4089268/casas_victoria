<script setup>
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputText from '@/Components/InputText.vue';
import InputNumber from '@/Components/InputNumber.vue';

defineProps({
    'houses': Array
});


const handleNewHouseClick = ()=>{
    alert('Hola mundo');
}

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Registrando nueva casa</h2>
        </template>

        <form class="max-w-screen-2xl mx-auto">
        <div class="flex flex-col">
            
            <div class="flex flex-col gap-4 mt-4 p-4 border rouned-md bg-white shadow">

                <div class="w-full h-8 border-b">
                    <h2 class="text-gray-600 font-bold">Datos Generales</h2>
                </div>

                <div class="grid grid-cols-2 gap-4 p-4">

                    <div role="form-group">
                        <InputLabel>Nombre</InputLabel>
                        <InputText />
                    </div>

                    <div role="form-group" class="col-span-2">
                        <InputLabel>Descripcion</InputLabel>
                        <InputText />
                    </div>

                    <div role="form-group">
                        <InputLabel>Cuartos</InputLabel>
                        <InputNumber />
                    </div>

                    <div role="form-group">
                        <InputLabel>Baños</InputLabel>
                        <InputNumber />
                    </div>

                    <div role="form-group">
                        <InputLabel>Cocheras</InputLabel>
                        <InputNumber />
                    </div>
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

            <div class="flex w-full justify-center mt-4 mb-12 p-4 border rouned-md bg-white shadow mx-auto">
                <PrimaryButton type="button">Guardar</PrimaryButton>
            </div>

        </div>
        </form>

    </AuthenticatedLayout>
</template>
