<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontendurl;
use App\Http\Controllers\BackenSetup;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;

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


                        // ======this is tags creation and deletion ==========//
    // tags
    Route::get("/backend/tags", [TagsController::class, "tagsm"]);
    // tags add
    Route::post("/backend/tags/add", [TagsController::class, "create_tags"]);
    // tag delete
    Route::get("/backend/tags/{id}", [TagsController::class, "delete_tags"]);


    

                        // ======This is for category======//
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


                        // === This is Sub category === //    
    // sub category list
    Route::get("/backend/all_sub_category", [SubCategoryController::class, "subcategorylist"]);

    // create sub category
    Route::get("/backend/create_sub_category", [SubCategoryController::class, "subcategorycreate"]);
    Route::post("/backend/create_sub_category", [SubCategoryController::class, "postsubcategorycreate"]);

    // edit sub category

    Route::get("/backend/sub_edit_category", [SubCategoryController::class, "editsub"]);
    Route::post("/backend/sub_edit_category", [SubCategoryController::class, "saveeditsub"]);




    //backend routes
    // Route::get("/admin_login", [BackenSetup::class, "adminlogin"]);





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


    


    // gallery
    Route::get("/backend/gallery", [BackenSetup::class, "gallery"]);
    







    // commented 
    Route::get("/backend/comment_list", [BackenSetup::class, "cmtlist"]);
});

require __DIR__.'/auth.php';
