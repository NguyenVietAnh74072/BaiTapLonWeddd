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
    
   
    $prefix= 'slider';
    Route::group(['prefix' => $prefix], function () use($prefix){

       $prefixcontroller ='Slidercontroller@';
        Route::get('/',                  [   'as'=>'slider'         ,  'uses'=>$prefixcontroller.'index' ]);
        Route::get('from',               [   'as'=>$prefix.'/from'  ,  'uses'=> $prefixcontroller.'from' ]);
        Route::get('from/{id}',          [   'as'=>$prefix.'/from123'  ,  'uses'=>$prefixcontroller.'from'  ]);
        Route::get('delete/{id}',        [   'as'=>$prefix.'/delete',  'uses'=>$prefixcontroller.'delete']);
        Route::get('status-{status}/{id}', [   'as'=>$prefix.'/status',  'uses'=>$prefixcontroller.'status']);
            
    });
    
});
