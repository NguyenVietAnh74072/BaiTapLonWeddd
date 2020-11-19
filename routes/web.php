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


Route::get('/}', function($id) {
    return view("welcome");
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
    $prefix= 'hotel';
    $controllerName='hotel';
    Route::group(['prefix' => $prefix], function () use($controllerName){
       $controller=ucfirst($controllerName) .'Controller@';
        Route::get('/',                  [   'as'=>$controllerName       ,  'uses'=>$controller.'index' ]);
            
    });
   //////////////////////////////////////////////Slider
    
    $prefix= 'slider';
    $controllerName='slider';
    Route::group(['prefix' => $prefix], function () use($controllerName){
       $controller=ucfirst($controllerName) .'Controller@';
        Route::get('/',                  [   'as'=>$controllerName       ,  'uses'=>$controller.'index' ]);
        Route::get('from',               [   'as'=>$controllerName.'/from'  ,  'uses'=> $controller.'from' ]);
        Route::get('from/{id}',          [   'as'=>$controllerName.'/from123'  ,  'uses'=>$controller.'from'  ]);
        Route::get('delete/{id}',        [   'as'=>$controllerName.'/delete',  'uses'=>$controller.'delete']);
        Route::get('status-{status}/{id}', [   'as'=>$controllerName.'/status',  'uses'=>$controller.'status']);
            
    });
    
});
