<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/' ,function() {
   return view('home');
});
Route::get("/home",[HomeController::class,'index']);


Route::post('/mycontroller/{id?}',
    [MyController::class, 'myfunction'
]);


Route::get('/hello/{id?}', function ($val="") {
    return "<h1>Hello World! $val</h1>";
});

Route::get("/mycontroller/{id?}",[MyController::class,'myfunction']);

Route::post("/mycontroller/{id?}",[MyController::class,'myfunction']);

Route::get("/login",[LoginController::class,'index']);

Route::get("/register",[RegisterController::class,'index']);
