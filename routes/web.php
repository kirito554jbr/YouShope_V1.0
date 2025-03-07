<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;
use App\Models\Categorie;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () { return view('welcome');});
// Route::get('/details/{id}', function () { return view('Client.orderDetails');});

// Route::get('/clientOrders', function () { return view('Client.myOrders');});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/createProduct', function() {return view('Admin.createProduct');});

require __DIR__ . '/auth.php';


Route::get('/role/create', [RoleController::class, 'create']);
Route::get('/role/permissions', [RoleController::class, 'permissions']);


Route::get('/Products', [ProductController::class, 'index']);
Route::get('/Products/create', [ProductController::class, 'create']);
Route::post('/Products', [ProductController::class, 'delete']);
Route::get('/Products/updateProducts', [ProductController::class, 'update']);
Route::get('/Products/update/{id}', [ProductController::class, 'showOne']);



Route::get('/Categorie/create', [CategorieController::class, 'create']);


Route::get('/createProduct', [ProductController::class, 'showCategory']);



//------------------------------------------------client------------------------------------------------//

Route::get('/ProductsCalient', [ProductController::class, 'indexClient'])->middleware(['auth']);

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);


Route::get('/users/givePermission', [UserController::class, 'givePermission']);






Route::get('/testCart', [ProductController::class, 'testCart']);
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');




Route::get('/orders/create' , [OrdersController::class, 'create']);
Route::get('/clientOrders', [OrdersController::class, 'index'])->middleware(['auth']);
Route::get('/AdminOrders', [OrdersController::class, 'Adminindex'])->middleware(['auth']);
Route::get('/details/{id}', [OrdersController::class, 'orderDetails']);
Route::get('/updateStatus',[OrdersController::class, 'updateStatus']);


 
Route::get('/checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::get('/session', [StripeController::class, 'session'])->name('session');
Route::get('/success', [StripeController::class, 'success'])->name('success');




// Route::get('/charge', function () {
//     return view('charge');
// });
// Route::post('/charge', function (Request $request) {
//     // Set your Stripe API key.
//     \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

//     // Get the payment amount and email address from the form.
//     $amount = $request->input('amount') * 100;
//     $email = $request->input('email');

//     // Create a new Stripe customer.
//     $customer = \Stripe\Customer::create([
//         'email' => $email,
//         'source' => $request->input('stripeToken'),
//     ]);
    
//     // Create a new Stripe charge.
//     $charge = \Stripe\Charge::create([
//         'customer' => $customer->id,
//         'amount' => $amount,
//         'currency' => 'usd',
//     ]);

//     // Display a success message to the user.
//     return 'Payment successful!';
// });