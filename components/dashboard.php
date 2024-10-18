<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/dashboard.css">
    <link rel="stylesheet" href="../styles/cart.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
</head>
<body>
    <?php include "sidebar.php" ?>

    <div class="flex items-center justify-center main-con">
        <div class="con">
            <h2>Dashboard</h2>
        <div class="relative overflow-x-auto shadow-lg sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-black">
                <thead class="text-xs text-gray-700 uppercase bg-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">Order ID</th>
                        <th scope="col" class="px-6 py-3">Category</th>
                        <th scope="col" class="px-6 py-3">Product</th>
                        <th scope="col" class="px-6 py-3">Size</th>
                        <th scope="col" class="px-6 py-3">Quantity</th>
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
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">₱100</td>
                        <td class="px-6 py-4">
                            <a href="#" class="toggle-modal font-medium text-blue-600 hover:underline">Edit</a>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->

                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">1</th>
                        <td class="px-6 py-4">Hot Latte</td>
                        <td class="px-6 py-4">Cafe Latte</td>
                        <td class="px-6 py-4">Large</td>
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">₱100</td>
                        <td class="px-6 py-4">
                            <a href="#" class="toggle-modal font-medium text-blue-600 hover:underline">Edit</a>
                        </td>
                    </tr>

                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">1</th>
                        <td class="px-6 py-4">Hot Latte</td>
                        <td class="px-6 py-4">Cafe Latte</td>
                        <td class="px-6 py-4">Large</td>
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">₱100</td>
                        <td class="px-6 py-4">
                            <a href="#" class="toggle-modal font-medium text-blue-600 hover:underline">Edit</a>
                        </td>
                    </tr>

                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">1</th>
                        <td class="px-6 py-4">Hot Latte</td>
                        <td class="px-6 py-4">Cafe Latte</td>
                        <td class="px-6 py-4">Large</td>
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">₱100</td>
                        <td class="px-6 py-4">
                            <a href="#" class="toggle-modal font-medium text-blue-600 hover:underline">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="static-modal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
        <div class="relative w-full max-w-lg p-4 bg-white rounded-lg shadow dark:bg-white">
            <!-- Modal Header -->
            <div class="flex justify-between items-center p-4 border-b dark:border-gray-600">
                <h3 class="text-lg font-semibold text-black">Edit Order</h3>
                <button id="close-modal" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <form action="" class="mt-6 mb-6 grid grid-cols-3 gap-4">
                <!-- Add-on Options -->
                <div><input type="radio" name="add-ons" checked><label for="">₱5 Espresso</label></div>
                <div><input type="radio" name="add-ons"><label for="">₱10 Pearls</label></div>
                <div><input type="radio" name="add-ons"><label for="">₱10 Nata</label></div>
                <div><input type="radio" name="add-ons"><label for="">₱10 Coffee Jelly</label></div>
                <div><input type="radio" name="add-ons"><label for="">₱10 Cream Cheese</label></div>
                <div><input type="radio" name="add-ons"><label for="">₱10 Yakult</label></div>

                <!-- Quantity -->
                <div class="col-span-3">
                    <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="2" min="1">
                </div>
            </form>

            <!-- Modal Footer -->
            <div class="flex justify-end space-x-2 p-4 border-t dark:border-gray-600">
                <button class="add-to-cart px-5 py-2 text-white bg-blue-700 rounded-lg hover:bg-blue-800">Save</button>
                <button class="close-modal-footer px-5 py-2 text-gray-900 bg-white border rounded-lg hover:bg-gray-100">Close</button>
            </div>
        </div>
    </div>
    <?php include "cart.php" ?>
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

<script>
        document.getElementById("cart").addEventListener("click", function () {
            document.getElementById("cart-container").style.right = "0";
        });

        document.querySelector(".close-btn").addEventListener("click", function () {
            document.getElementById("cart-container").style.right = "-100%";
        });
    </script>
</body>
</html>
