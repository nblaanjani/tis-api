<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/posts/{id}', function ($id) {
    return response()->json([
        'id' => $id,
        'message' => 'GET WORK'
    ]);
});

Route::post('/tags', function (Request $request) {
    return response()->json([
        'data' => $request->all()
    ]);
});