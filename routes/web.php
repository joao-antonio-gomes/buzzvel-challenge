<?php

use App\Http\Controllers\Search;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/index');
});

Route::get('/search', [Search::class, 'getNearbyHotels']);
