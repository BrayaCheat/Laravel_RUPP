<x-app-layout>
    <div class="max-w-2xl mx-auto mt-10 p-6 rounded-lg shadow-md bg-white dark:bg-gray-800">
        <h1 class="text-2xl font-bold mb-6 text-gray-900 dark:text-gray-100">Create Product</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Product Name</label>
                <input type="text" name="name" placeholder="Enter product name" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-gray-500 focus:outline-none">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Description</label>
                <textarea name="description" placeholder="Enter product description"
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-gray-500 focus:outline-none"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Price ($)</label>
                <input type="number" name="price" placeholder="Enter price" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-gray-500 focus:outline-none">
            </div>

            <button type="submit"
                class="w-full bg-gray-700 dark:bg-gray-600 hover:bg-gray-800 dark:hover:bg-gray-500 text-white font-medium py-2 rounded-lg transition duration-200">
                Create Product
            </button>
        </form>
    </div>
</x-app-layout>
