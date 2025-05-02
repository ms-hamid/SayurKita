@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            @include('components.breadcrumb', [
                'pages_name' => 'Dashboard',
            ])
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-4 max-w-3xl mx-auto">
                <!-- Card -->
                <div class="flex items-center bg-gray-300 rounded-xl shadow-md p-4">
                    <div class="bg-white rounded-lg shadow px-4 py-2 text-center mr-4 font-bold text-lg text-gray-800">
                        10
                    </div>
                    <div class="pl-5">
                        <h3 class="text-md font-semibold text-gray-800">Product</h3>
                        <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                <!-- Card -->
                <div class="flex items-center bg-gray-300 rounded-xl shadow-md p-4">
                    <div class="bg-white rounded-lg shadow px-4 py-2 text-center mr-4 font-bold text-lg text-gray-800">
                        3
                    </div>
                    <div class="pl-5">
                        <h3 class="text-md font-semibold text-gray-800">Blog</h3>
                        <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                <!-- Card -->
                <div class="flex items-center bg-gray-300 rounded-xl shadow-md p-4">
                    <div class="bg-white rounded-lg shadow px-4 py-2 text-center mr-4 font-bold text-lg text-gray-800">
                        5
                    </div>
                    <div class="pl-5">
                        <h3 class="text-md font-semibold text-gray-800">Gallery</h3>
                        <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                <!-- Card -->
                <div class="flex items-center bg-gray-300 rounded-xl shadow-md p-4">
                    <div class="bg-white rounded-lg shadow px-4 py-2 text-center mr-4 font-bold text-lg text-gray-800">
                        12
                    </div>
                    <div class="pl-5">
                        <h3 class="text-md font-semibold text-gray-800">Account</h3>
                        <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
