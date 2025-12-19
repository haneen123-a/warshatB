<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function __construct()
    {
        // Enforce authentication and 'client' role at controller level (closure used for test reliability)
        $this->middleware('auth:sanctum');

        $this->middleware(function ($request, $next) {
            $user = $request->user();

            if (! $user) {
                return response()->json(['message' => 'Unauthenticated.'], 401);
            }

            if ((string) $user->role !== 'client') {
                return response()->json(['message' => 'Forbidden.'], 403);
            }

            return $next($request);
        })->only(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //returns all sections
        return response()->json(Section::all(), 200);
    }

    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        return response()->json($section->load('services'), 200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Section $section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        //
    }
}
