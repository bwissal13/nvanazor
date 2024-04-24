<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtworkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForumCommentController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ForumPostController;
use App\Http\Controllers\ForumTopicController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\StripeController;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\ForumTopicController;
// use App\Http\Controllers\ForumPostController;
// use App\Http\Controllers\ForumCommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/artworks/all',[ArtworkController::class,'all']);
Route::delete('/comments/{comment}', [ForumCommentController::class, 'destroy'])->name('comments.destroy');
Route::put('/comments/{comment}', [ForumCommentController::class, 'update'])->name('comments.update');

// Routes for forum posts
Route::get('/forum/posts/{post}/edit', [ForumPostController::class,'edit'])->name('forum.post.edit');
Route::put('/forum/posts/{post}', [ForumPostController::class,'update'])->name('forum.post.update');

Route::get('/forum/add-post', [ForumPostController::class, 'create'])->name('forum.post.create');
Route::post('/forum/add-post', [ForumPostController::class, 'store'])->name('forum.post.store');
Route::get('/dashboard/posts', [ForumPostController::class, 'show']);
Route::delete('/dashboard/posts/{id}', [ForumPostController::class, 'destroy'])->name('forum.post.delete');
Route::get('/forum/my-posts', [ForumPostController::class, 'index'])->name('forum.my_posts');
Route::resource('categories', CategoryController::class);

Route::get('/dashboard/artist', [ArtistController::class, 'showArtistPage'])->name('dashboard.artist');
Route::get('/dashboard/artworks', [ArtworkController::class, 'showArtworks'])->name('dashboard.artworks');


Route::get('/front', function () {
    return view('front.index');
});

Route::resource('/users', UserController::class);


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// Route::post('/dashboard/process-role-change/{user}', 'DashboardController@processRoleChangeRequest')->name('dashboard.process_role_change');

Route::get('forum', [ForumController::class, 'show'])->name('forum.show');

Route::get('/create-items', function () {
    return view('artworks.create-items');
});
Route::get('/profile', function () {
    return view('dashboard.profile');
});
Route::get('/layout', function () {
    return view('dashboard.layout');
});
Route::get('/fdrr', function () {
    return view('forum.post_details');
});
Route::get('/search', [ForumController::class, 'search']);

Route::post('request-role-change', [HomeController::class, 'requestRoleChange'])->name('request.role.change');

// Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/password/reset-link', [AuthController::class, 'sendPasswordResetLink'])->name('password.reset-link');
Route::post('/password/reset', [AuthController::class, 'resetPassword'])->name('password.reset');
Route::get('/email/verify', [AuthController::class, 'verifyEmail'])->name('verification.notice');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
// Password Reset Routes
// Password Reset Routes
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// routes/web.php

Route::middleware('role:admin')->group(function () {
    // Routes accessible only by users with the 'admin' role
});

Route::middleware('role:user')->group(function () {
    // Routes accessible only by users with the 'user' role
});



Route::get('/change-role', [HomeController::class, 'showChangeRoleForm'])->name('show-change-role');
Route::post('/change-role', [HomeController::class, 'changeRole'])->name('change-role');

// Route::middleware(['role:artist'])->group(function () {
//     // Show artist profile
// Route::get('/artists/{id}', [ArtistController::class, 'showProfile'])->name('artists.showProfile');

// // // Update artist profile
// Route::put('/artists/{id}', [ArtistController::class, 'updateProfile'])->name('artists.updateProfile');

// // // Delete artist profile
// Route::delete('/artists/{id}', [ArtistController::class, 'deleteProfile'])->name('artists.deleteProfile');

// // // Create artist profile
// Route::get('/artists/create', [ArtistController::class, 'create'])->name('artists.create');
Route::post('/artists', [ArtistController::class, 'store'])->name('artists.store');
// });
route::resource('artists', ArtistController::class);
route::resource('artworks', ArtworkController::class);

Route::get('/artworks/{id}/modal', [ArtworkController::class, 'showModal'])->name('artworks.modal');

Route::get('/artists/{id}/profile', [ArtistController::class, 'showProfile'])->name('profile');
Route::put('/artists/{id}/update-profile', [ArtistController::class, 'updateProfile'])->name('artists.updateProfile');


Route::post('/cart/add', [ShoppingCartController::class, 'addItem'])->name('cart.add');

Route::get('/shoppingcart', [ShoppingCartController::class, 'viewCart'])->name('front.ShoppingCart');
// routes/web.php

Route::delete('/remove-item/{id}', [ShoppingCartController::class, 'removeItem'])->name('item.remove');


// Route to display the order creation form
Route::get('/order/create', [OrderController::class, 'showCreateForm'])->name('create-order');

// Route to handle order creation
Route::post('/order/create', [OrderController::class, 'createOrder'])->name('order.create');

// Route to update order status
Route::put('/order/{id}/update-status', [OrderController::class, 'updateOrderStatus'])->name('order.update_status');


Route::post('/session', [StripeController::class, 'session'])->name('session.store');

Route::get('/success', [StripeController::class, 'success'])->name('success');

// Route to show a specific topic
Route::get('/forum/topics', [ForumTopicController::class, 'show'])->name('forum.topic.show');

// Route to show the form for adding a new topic
Route::get('/forum/add-topic', [ForumTopicController::class, 'create'])->name('forum.topic.create');

// Route to store a new topic
Route::post('/forum/add-topic', [ForumTopicController::class, 'store'])->name('forum.topic.store');


Route::get('/forum/post/{postId}/comment', [ForumCommentController::class, 'create'])->name('forum.comment.create');
Route::post('/forum/post/comment', [ForumCommentController::class, 'store'])->name('forum.comment.store');
Route::post('/forum/post/{postId}/comment', [ForumCommentController::class, 'store'])->name('forum.post.comment');



Route::delete('/forum/topics/{id}', [ForumTopicController::class, 'destroy'])->name('forum.delete_topic');
Route::get('/forum/topics/{id}/edit', [ForumTopicController::class, 'edit'])->name('forum.edit_topic');
Route::put('/forum/topics/{id}', [ForumTopicController::class, 'update'])->name('forum.update_topic');
