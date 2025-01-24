<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request)
    {
        // Return the authenticated user
        dd("s");
        return response()->json($request->user());
    }
}
