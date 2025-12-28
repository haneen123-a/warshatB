<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function profile(Request $request)
    {
        return response()->json($request->user(), 200);
    }
}
