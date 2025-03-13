<x-app-layout>
    <div class="max-w-2xl mx-auto mt-10 bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-gray-700 dark:text-gray-100">Edit Product</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Product Name</label>
                <input type="text" name="name" value="{{ old('name', $product->name) }}" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div class="mb-4">
                <label class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Description</label>
                <textarea name="description" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    {{ old('description', $product->description) }}
                </textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Price ($)</label>
                <input type="number" name="price" value="{{ old('price', $product->price) }}" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white font-medium py-2 rounded-lg transition duration-200">
                Update Product
            </button>
        </form>
    </div>
</x-app-layout>
