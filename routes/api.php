<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;
use App\Http\Middleware\IsTokenExceeded;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:api', IsTokenExceeded::class])->group(function () {
    
    Route::post('movies/title/{title}', function ($title) {

        $movies = Movie::where('title', $title);
        return $movies->get();

    });


    Route::post('movie/{movie:reference_code}', function (Movie $movie) {
        return $movie;
    });


    Route::post('movies/category/{category}', function ($category) {

        $movies = Movie::where('category', $category);
        return $movies->get();

    });



});

