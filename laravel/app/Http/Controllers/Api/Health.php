<?php

namespace App\Http\Controllers\Api;

class Health
{
    public function index()
    {
        return response()->json([
            'status' => 'ok',
            'message' => 'The application is healthy.'
        ]);
    }
}
