<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function example()
    {
        return response()->json([
            'name' => 'Renniel Taladtad',
            'email' => 'renniel0012@gmail.com',
            'age' => 31,
        ]);
    }
}
