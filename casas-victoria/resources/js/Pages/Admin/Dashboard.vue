<script setup>
import {ref} from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head  } from '@inertiajs/vue3';

const profileDropdownOpen = ref(false);


function toggleProfileDropdown()
{
    this.profileDropdownOpen.value = !this.profileDropdownOpen
}

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="max-w-screen-lg mx-auto py-12 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                
                <!-- Total Houses Card -->
                <div class="bg-white shadow rounded-lg p-6 flex flex-col items-start">
                    <span class="mt-2 text-gray-700">Total Casas</span>
                    <div class="flex items-center justify-between w-full">
                        <span class="text-3xl font-bold text-blue-600">24</span>
                        <div class="p-3 rounded-full bg-blue-50">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Active Rentals Card -->
                <div class="bg-white shadow rounded-lg p-6 flex flex-col items-start">
                    <span class="mt-2 text-gray-700">Visitas</span>
                    <div class="flex items-center justify-between w-full">
                        <span class="text-3xl font-bold text-green-600">8</span>
                        <div class="p-3 rounded-full bg-green-50">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            </svg>
                        </div>
                    </div>
                    
                </div>

                <!-- Pending Requests Card -->
                <div class="bg-white shadow rounded-lg p-6 flex flex-col items-start">
                    <span class="mt-2 text-gray-700">Solicitudes</span>
                    <div class="flex items-center justify-between w-full">
                        <span class="text-3xl font-bold text-yellow-600">3</span>
                        <div class="p-3 rounded-full bg-yellow-50">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6">
                <h3 class="text-lg font-semibold mb-4 text-gray-800">Ultimas Solicitudes</h3>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Nombre</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Casa</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Fecha</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Contacto</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-4 py-2">Jose Guadalupe</td>
                        <td class="px-4 py-2">Casa Bonita</td>
                        <td class="px-4 py-2">2025-06-01</td>
                        <td class="px-4 py-2">8341030000</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Alexia Alejandra</td>
                        <td class="px-4 py-2">Villa Verde</td>
                        <td class="px-4 py-2">2025-05-28</td>
                        <td class="px-4 py-2">8341030000</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Saul Gonzales</td>
                        <td class="px-4 py-2">Casa del Sol</td>
                        <td class="px-4 py-2">2025-05-25</td>
                        <td class="px-4 py-2">8341030000</td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>

            <!-- Charts and Recent Activity -->
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
                <!-- Sales Chart -->
                <div class="p-6 bg-white rounded-lg shadow lg:col-span-2">
                    <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-medium text-gray-900">Visitas</h2>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 text-sm font-medium text-blue-600 bg-blue-50 rounded-md">Mensual</button>
                        <button class="px-3 py-1 text-sm font-medium text-gray-500 bg-white rounded-md hover:bg-gray-50">Anual</button>
                    </div>
                    </div>
                    <div class="h-64">
                    <!-- Chart placeholder - you would replace this with a real chart component -->
                    <div class="flex items-center justify-center w-full h-full bg-gray-50 rounded">
                        <p class="text-gray-500">Graficas</p>
                    </div>
                    </div>
                </div>
                
                <!-- Recent Activity -->
                <div class="p-6 bg-white rounded-lg shadow">
                    <h2 class="mb-4 text-lg font-medium text-gray-900">Actividad Reciente</h2>
                    <div class="space-y-4">
                    <div class="flex">
                        <div class="flex-shrink-0 mr-3">
                        <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User avatar">
                        </div>
                        <div>
                        <p class="text-sm font-medium text-gray-900">Sarah Johnson <span class="text-gray-500">rented</span> Luxury Apartment</p>
                        <p class="text-sm text-gray-500">2 hours ago</p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="flex-shrink-0 mr-3">
                        <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User avatar">
                        </div>
                        <div>
                        <p class="text-sm font-medium text-gray-900">Michael Chen <span class="text-gray-500">purchased</span> Suburban House</p>
                        <p class="text-sm text-gray-500">5 hours ago</p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="flex-shrink-0 mr-3">
                        <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User avatar">
                        </div>
                        <div>
                        <p class="text-sm font-medium text-gray-900">David Wilson <span class="text-gray-500">viewed</span> Downtown Condo</p>
                        <p class="text-sm text-gray-500">1 day ago</p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="flex-shrink-0 mr-3">
                        <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User avatar">
                        </div>
                        <div>
                        <p class="text-sm font-medium text-gray-900">Emily Rodriguez <span class="text-gray-500">scheduled a tour</span> for Beachfront Villa</p>
                        <p class="text-sm text-gray-500">2 days ago</p>
                        </div>
                    </div>
                    </div>
                    <a href="#" class="block mt-4 text-sm font-medium text-blue-600 hover:text-blue-500">View all activity</a>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>
