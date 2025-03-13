<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crud Apps') }}
        </h2>
    </x-slot>

    <h1 class="text-2xl font-bold mb-4 text-gray-900 dark:text-gray-100">All Products</h1>
    <a href="{{ route('products.create') }}" class="px-4 py-2 border border-gray-500 text-gray-900 dark:text-gray-100 rounded hover:bg-gray-200 dark:hover:bg-gray-700 transition">
        Create Product
    </a>

    <table class="w-full mt-4 border-collapse border border-gray-300 dark:border-gray-600">
        <thead class="bg-gray-100 dark:bg-gray-700">
            <tr>
                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-100">ID</th>
                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-100">Name</th>
                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-100">Description</th>
                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-100">Price</th>
                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-100">Created At</th>
                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-100">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr class="bg-white dark:bg-gray-800">
                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-100">{{ $product->id }}</td>
                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">
                        <a href="{{ route('products.show', $product->id) }}" class="text-gray-900 dark:text-gray-100 hover:underline">
                            {{ $product->name }}
                        </a>
                    </td>
                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-100">{{ $product->description }}</td>
                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-100">${{ number_format($product->price, 2) }}</td>
                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-100">{{ $product->created_at->format('Y-m-d') }}</td>
                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 flex space-x-2">
                        <a href="{{ route('products.edit', $product->id) }}" class="px-3 py-1 border border-gray-500 text-gray-900 dark:text-gray-100 rounded hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                            Edit
                        </a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 py-1 border border-gray-500 text-gray-900 dark:text-gray-100 rounded hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
