<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard - Salle Reservation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>


    <div id="updateModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center ">
        <div class="bg-white p-5 rounded-lg shadow-lg w-1/3">
            <div class="flex justify-between items-center mb-5">
                <h2 class="text-2xl font-bold">Create user</h2>
                <button class="text-gray-500 hover:text-gray-700">
                    <a href="/Products">
                        <i class="fas fa-times"></i>
                    </a>
                </button>
            </div>
            <form action="/Products/updateProducts" method="GET">
                {{-- @dd($categorie) --}}
                <div class="mb-4">
                    <label class="block text-gray-700">Photo URL</label>
                    <input type="text" class="w-full px-3 py-2 border rounded-lg" value={{ $product['image'] }}
                        name="image" placeholder="Enter image">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Name</label>
                    <input type="text" class="w-full px-3 py-2 border rounded-lg"
                        value={{ $product['product_name'] }} name="product_name" placeholder="Enter product_name">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">quantity</label>
                    <input type="quantity" class="w-full px-3 py-2 border rounded-lg" value={{ $product['quantity'] }}
                        name="quantity" placeholder="Enter quantity">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">description</label>
                    <input type="description" class="w-full px-3 py-2 border rounded-lg"
                        value={{ $product['description'] }} name="description" placeholder="Enter description">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">price</label>
                    <input type="price" class="w-full px-3 py-2 border rounded-lg" value={{ $product['price'] }}
                        name="price" placeholder="Enter price">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700">Category</label>
                    <select name="categorie_id"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

                        @foreach ($categorie as $categories)
                            <option value={{ $categories->id }}>{{ $categories->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">

                    <input type="hidden" class="w-full px-3 py-2 border rounded-lg" value={{ $product['id'] }}
                        name="id" placeholder="Enter  capacite ">
                </div>
                <div class="flex justify-end">
                    <input value="Update" type="submit"
                        class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700">


                </div>
            </form>
        </div>
    </div>

</body>

</html>
