<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../styles/adminIndex.css">
    <title>Manage Orders</title>
</head>
<body>
    <?php include "sidebar.php" ?>
    <main>
        <div class="flex items-center justify-center pt-12">
            <div class="container">
                <h2 class="text-4xl pb-2 border-b border-b-slate-700">Manage Products</h2>
                <div class="relative overflow-x-auto shadow-lg sm:rounded-lg mt-10">
                    <table class="w-full text-sm text-left rtl:text-right text-black">
                        <thead class="text-xs text-gray-700 uppercase bg-white">
                            <tr>
                                <th scope="col" class="px-6 py-3">Order ID</th>
                                <th scope="col" class="px-6 py-3">Category</th>
                                <th scope="col" class="px-6 py-3">Product</th>
                                <th scope="col" class="px-6 py-3">Amount</th>
                                <th scope="col" class="px-6 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Rows -->
                            <tr class="odd:bg-white even:bg-gray-50 border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">1</th>
                                <td class="px-6 py-4">Hot Latte</td>
                                <td class="px-6 py-4">Cafe Latte</td>
                                <td class="px-6 py-4">Large</td>
                                <td class="px-6 py-4">
                                    <a href="#" class="toggle-modal font-medium text-blue-600 hover:underline"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                            <tr class="odd:bg-white even:bg-gray-50 border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">1</th>
                                <td class="px-6 py-4">Hot Latte</td>
                                <td class="px-6 py-4">Cafe Latte</td>
                                <td class="px-6 py-4">Large</td>
                                <td class="px-6 py-4">
                                    <a href="#" class="toggle-modal font-medium text-blue-600 hover:underline"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>

                            <tr class="odd:bg-white even:bg-gray-50 border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">1</th>
                                <td class="px-6 py-4">Hot Latte</td>
                                <td class="px-6 py-4">Cafe Latte</td>
                                <td class="px-6 py-4">Large</td>
                                <td class="px-6 py-4">
                                    <a href="#" class="toggle-modal font-medium text-blue-600 hover:underline"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>

                            <tr class="odd:bg-white even:bg-gray-50 border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">1</th>
                                <td class="px-6 py-4">Hot Latte</td>
                                <td class="px-6 py-4">Cafe Latte</td>
                                <td class="px-6 py-4">Large</td>
                                <td class="px-6 py-4">
                                    <a href="#" class="toggle-modal font-medium text-blue-600 hover:underline"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div id="static-modal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
        <div class="relative w-full max-w-lg p-4 bg-white rounded-lg shadow dark:bg-white">
            <!-- Modal Header -->
            <div class="flex justify-between items-center p-4 border-b dark:border-gray-600">
                <h3 class="text-lg font-semibold text-black">Product Details</h3>
                <button id="close-modal" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <form action="" class="mt-6 mb-6 grid grid-cols-3 gap-4">
                <!-- Add-on Options -->
                <div class="col-span-3">
                    <label for="quantity" class="block text-sm font-medium text-gray-700">Product Name</label>
                    <input type="text" name="quantity" id="quantity" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="Hot Latte" >
                </div>

                <div class="col-span-3">
                    <label for="quantity" class="block text-sm font-medium text-gray-700">Product Name</label>
                    <input type="text" name="quantity" id="quantity" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="Cafe Latte">
                </div>

                <div class="col-span-3">
                    <label for="quantity" class="block text-sm font-medium text-gray-700">Price Size (Small)</label>
                    <input type="number" name="quantity" id="quantity" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="100">
                </div>

                <div class="col-span-3">
                    <label for="quantity" class="block text-sm font-medium text-gray-700">Price Size (Medium)</label>
                    <input type="number" name="quantity" id="quantity" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="120">
                </div>
            </form>

            <!-- Modal Footer -->
            <div class="flex justify-end space-x-2 p-4 border-t dark:border-gray-600">
                <button class="add-to-cart px-5 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Save</button>
                <button class="close-modal-footer px-5 py-2 text-white bg-gray-500 border rounded-lg hover:bg-gray-600">Close</button>
            </div>
        </div>
    </div>

    <script>
        // Toggle modal visibility
        document.querySelectorAll('.toggle-modal').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                document.getElementById('static-modal').classList.remove('hidden');
            });
        });

        // Close modal on header button
        document.getElementById('close-modal').addEventListener('click', function () {
            document.getElementById('static-modal').classList.add('hidden');
        });

        // Close modal on footer buttons
        document.querySelectorAll('.close-modal-footer').forEach(button => {
            button.addEventListener('click', function () {
                document.getElementById('static-modal').classList.add('hidden');
            });
        });
    </script>
</body>
</html>