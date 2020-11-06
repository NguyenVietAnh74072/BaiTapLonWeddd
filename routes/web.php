<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

/////////////////////////////////////////////////////////////////////////////////
/*Route::get('name/{id}', function ($id) {
    return 'name' . $id;
})->where('id', '[0-9]+'); // gioi han id tu 0-9
Route::get('name/{name?}', function ($name = 'jhoin') { //name? khong nhap thi ra cai link $name
    return $name;
});*/
////////////////////////////////////////////////////////////////////////////
$prefixAdmin = config('zvn.pre_admin'); // khai bao config    config('Tenfile.TenKhaibao')
Route::group(['prefix' => $prefixAdmin], function () { //nhom group
    Route::get('user', function () {
        return 'helo';
    });
    
    Route::group(['prefix' => 'slider'], function () {

        Route::get('/', function () {
            return 'slider home123';
        });
        Route::get('123', 'SliderController@index');
        Route::get('111', 'SliderController@from');
        Route::get('222', 'SliderController@delete');
        Route::get('edit/{id}', function ($id) {
            return 'edit' . $id;
        });
        Route::get('delete/{id}', function ($id) {
            return 'delete' . $id;
        })->where('id', '[1-9]+');
    });
    Route::get('admin', function () {
        return 'admin';
    });
    Route::get('catalog', function () {
        return 'catalog';
    });
    Route::group(['prefix' => 'admin'], function () {
        return 'catalog';
        return 'admin';
    });
});
