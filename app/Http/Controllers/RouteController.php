<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $routes = Route::all();
        return response()->json($routes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // Tìm kiếm điểm kết thúc
    public function search_start_point(string $start_point_value, string $end_point_value)
    {
        $routes = [];

        if ($end_point_value == '') {

            $routes = Route::where('start_point', 'like', "%$start_point_value%")->get();
        } else {
            $routes = Route::where('start_point', 'like', "%$start_point_value%")
                ->where('end_point', 'like', "%$end_point_value%")->get();
        }

        return response()->json($routes);
    }

    // Tìm kiếm điểm bắt đầu
    public function search_end_point(string $start_point_value, string $end_point_value)
    {
        $routes = [];

        if ($start_point_value == '') {

            $routes = Route::where('end_point', 'like', "%$end_point_value%")->get();
        } else {
            $routes = Route::where('start_point', 'like', "%$start_point_value%")
                ->where('end_point', 'like', "%$end_point_value%")->get();
        }

        return response()->json($routes);
    }
}
