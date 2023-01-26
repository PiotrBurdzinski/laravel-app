<?php

namespace App\Http\Controllers\api;

use App\Models\People;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\PostResource;

class PeopleController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(People::all(), 200);
    }

    public function store(People $people_app): JsonResponse
    {
        return response()->json($people_app, 201);
    }

    public function show(People $people_app): JsonResponse
    {
        return response()->json($people_app, 200);
    }

    public function update(People $people_app): JsonResponse
    {
        return response()->json($people_app, 201);
    }

    public function delete(People $people_app): JsonResponse
    {
        $people_app -> delete();
        return response()->json($people_app, 204);
    }
}
