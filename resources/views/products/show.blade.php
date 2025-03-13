<x-app-layout>
    <div class="max-w-2xl mx-auto mt-10 bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md border border-gray-300 dark:border-gray-600">
        <h1 class="text-3xl font-bold mb-4 text-gray-900 dark:text-gray-100">{{ $product->name }}</h1>

        <p class="text-gray-900 dark:text-gray-100 mb-3"><strong class="text-gray-700 dark:text-gray-300">Description:</strong> {{ $product->description }}</p>
        <p class="text-gray-900 dark:text-gray-100 mb-3"><strong class="text-gray-700 dark:text-gray-300">Price:</strong>
            <span class="text-green-600 dark:text-green-400 font-semibold">${{ number_format($product->price, 2) }}</span>
        </p>
        <p class="text-gray-700 dark:text-gray-300 text-sm"><strong>Created At:</strong> {{ $product->created_at->format('Y-m-d') }}</p>

        <div class="mt-6 flex space-x-3">
            <a href="{{ route('products.edit', $product->id) }}"
               class="px-4 py-2 border border-gray-500 text-gray-900 dark:text-gray-100 rounded hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                Edit
            </a>

            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="px-4 py-2 border border-gray-500 text-gray-900 dark:text-gray-100 rounded hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                    Delete
                </button>
            </form>
        </div>

        <a href="{{ route('products.index') }}"
           class="block mt-6 text-gray-900 dark:text-gray-100 hover:underline">
            ← Back to Products
        </a>
    </div>
</x-app-layout>
