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
        <div class="w-64 bg-white h-screen sticky shadow-md flex flex-col justify-between top-0">
            <div>
                <div class="p-4">
                    <img alt="Logo" class="h-8 w-8" height="32"
                        src="https://storage.googleapis.com/a1aa/image/pnp8TVZLdtOdhmM1_c2eKZOOIDQHYM-8D5DPQhct26U.jpg"
                        width="32" />
                </div>
                <nav class="mt-10">
                    <a class="flex items-center py-2 px-8  text-gray-700" href="#">
                        <i class="fas fa-tachometer-alt mr-3">
                        </i>
                        Dashboard
                    </a>
                    <a class="flex items-center py-2 px-8 bg-gray-200 text-gray-700" href="#">
                        <i class="fas fa-box-open mr-3">
                        </i>
                        Products
                    </a>
                    <a class="flex items-center py-2 px-8 text-gray-700" href="#">
                        <i class="fas fa-shopping-cart mr-3">
                        </i>
                        Orders
                    </a>
                    <a class="flex items-center py-2 px-8 text-gray-700" href="#">
                        <i class="fas fa-users mr-3">
                        </i>
                        Customers
                    </a>
                    <a class="flex items-center py-2 px-8 text-gray-700" href="#">
                        <i class="fas fa-cogs mr-3">
                        </i>
                        Settings
                    </a>
                </nav>
            </div>
            <div class="mb-10">
                <a class="flex items-center py-2 px-8 text-gray-700" href="/logout">
                    <i class="fas fa-sign-out-alt mr-3">
                    </i>
                    Log out
                </a>
            </div>
        </div>

        <!-- Main content -->
        <div class="flex-1 flex flex-col">

            <header class="bg-white shadow ">
                <div class="flex justify-between items-center mx-10 py-6 px-4">
                    <h1 class="text-3xl font-bold">Products</h1>
                    <div class="flex items-center">
                        <i class="fas fa-shopping-cart text-xl mr-5"></i>
                        <span class="text-gray-700">aymen jebrane</span>
                    </div>
                </div>
            </header>

            <!-- Search Bar -->
            <div class="m-10">
                <input type="text" placeholder="Search products..."
                    class="w-full p-3 border border-gray-300 rounded-lg" />
            </div>






            <!-- Product List -->

            <div class="mt-4 overflow-x-auto">

                <main class="container mx-auto px-6 py-8">
                    <h1 class="text-3xl font-bold text-gray-800 mb-6">
                        Our Products
                    </h1>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @foreach ($product as $products)
                            <div class="bg-white p-5 rounded-lg shadow flex flex-col justify-between">
                                <img alt="w-full h-48 object-cover mb-4" height="300" src="{{ $products->image }}"
                                    width="300" />
                                <div class="p-4">
                                    <h2 class="text-lg font-bold text-gray-800">
                                        {{ $products->product_name }}
                                    </h2>
                                    <p class="text-gray-600">
                                        ${{ $products->price }}
                                    </p>
                                    <button class="mt-2 bg-blue-500 text-white px-4 py-2 rounded">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </main>
            </div>
        </div>
        </main>
    </div>
    </div>

</body>

</html>
