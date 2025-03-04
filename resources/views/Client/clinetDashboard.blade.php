<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Laravel Breeze Dashboard</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script>--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" /> 
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
        .dropdown .dropdown-menu {
            padding: 20px;
            top: 30px !important;
            width: 350px !important;
            left: -110px !important;
            box-shadow: 0px 5px 30px black;
        }

        .dropdown-menu:before {
            content: " ";
            position: absolute;
            top: -20px;
            right: 50px;
            border: 10px solid transparent;
            border-bottom-color: #fff;
        }
    </style>

</head>

<body class="bg-gray-100">
    <div class="d-flex flex-column flex-md-row min-vh-100 ">
        <!-- Sidebar -->
        <div class="bg-white shadow-md sticky-top border " style="width: 250px;">
            <div class="p-4">
                <img alt="Logo" class="h-8 w-8" height="32"
                    src="https://storage.googleapis.com/a1aa/image/pnp8TVZLdtOdhmM1_c2eKZOOIDQHYM-8D5DPQhct26U.jpg"
                    width="32" />
            </div>
            <nav class="mt-3">
                <a class="d-flex align-items-center py-2 px-4 shadow-md text-dark" href="#">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a class="d-flex align-items-center py-2 px-4 bg-light text-dark" href="#">
                    <i class="fas fa-box-open mr-3"></i>
                    Products
                </a>
                <a class="d-flex align-items-center py-2 px-4 text-dark" href="#">
                    <i class="fas fa-shopping-cart mr-3"></i>
                    Orders
                </a>
                <a class="d-flex align-items-center py-2 px-4 text-dark" href="#">
                    <i class="fas fa-cogs mr-3"></i>
                    Settings
                </a>
            </nav>
            <div class="mb-4">
                <a class="d-flex align-items-center py-2 px-4 text-dark" href="/logout">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Log out
                </a>
            </div>
        </div>

        <!-- Main content -->
        <div class="flex-1 d-flex flex-column container py-4 ">

            <header class="bg-white shadow-sm mb-4">
                <div class="d-flex justify-content-between align-items-center mx-4 py-3">
                    <h1 class="h3 font-weight-bold">Products</h1>

                    <div class="d-flex align-items-center">
                        <div class="relative">
                            <input class="form-control py-2 px-4" placeholder="Search products..." type="text" />
                        </div>

                        <div class="dropdown ml-4">
                            <button class="btn btn-primary dropdown-toggle d-flex align-items-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-shopping-cart w-8 h-4" aria-hidden="true"></i> Cart
                                <span class="badge badge-danger ml-2">{{ count((array) session('cart')) }}</span>
                            </button>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="d-flex justify-content-between border-bottom p-3">
                                    <div>
                                        <i class="fa fa-shopping-cart"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                    </div>

                                    @php $total = 0 @endphp
                                    @foreach ((array) session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                    @endforeach

                                    <div>
                                        <p>Total: <span class="text-primary">${{ $total }}</span></p>
                                    </div>
                                </div>

                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $details)
                                        <div class="row cart-detail p-2">
                                            <div class="col-3">
                                                <img src="{{ $details['image'] }}" class="img-fluid rounded" />
                                            </div>
                                            <div class="col-9">
                                                <p>{{ $details['name'] }}</p>
                                                <span class="text-primary">${{ $details['price'] }}</span>
                                                <span class="ml-2">Quantity: {{ $details['quantity'] }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                                <div class="text-center">
                                    <a href="{{ route('cart') }}" class="btn btn-primary w-100">View all</a>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="ml-4">
                            <span class="text-dark">aymen jebrane</span>
                        </div> --}}
                    </div>

                </div>

            </header>

            <!-- Product List -->
            <div class="container mt-4">
                <h2 class="h4 font-weight-bold text-gray-800 mb-4">Our Products</h2>
                <div class="row">
                    @foreach ($product as $products)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                            <div class="card shadow-sm">
                                <img class="card-img-top" height="300" width="300" src="{{ $products->image }}" alt="{{ $products->product_name }}" />
                                <div class="card-body">
                                    <h5 class="card-title">{{ $products->product_name }}</h5>
                                    <p class="card-text">${{ $products->price }}</p>
                                    <a href="{{ route('add.to.cart', $products->id) }}" class="btn btn-primary">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <div class="container mx-auto px-4">
        @if (session('success'))
            <div class="alert alert-success text-sm font-semibold p-3 rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    @yield('scripts')

</body>

</html>
