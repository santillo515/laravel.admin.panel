<?php

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');



/*Route::post('/home', 'HomeController@index')->name('home');*/



/** Панель админа пути */
Route::group(['middleware' => ['status', 'auth']], function ()
{
     Route::get('/logout', ['as' => 'logout', 'uses' => 'UserBaseControLogout@getLogout'])
         ->name('home')->middleware('auth');
    $groupData = [
        'namespace' => 'Blog\Admin',
        'prefix' => 'admin',
    ];
/*админ индекс включает MainController, прежде чем пойти сюда он проверяет наш статус регистрации*/
    Route::group($groupData, function () {
        Route::resource('index', 'MainController')
            ->names('blog.admin.index');
    });
});



