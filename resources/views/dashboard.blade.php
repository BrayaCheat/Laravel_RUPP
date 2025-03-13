<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                    <h1>{{ __("Braya Smos is logged in!") }}</h1>
                    <a href="{{ route('products.index') }}" class="underline mx-10">
                        Crud Apps
                    </a>
                    <br>
                    <a href="{{ route('braya') }}" class="underline mx-10">
                        Custom Layouts
                    </a>
            </div>
        </div>
    </div>
</x-app-layout>
