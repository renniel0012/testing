<?php

use App\Http\Controllers\ExampleController;

Route::get('/example', [ExampleController::class, 'example']);

Route::fallback(function(){
    return response()->json([
        'message' => 'Endpoint not found.'], 404);
});
