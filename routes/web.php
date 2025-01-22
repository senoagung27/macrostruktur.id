<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\HomeController;



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

Auth::routes();

Route::get('/', [LandingpageController::class, 'index']);
// Route::get('/blog', 'BlogController@index');
// Route::get('/list-artikel', 'ArtikelController@list_artikel');
// Route::get('/artikel-details', 'ArtikelController@detail');
Route::get('/list-artikel', [ArtikelController::class, 'list_artikel'])->name('artikel.list_artikel');
Route::get('/artikel-detail/{slug}', [ArtikelController::class, 'detail'])->name('artikel.detail');

// Route::get('/layanan', 'LayananController@index');
// Route::get('/layanan-detail', 'LayananController@detail');
Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/layanan-detail/{slug}', [LayananController::class, 'detail'])->name('layanan.detail');

// Route::get('/portfolio', 'PortfolioController@index');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio-detail/{slug}', [PortfolioController::class, 'detail'])->name('portfolio.detail');

/*Route::get('/isi_post', function(){
	return view('blog.isi_post');
});*/
// Route::get('/isi-post/{slug}', 'BlogController@isi_blog')->name('blog.isi');
// Route::get('/list-post','BlogController@list_blog')->name('blog.list');
// Route::get('/list-category/{category}','BlogController@list_category')->name('blog.category');
// Route::get('/cari','BlogController@cari')->name('blog.cari');
Route::get('/isi-post/{slug}', [BlogController::class, 'isi_blog'])->name('blog.isi');
Route::get('/list-post', [BlogController::class, 'list_blog'])->name('blog.list');
Route::get('/list-category/{category}', [BlogController::class, 'list_category'])->name('blog.category');
Route::get('/cari', [BlogController::class, 'cari'])->name('blog.cari');




Route::group(['middleware' => 'auth'], function(){
	// Route::get('/dasboard', 'HomeController@index')->name('dasboard');
    Route::get('/dasboard', [HomeController::class, 'index'])->name('dasboard');
    // Route::get('/post', 'PostController@index')->name('post.index');
	// Route::resource('/category', 'CategoryController');

    Route::resource('/category', CategoryController::class);
    Route::resource('/tag', TagsController::class);

	// Route::get('/post/tampil_hapus', 'PostController@tampil_hapus')->name('post.tampil_hapus');
	// Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
	// Route::delete('/post/kill/{id}', 'PostController@kill')->name('post.kill');
	// Route::resource('/post', 'PostController');

	Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
	Route::get('/artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
	Route::post('/artikel/store', [ArtikelController::class, 'store'])->name('artikel.store');
	Route::get('/artikel/edit/{id}', [ArtikelController::class, 'edit'])->name('artikel.edit');
	Route::put('/artikel/update/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
	Route::delete('/artikel/delete/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');

    Route::resource('/user', UsersController::class);
});