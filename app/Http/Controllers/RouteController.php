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

    public function search_start_point(string $start_point_value, string $end_point_value)
    {
        if ($end_point_value == '') {
            $routes = Route::where('start_point', 'like', "%$start_point_value%")->pluck('start_point')->toArray();
        } else {
            $routes = Route::where('start_point', 'like', "%$start_point_value%")
                // ->where('end_point', 'like', "%$end_point_value%")
                ->pluck('start_point')->toArray();
        }

        // Lấy tất cả start_point trong bảng
        $allRoutes = Route::pluck('start_point')->toArray();

        // Gộp 2 mảng và loại trùng
        $result = array_values(array_unique(array_merge($routes, $allRoutes)));

        // dd($result);

        return response()->json($result);
    }


    // Tìm kiếm điểm kết thúc
    public function search_end_point(string $start_point_value, string $end_point_value)
    {
        // Lấy các end_point khớp điều kiện tìm kiếm
        if ($start_point_value == '') {
            $routes = Route::where('end_point', 'like', "%$end_point_value%")
                ->pluck('end_point')
                ->toArray();
        } else {
            $routes = Route::where('end_point', 'like', "%$end_point_value%")
                // ->where('start_point', 'like', "%$start_point_value%") 
                ->pluck('end_point')
                ->toArray();
        }

        // Lấy tất cả end_point trong bảng
        $allRoutes = Route::pluck('end_point')->toArray();

        // Gộp lại và loại trùng
        $result = array_values(array_unique(array_merge($routes, $allRoutes)));

        return response()->json($result);
    }
}
