<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\Post;
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

Auth::routes();


// File Manager
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');

// localization pilih bahasa
Route::get('lang/{locale}', [App\Http\Controllers\Controller::class, 'lang'])->name('lang');

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('homepage');
// Route::get('/dok', [App\Http\Controllers\FrontController::class, 'dokumen'])->name('dok');
// tentang ith
Route::get('/tentang-ith/profil', [App\Http\Controllers\FrontController::class, 'profil'])->name('profil');
Route::get('/tentang-ith/visi-misi', [App\Http\Controllers\FrontController::class, 'visi_misi'])->name('visi_misi');
Route::get('/tentang-ith/dokumen-resmi', [App\Http\Controllers\FrontController::class, 'dokumen'])->name('dok');
Route::get('/tentang-ith/sejarah', [App\Http\Controllers\FrontController::class, 'sejarah'])->name('sejarah');
Route::get('/tentang-ith/himne', [App\Http\Controllers\FrontController::class, 'mars'])->name('mars');
Route::get('/tentang-ith/profil-lulusan', [App\Http\Controllers\FrontController::class, 'profileJurusan'])->name('profileJurusan');
Route::get('/tentang-ith/Prestasi', [App\Http\Controllers\FrontController::class, 'prestasi'])->name('prestasi');
Route::get('/tentang-ith/Organisasi', [App\Http\Controllers\FrontController::class, 'organisasi'])->name('organisasi');
// FIXME: kerja backendnya, pelajari backendnya kalo sudah diperbaiki frontend dan responsiovenya 

// topbar
Route::get('/calon-mahasiswa', [App\Http\Controllers\FrontController::class, 'camaba'])->name('camaba');



// Akademik 
Route::get('/akademik/Kalender-Akademik', [App\Http\Controllers\FrontController::class, 'kalender'])->name('kalender');
Route::get('/akademik/Akreditasi-Program-Studi', [App\Http\Controllers\FrontController::class, 'akreditasi'])->name('akreditasi');
Route::get('/akademik/Seleksi-masuk', [App\Http\Controllers\FrontController::class, 'seleksi'])->name('seleksi');
Route::get('/akademik/Program-sarjana', [App\Http\Controllers\FrontController::class, 'programSarjana'])->name('programSarjana');
Route::get('/akademik/Beasiswa', [App\Http\Controllers\FrontController::class, 'beasiswa'])->name('beasiswa');
// Kehidupan Kampus 
Route::get('/Kehidupan-kampus/Fasil-kampus', [App\Http\Controllers\FrontController::class, 'fasilitas'])->name('fasilitas');
Route::get('/Kehidupan-kampus/kantin', [App\Http\Controllers\FrontController::class, 'kantin'])->name('fasilitas');
Route::get('/Kehidupan-kampus/peta-kampus', [App\Http\Controllers\FrontController::class, 'peta'])->name('fasilitas');
Route::get('/Kehidupan-kampus/ukm', [App\Http\Controllers\FrontController::class, 'ukm'])->name('fasilitas');


// Admin Panel
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        // Manage Categori
        Route::resource('categories', App\Http\Controllers\CategoryController::class);

        // Manage Contact
        Route::resource('contact', App\Http\Controllers\ContactController::class);

        // Manage Pmb
        Route::resource('pmb', App\Http\Controllers\PmbController::class);

        // Manage Jumbotron
        Route::resource('jumbotron', App\Http\Controllers\JumbotronController::class);

        // Mange Tags & Link
        Route::resource('tags', App\Http\Controllers\TagController::class);
        Route::post('updateLink', [App\Http\Controllers\TagController::class, 'updateLink'])->name('updateLink');
        Route::post('storeLink', [App\Http\Controllers\TagController::class, 'storeLink'])->name('storeLink');
        Route::post('destroyLink', [App\Http\Controllers\TagController::class, 'destroyLink'])->name('destroyLink');

        // Manage Posts
        Route::get('posts/trash', [App\Http\Controllers\PostController::class, 'trash'])->name('posts.trash');
        Route::post('posts/trash/{id}/restore', [App\Http\Controllers\PostController::class, 'restore'])->name('posts.restore');
        Route::delete('posts/{id}/delete-permanent', [App\Http\Controllers\PostController::class, 'deletePermanent'])->name('posts.deletePermanent');
        Route::resource('posts', App\Http\Controllers\PostController::class);

        // Manage Page
        Route::resource('page', App\Http\Controllers\PageController::class);
        Route::get('page/nav', [App\Http\Controllers\PageController::class])->name('pageNav');
        Route::post('page/edit', [App\Http\Controllers\PageController::class, 'pageUpdate'])->name('pageUpdata');
        Route::get('page/edit/{id}', [App\Http\Controllers\PageController::class, 'menuEdit'])->name('menuEdit');
        Route::get('page/back/{id}', [App\Http\Controllers\PageController::class, 'back'])->name('back');
    });
});

// Frontend
Route::get('search', [App\Http\Controllers\FrontController::class, 'search'])->name('search');
Route::get('search-category', [App\Http\Controllers\FrontController::class, 'byCategory'])->name('searchByCategory');
Route::get('tag/{tag:slug}', [App\Http\Controllers\FrontController::class, 'tag'])->name('tag');
Route::get('/contacts', [App\Http\Controllers\FrontController::class, 'kontakku'])->name('contacts');
Route::get('/topbars', [App\Http\Controllers\FrontController::class, 'topbar'])->name('topbars');
Route::get('post/{slug}', [App\Http\Controllers\FrontController::class, 'show'])->name('show');
Route::get('category/{category:slug}', [App\Http\Controllers\FrontController::class, 'category'])->name('category');
Route::get('/{slug}', [App\Http\Controllers\FrontController::class, 'showNavs'])->name('showNavs');
Route::get('/{pages?}/{slug}', [App\Http\Controllers\FrontController::class, 'showNav'])->name('showNav');

