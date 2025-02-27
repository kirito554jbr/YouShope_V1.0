<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Laravel Breeze Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Sidebar -->
        <div class="bg-white w-full md:w-64 shadow-md">
            <div class="p-4">
                <img alt="Logo" class="h-8 w-8" height="32" src="https://storage.googleapis.com/a1aa/image/pnp8TVZLdtOdhmM1_c2eKZOOIDQHYM-8D5DPQhct26U.jpg" width="32"/>
            </div>
            <nav class="mt-10">
                <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-gray-900" href="#">
                    <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
                </a>
                <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-gray-900" href="#">
                    <i class="fas fa-box-open mr-3"></i> Products
                </a>
                <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-gray-900" href="#">
                    <i class="fas fa-shopping-cart mr-3"></i> Orders
                </a>
                <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-gray-900" href="#">
                    <i class="fas fa-users mr-3"></i> Customers
                </a>
                <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-gray-900" href="#">
                    <i class="fas fa-cogs mr-3"></i> Settings
                </a>
            </nav>
        </div>

        <!-- Main content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                    <h1 class="text-3xl font-bold text-gray-900">Laravel Breeze Dashboard</h1>
                    <div class="relative">
                        <button aria-expanded="false" aria-haspopup="true" class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button" type="button">
                            <span class="sr-only">Open user menu</span>
                            <span class="text-gray-500">aymen jebrane</span>
                            <i class="fas fa-chevron-down ml-2 text-gray-500"></i>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main content area -->
            <main class="flex-1 overflow-y-auto">
                <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                    <!-- Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-white shadow rounded-lg p-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Total Sales</h3>
                            <p class="mt-2 text-2xl font-semibold text-gray-900">$12,345</p>
                        </div>
                        <div class="bg-white shadow rounded-lg p-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Total Orders</h3>
                            <p class="mt-2 text-2xl font-semibold text-gray-900">1,234</p>
                        </div>
                        <div class="bg-white shadow rounded-lg p-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Total Customers</h3>
                            <p class="mt-2 text-2xl font-semibold text-gray-900">567</p>
                        </div>
                    </div>

                    <!-- Recent Orders Table -->
                    <div class="mt-8 bg-white shadow rounded-lg p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Recent Orders</h3>
                        <div class="mt-4 overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">#12345</td>
                                        <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                                        <td class="px-6 py-4 whitespace-nowrap">2023-10-01</td>
                                        <td class="px-6 py-4 whitespace-nowrap">$123.45</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Shipped</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">#12346</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Jane Smith</td>
                                        <td class="px-6 py-4 whitespace-nowrap">2023-10-02</td>
                                        <td class="px-6 py-4 whitespace-nowrap">$67.89</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Processing</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">#12347</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Alice Johnson</td>
                                        <td class="px-6 py-4 whitespace-nowrap">2023-10-03</td>
                                        <td class="px-6 py-4 whitespace-nowrap">$45.67</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Delivered</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Product List -->
                    <div class="mt-8 bg-white shadow rounded-lg p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Product List</h3>
                        <div class="mt-4 overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product ID</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">#P12345</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Product 1</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Category 1</td>
                                        <td class="px-6 py-4 whitespace-nowrap">$12.34</td>
                                        <td class="px-6 py-4 whitespace-nowrap">In Stock</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">#P12346</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Product 2</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Category 2</td>
                                        <td class="px-6 py-4 whitespace-nowrap">$56.78</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Out of Stock</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">#P12347</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Product 3</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Category 3</td>
                                        <td class="px-6 py-4 whitespace-nowrap">$90.12</td>
                                        <td class="px-6 py-4 whitespace-nowrap">In Stock</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>