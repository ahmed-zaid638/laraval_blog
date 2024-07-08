<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome', ["name" => "ahmed"]);
});


Route::get("/posts", [PostController::class,  "index"])->name("posts.index");
Route::get("/posts/{post}", [PostController::class, "show"])->name("posts.show");
Route::get("/create", [PostController::class, "create"])->name("posts.create");
Route::post("/posts", [PostController::class, "store"])->name("posts.store");
Route::delete("/posts/{post}", [PostController::class, "destroy"])->name("posts.destroy");
