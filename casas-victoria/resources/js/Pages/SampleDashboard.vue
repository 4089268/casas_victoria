<template>
    <div class="min-h-screen bg-gray-50">
            <!-- Sidebar -->
            <div class="fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-lg">
            <div class="flex items-center justify-center h-16 px-4 bg-blue-600">
                <span class="text-xl font-bold text-white">RealEstatePro</span>
            </div>
            <nav class="px-4 py-6">
                <div class="space-y-1">
                <router-link 
                    to="/dashboard" 
                    class="flex items-center px-4 py-3 text-sm font-medium text-blue-700 bg-blue-100 rounded-lg"
                    active-class="bg-blue-100 text-blue-700"
                >
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </router-link>
                <router-link 
                    to="/properties" 
                    class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100"
                    active-class="bg-blue-100 text-blue-700"
                >
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    Properties
                </router-link>
                <router-link 
                    to="/transactions" 
                    class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100"
                    active-class="bg-blue-100 text-blue-700"
                >
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                    </svg>
                    Transactions
                </router-link>
                <router-link 
                    to="/clients" 
                    class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100"
                    active-class="bg-blue-100 text-blue-700"
                >
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    Clients
                </router-link>
                <router-link 
                    to="/reports" 
                    class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100"
                    active-class="bg-blue-100 text-blue-700"
                >
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Reports
                </router-link>
                </div>
                
                <div class="pt-6 mt-6 border-t border-gray-200">
                <router-link 
                    to="/settings" 
                    class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100"
                    active-class="bg-blue-100 text-blue-700"
                >
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Settings
                </router-link>
                </div>
            </nav>
            </div>

            <!-- Main Content -->
            <div class="pl-64">
            <!-- Top Navigation -->
            <header class="sticky top-0 z-40 bg-white border-b border-gray-200">
                <div class="flex items-center justify-between h-16 px-6">
                <div class="flex items-center">
                    <button class="p-1 text-gray-500 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    </button>
                    <div class="hidden md:block">
                    <div class="relative max-w-xs">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                        </div>
                        <input type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Search...">
                    </div>
                    </div>
                </div>
                
                <div class="flex items-center space-x-4">
                    <button class="p-1 text-gray-500 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    </button>
                    
                    <div class="relative">
                    <button @click="toggleProfileDropdown" class="flex items-center space-x-2 focus:outline-none">
                        <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User profile">
                        <span class="hidden text-sm font-medium text-gray-700 md:block">John Doe</span>
                        <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    
                    <div v-if="profileDropdownOpen" class="absolute right-0 w-48 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                        <div class="py-1" role="none">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <main class="p-6">
                <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-900">Dashboard Overview</h1>
                <p class="text-gray-600">Welcome back! Here's what's happening with your properties today.</p>
                </div>
                
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2 lg:grid-cols-4">
                <div class="p-6 bg-white rounded-lg shadow">
                    <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Properties</p>
                        <p class="mt-1 text-3xl font-semibold text-gray-900">124</p>
                        <p class="mt-1 text-sm text-green-600">+12% from last month</p>
                    </div>
                    <div class="p-3 rounded-full bg-blue-50">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    </div>
                </div>
                
                <div class="p-6 bg-white rounded-lg shadow">
                    <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">For Sale</p>
                        <p class="mt-1 text-3xl font-semibold text-gray-900">68</p>
                        <p class="mt-1 text-sm text-green-600">+8% from last month</p>
                    </div>
                    <div class="p-3 rounded-full bg-green-50">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    </div>
                </div>
                
                <div class="p-6 bg-white rounded-lg shadow">
                    <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">For Rent</p>
                        <p class="mt-1 text-3xl font-semibold text-gray-900">56</p>
                        <p class="mt-1 text-sm text-green-600">+4% from last month</p>
                    </div>
                    <div class="p-3 rounded-full bg-purple-50">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                        </svg>
                    </div>
                    </div>
                </div>
                
                <div class="p-6 bg-white rounded-lg shadow">
                    <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Revenue</p>
                        <p class="mt-1 text-3xl font-semibold text-gray-900">$124,800</p>
                        <p class="mt-1 text-sm text-green-600">+22% from last month</p>
                    </div>
                    <div class="p-3 rounded-full bg-yellow-50">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    </div>
                </div>
                </div>
                
                <!-- Charts and Recent Activity -->
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
                    <!-- Sales Chart -->
                    <div class="p-6 bg-white rounded-lg shadow lg:col-span-2">
                        <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-medium text-gray-900">Property Sales & Rentals</h2>
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 text-sm font-medium text-blue-600 bg-blue-50 rounded-md">Monthly</button>
                            <button class="px-3 py-1 text-sm font-medium text-gray-500 bg-white rounded-md hover:bg-gray-50">Yearly</button>
                        </div>
                        </div>
                        <div class="h-64">
                        <!-- Chart placeholder - you would replace this with a real chart component -->
                        <div class="flex items-center justify-center w-full h-full bg-gray-50 rounded">
                            <p class="text-gray-500">Sales & Rentals Chart</p>
                        </div>
                        </div>
                    </div>
                    
                    <!-- Recent Activity -->
                    <div class="p-6 bg-white rounded-lg shadow">
                        <h2 class="mb-4 text-lg font-medium text-gray-900">Recent Activity</h2>
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
                
                <!-- Recent Properties -->
                <div class="mt-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-medium text-gray-900">Recent Properties</h2>
                    <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500">View all properties</a>
                </div>
                
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Property Card 1 -->
                    <div class="overflow-hidden bg-white rounded-lg shadow">
                    <div class="relative">
                        <img class="object-cover w-full h-48" src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Modern house">
                        <div class="absolute top-0 left-0 px-2 py-1 m-2 text-xs font-medium text-white bg-blue-600 rounded">
                        For Sale
                        </div>
                        <div class="absolute bottom-0 right-0 px-2 py-1 m-2 text-xs font-medium text-white bg-gray-900 rounded">
                        $450,000
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-medium text-gray-900">Modern Family Home</h3>
                        <p class="mt-1 text-sm text-gray-500">123 Main St, Anytown, USA</p>
                        <div class="flex mt-4 space-x-4 text-sm text-gray-500">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            4 beds
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            3 baths
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                            </svg>
                            2,450 sqft
                        </div>
                        </div>
                        <div class="flex mt-4 space-x-2">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Featured</span>
                        </div>
                    </div>
                    </div>
                    
                    <!-- Property Card 2 -->
                    <div class="overflow-hidden bg-white rounded-lg shadow">
                    <div class="relative">
                        <img class="object-cover w-full h-48" src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Downtown apartment">
                        <div class="absolute top-0 left-0 px-2 py-1 m-2 text-xs font-medium text-white bg-purple-600 rounded">
                        For Rent
                        </div>
                        <div class="absolute bottom-0 right-0 px-2 py-1 m-2 text-xs font-medium text-white bg-gray-900 rounded">
                        $2,500/mo
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-medium text-gray-900">Downtown Luxury Apartment</h3>
                        <p class="mt-1 text-sm text-gray-500">456 Center Ave, Metropolis, USA</p>
                        <div class="flex mt-4 space-x-4 text-sm text-gray-500">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            2 beds
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            2 baths
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                            </svg>
                            1,200 sqft
                        </div>
                        </div>
                        <div class="flex mt-4 space-x-2">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                        </div>
                    </div>
                    </div>
                    
                    <!-- Property Card 3 -->
                    <div class="overflow-hidden bg-white rounded-lg shadow">
                    <div class="relative">
                        <img class="object-cover w-full h-48" src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Beachfront villa">
                        <div class="absolute top-0 left-0 px-2 py-1 m-2 text-xs font-medium text-white bg-blue-600 rounded">
                        For Sale
                        </div>
                        <div class="absolute bottom-0 right-0 px-2 py-1 m-2 text-xs font-medium text-white bg-gray-900 rounded">
                        $1,250,000
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-medium text-gray-900">Beachfront Villa</h3>
                        <p class="mt-1 text-sm text-gray-500">789 Ocean Dr, Coastal City, USA</p>
                        <div class="flex mt-4 space-x-4 text-sm text-gray-500">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            5 beds
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            4.5 baths
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                            </svg>
                            3,800 sqft
                        </div>
                        </div>
                        <div class="flex mt-4 space-x-2">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Featured</span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Open House</span>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </main>
            </div>
        </div>
</template>