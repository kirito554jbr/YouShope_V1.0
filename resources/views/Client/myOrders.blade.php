<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Laravel Breeze Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Sidebar -->
        <div class="bg-white w-full md:w-64 shadow-md">
            <div class="p-4">
                <img alt="Logo" class="h-8 w-8" height="32"
                    src="https://storage.googleapis.com/a1aa/image/pnp8TVZLdtOdhmM1_c2eKZOOIDQHYM-8D5DPQhct26U.jpg"
                    width="32" />
            </div>
            <nav class="mt-10">
                <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-gray-900"
                    href="#">
                    <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
                </a>
                <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-gray-900"
                    href="/ProductsCalient">
                    <i class="fas fa-box-open mr-3"></i> Products
                </a>
                <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-gray-900"
                    href="clientOrders">
                    <i class="fas fa-shopping-cart mr-3"></i> Orders
                </a>
                <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-gray-900"
                    href="#">
                    <i class="fas fa-users mr-3"></i> Customers
                </a>
                <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-gray-900"
                    href="#">
                    <i class="fas fa-cogs mr-3"></i> Settings
                </a>
            </nav>
        </div>

        <!-- Main content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                    <h1 class="text-3xl font-bold text-gray-900">Orders</h1>


                    <div class="relative">
                        <button aria-expanded="false" aria-haspopup="true"
                            class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            id="user-menu-button" type="button">
                            <span class="sr-only">Open user menu</span>
                            <span class="text-gray-500">
                                {{ $userName->name }}
                            </span>
                            <i class="fas fa-chevron-down ml-2 text-gray-500"></i>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main content area -->
            <main class="flex-1 overflow-y-auto">
                <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">




                    <!-- Product List -->
                    <div class="mt-8 bg-white shadow rounded-lg p-6">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Orders List</h3>

                        </div>
                        <div class="mt-4 overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>

                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Order ID</th>
                                        <th
                                            class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Date</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Total</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Details</th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($orders as $order)
                                        <!-- Orders Section -->
                                        <div class="mt-6">
                                            <div class="flex flex-col">
                                                <div
                                                    class="min-w-full overflow-hidden overflow-x-auto align-middle shadow sm:rounded-lg">
                                                    <table class="min-w-full divide-y divide-gray-200">

                                                        <tbody class="bg-white divide-y divide-gray-200 ">
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                                    #{{ $order->id }}
                                                                </td>
                                                                <td
                                                                    class="px-4  py-4 whitespace-nowrap text-sm text-gray-500">
                                                                    {{ $order->created_at->format('d-m-Y') }}
                                                                </td>
                                                                <td
                                                                    class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                                                                    ${{ $order->Prix_Total }}
                                                                </td>
                                                                <td
                                                                    class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                                                                    {{ $order->status }}
                                                                </td>
                                                                <td
                                                                    class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                                                                    <a class="text-indigo-600 hover:text-indigo-900"
                                                                        href="/details/{{ $order->id }}">
                                                                        View
                                                                    </a>
                                                                </td>
                                                            </tr>
                                    @endforeach
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
