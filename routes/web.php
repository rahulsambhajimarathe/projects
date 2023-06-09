<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontendurl;
use App\Http\Controllers\BackenSetup;
use App\Http\Controllers\Tags;

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



Route::get('/', [Frontendurl::class, 'index']);
Route::get('/about', [Frontendurl::class, 'about']);
Route::get('/contact', [Frontendurl::class, 'contact']);
Route::get('/latest-post', [Frontendurl::class, 'latestpost']);
Route::get('/category', [Frontendurl::class, 'category']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/backend/admin_info', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/backend/admin_info', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/backend/admin_info', [ProfileController::class, 'destroy'])->name('profile.destroy');

        
    //backend routes
    Route::get("/admin_login", [BackenSetup::class, "adminlogin"]);

    // admin panle routes
    Route::get("/backend", [BackenSetup::class, "setup"]);

    // post list
    Route::get("/backend/all_post_list", [BackenSetup::class, "allpost"]);

    //recyle bin posts
    Route::get("/backend/recovry_post", [BackenSetup::class, "recovrypost"]);

    // this is for crate post 
    Route::get("backend/create_post", [BackenSetup::class, "createpost"]);
    Route::post("backend/create_post/data", [BackenSetup::class, "showdata"]);

    // this is for edit the post
    Route::get("backend/edit_post", [BackenSetup::class, "editpost"]);
    Route::post("backend/edit_post/data", [BackenSetup::class, "editdata"]);

    // tags
    Route::get("/backend/tags", [BackenSetup::class, "tags"]);

    // gallery
    Route::get("/backend/gallery", [BackenSetup::class, "gallery"]);

    // category list
    Route::get("/backend/all_category", [BackenSetup::class, "category"]);
    // category create
    Route::get("/backend/create_category", [BackenSetup::class, "createcategory"]);
    Route::post("/backend/create_category", [BackenSetup::class, "postcreatecategory"]);

    // category edit
    Route::get("/backend/edit_category", [BackenSetup::class, "editcategory"]);
    Route::post("/backend/create_category", [BackenSetup::class, "posteditcategory"]);


    // sub category list
    Route::get("/backend/all_sub_category", [BackenSetup::class, "subcategorylist"]);

    // create sub category
    Route::get("/backend/create_sub_category", [BackenSetup::class, "subcategorycreate"]);
    Route::post("/backend/create_sub_category", [BackenSetup::class, "postsubcategorycreate"]);

    // edit sub category

    Route::get("/backend/sub_edit_category", [BackenSetup::class, "editsub"]);
    Route::post("/backend/sub_edit_category", [BackenSetup::class, "saveeditsub"]);



    // commented 
    Route::get("/backend/comment_list", [BackenSetup::class, "cmtlist"]);
});

require __DIR__.'/auth.php';
