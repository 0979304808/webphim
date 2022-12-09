<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\Auth\LoginController;
use App\Http\Controllers\BackEnd\Auth\RegisterController;
use App\Http\Controllers\BackEnd\HomeController;
use App\Http\Controllers\BackEnd\Posts\PostController;
use App\Http\Controllers\BackEnd\Profile\ProfileController;
use App\Http\Controllers\BackEnd\Categories\CategoryController;


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

Route::get('/', function () {
    return view('welcome');
});


// --------------------- BackEnd -------------------------

Route::group(['prefix' => 'admin', 'namespace' => 'BackEnd'], function () {

    // Login and register
    Route::group(['namespace' => 'Auth'], function () {
        Route::get('/login', [LoginController::class, 'index'])->name('backend.index');
        Route::post('/login', [LoginController::class, 'login'])->name('backend.login');
        Route::get('register', [RegisterController::class, 'index'])->name('backend.register');

        Route::get('register', [RegisterController::class, 'index'])->name('backend.register');
        Route::post('register', [RegisterController::class, 'register'])->name('backend.register.create');
    });

    // Login thành công
    Route::group([
        'middleware' => 'user'
    ], function () {

        // Dashboard và logout
        Route::get('/dashboard', [HomeController::class, 'index'])->name('backend.dashboard');
        Route::get('/logout', [HomeController::class, 'logout'])->name('backend.logout');


        // Administrator
        Route::group([
        ], function () {

            // Account
            Route::group([
                'prefix' => 'accounts',
                'namespace' => 'Accounts',
                // 'middleware' => ['role:administrator']
            ], function () {
                Route::get('/', 'AccountController@list')->name('backend.account');
                Route::put('/', 'AccountController@active')->name('backend.account.active');
                Route::put('update-role', 'AccountController@updateRoleAdmin')->name('backend.account.update.role');
                Route::put('update-permission', 'AccountController@updatePermissionAdmin')->name('backend.account.update.permission');
            });

            // Role
            Route::group([
                'prefix' => 'roles',
                'namespace' => 'Accounts',
                'middleware' => ['role:administrator']
            ], function () {
                Route::get('/', 'RoleController@list')->name('backend.role');
                Route::post('/', 'RoleController@create')->name('backend.role.create');
                Route::put('add-permission', 'RoleController@addPermissionToRole')->name('backend.role.add.permission');
                Route::delete('/', 'RoleController@delete')->name('backend.role.delete');
            });

            // Permission
            Route::group([
                'prefix' => 'permissions',
                'namespace' => 'Accounts',
                'middleware' => ['role:administrator']
            ], function () {
                Route::get('/', 'PermissionController@list')->name('backend.permission');
                Route::post('/', 'PermissionController@create')->name('backend.permission.create');
            });

            // Profile
            Route::group([
                'prefix' => 'profile',
                'namespace' => 'Profile',
                // 'middleware' => ['role:administrator|visitor|manager|editor']
            ], function () {
                Route::group([
                    'prefix' => '{user}',
                    'where' => ['user', '[0-9]+']
                ], function () {
                    Route::get('/', [ ProfileController::class, 'detail' ])->name('backend.profile');
                    Route::put('image', 'ProfileController@updateImage')->name('backend.profile.image');
                    Route::put('update', 'ProfileController@updateProfile')->name('backend.profile.update');
                });

            });

            // Posts
            Route::group([
                'prefix' => 'post',
                'namespace' => 'Posts',
                // 'middleware' => ['role:administrator|visitor|manager|editor']
            ], function () {
                Route::get('/', [PostController::class, 'index'])->name('backend.posts');
                Route::get('create', 'PostController@create')->name('backend.posts.create');
                Route::post('create', 'PostController@store')->name('backend.posts.store');
                Route::put('update', 'PostController@update')->name('backend.posts.update');
                Route::get('detail', 'PostController@detail')->name('backend.posts.detail');
                Route::get('/review/comment/{slug}', 'PostController@reviewComment')->name('backend.posts.review.comment');
                Route::put('catpost', 'PostController@UpdateCatePost')->name('backend.update.categories.post');
                Route::delete('delete', 'PostController@delete')->name('backend.delete.post');
            });

            // Category
            Route::group([
                'prefix' => 'category',
                'namespace' => 'Categories',
//                'middleware' => ['role:administrator']
            ], function () {
                Route::get('/', [CategoryController::class, 'index'])->name('backend.category');
                Route::post('/create', [CategoryController::class, 'create'])->name('backend.category.create');
                Route::delete('/delete', [CategoryController::class, 'delete'])->name('backend.category.delete');
                Route::get('/show', [CategoryController::class, 'show'])->name('backend.category.show');
            });

            // Comments
            Route::group([
                'prefix' => 'comment',
                'namespace' => 'Comments'
            ], function () {
                Route::post('create', 'CommentController@create')->name('backend.comments.create');
                Route::put('update', 'CommentController@update')->name('backend.comments.update');
                Route::get('review/{status}/{id}', 'CommentController@review')->name('backend.comments.review');
                Route::post('reviewAll', 'CommentController@reviewAll')->name('backend.comments.reviewAll');
                Route::get('comment/delete/{id}', 'CommentController@delete')->name('backend.comments.delete');
            });

            // test
//            Route::group([
//                'prefix' => 'test',
//            ], function () {
//                Route::get('/', function () {
//                    event(new NewEvent('abc'));
//                });
//            });


        });

    });

});
