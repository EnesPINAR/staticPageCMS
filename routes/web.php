<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view(config("theme.theme").".".'welcome');
});

Route::get("/admin/change-theme",function(){
    //$url = "https://icdn.ensonhaber.com/resimler/galeri/206457.jpg";
    //$file = Storage::put("deneme.jpg",file_get_contents($url));

    File::move(storage_path("app/deneme"),resource_path("views/deneme"));
    $config = json_decode(file_get_contents(resource_path("views/limon-v1/config.aek.json"),true));
    return $config->file_name;
});

Route::get("/path",[HomeController::class,"index"]);