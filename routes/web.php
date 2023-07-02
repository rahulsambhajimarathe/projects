<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontendurl;
use App\Http\Controllers\BackenSetup;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\PostController;

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

Route::get('/latest-post/{slug}', [Frontendurl::class, 'latestpost']);
Route::get('/post/{slug}', [Frontendurl::class, 'postpage']);

Route::get('/about', [Frontendurl::class, 'about']);
Route::get('/contact', [Frontendurl::class, 'contact']);

Route::get('/category/', [Frontendurl::class, 'category']);
Route::get('/category/{id}', [Frontendurl::class, 'particcularcategory']);

// Route::post('/search-result/{search}', [Frontendurl::class, 'particcularcategory']);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/backend/admin_info', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/backend/admin_info', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/backend/admin_info', [ProfileController::class, 'destroy'])->name('profile.destroy');


                        // ======this is tags creation and deletion start ==========//
    // tags
    Route::get("/backend/tags", [TagsController::class, "tagsm"]);
    // tags add
    Route::post("/backend/tags/add", [TagsController::class, "create_tags"]);
    // tag delete
    Route::get("/backend/tags/{id}", [TagsController::class, "delete_tags"]);
                        // ======this is tags creation and deletion end ==========//



                        // ======This is for category start======//
    // category list
    Route::get("/backend/all_category", [CategoryController::class, "category"]);


    // category create
    Route::get("/backend/create_category", [CategoryController::class, "createcategory"]);
    Route::post("/backend/create_category", [CategoryController::class, "postcreatecategory"]);

    // category edit
    Route::get("/backend/edit_category/{id}", [CategoryController::class, "editcategory"]);
    Route::post("/backend/edit_categorymain/{id}", [CategoryController::class, "posteditcategory"]);

    // delte_category
    Route::get("/backend/delte_category/{id}", [CategoryController::class, "deletecategory"]);

                         // ======This is for category end======//



                        // === This is Sub category start === //
    // sub category list
    Route::get("/backend/all_sub_category", [SubCategoryController::class, "subcategorylist"]);

    // create sub category
    Route::get("/backend/create_sub_category", [SubCategoryController::class, "subcategorycreate"]);
    Route::post("/backend/create_sub_category", [SubCategoryController::class, "postsubcategorycreate"]);

    // edit sub category

    Route::get("/backend/sub_edit_category", [SubCategoryController::class, "editsub"]);
    Route::post("/backend/sub_edit_category", [SubCategoryController::class, "saveeditsub"]);
                        // === This is Sub category end === //







                        // === this is post section start === //

    // post list
    Route::get("/backend/all_post_list", [PostController::class, "allpost"]);

    //recyle bin posts                             // later we will work on it
    // Route::get("/backend/recovry_post", [PostController::class, "recovrypost"]);

    // this is for crate post
    Route::get("backend/create_post", [PostController::class, "createpost"]);
    Route::post("backend/create_post/data", [PostController::class, "savepost"]);

    // this is for edit the post
    Route::get("backend/edit_post/{id}", [PostController::class, "editpost"]);
    Route::post("backend/edit_post/{id}", [PostController::class, "editdata"]);


    // delete post
    Route::get("backend/delete_post/{id}", [PostController::class, "delete_post"]);

                        // === this is post section start === //






                        // === this is gallery section start === //


    // gallery
    Route::get("/backend/gallery", [GalleryController::class, "gallery"]);

    //gallery/feature
    Route::get("/backend/gallery/feature", [GalleryController::class, "feature_gallery"]);
    //gallery/feature //post
    Route::post("/backend/gallery/feature", [GalleryController::class, "feature_post_gallery"]);

    //gallery/feature
    Route::get("/backend/gallery/gallery", [GalleryController::class, "gallery_gallery"]);
    //gallery/feature //post
    Route::post("/backend/gallery/gallery", [GalleryController::class, "gallery_post_gallery"]);


                        // === this is gallery section end === //
    //backend routes
    // Route::get("/admin_login", [BackenSetup::class, "adminlogin"]);





    // admin panle routes
    Route::get("/backend", [BackenSetup::class, "setup"]);










    // commented
    Route::get("/backend/comment_list", [BackenSetup::class, "cmtlist"]);
});

require __DIR__.'/auth.php';
